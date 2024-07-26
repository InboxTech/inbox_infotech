<?php

namespace App\Http\Controllers\admin;

use App\Models\Award;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Storage;
use Carbon\Carbon;

class AwardController extends Controller
{
    public function index()
    {
       $arr['data'] =  Award::paginate(10);
      // $arr['data'] = DB::table('leaderships')->paginate(10);
        //return $arr;die;
       return view('admin.awardlist',$arr);
    }
    public function create(Request $r,$id='')
    {
        if($id !='')
        {
            $arr = Award::findorFail($id);
           // $arr = DB::table('leaderships')->where('id',$id)->get();
           // dd($arr);           
            $arr['id'] =$arr->id;
            $arr['title'] = $arr->title;
            $arr['details'] =$arr->description;
            $arr['photo'] = $arr->image;
            $arr['status'] =$arr->status;
            $arr['created_at'] =$arr->created_at;
            $arr['updated_at'] =$arr->updated_at;
        }else{
            $arr['id'] ='';
            $arr['title'] = '';
            $arr['details'] ='';
            $arr['photo'] = '';
            $arr['status'] ='';
            $arr['created_at'] ='';
            $arr['updated_at'] ='';
        }
        /* return $arr;
        die; */
        return view('admin.manageaward',$arr);
    }

        public function store(Request $request)
    {
       /*  print_r($request->post());
        die; */
        if($request->post('id')>0){
            $image_validation="mimes:jpeg,jpg,png,webp";
        }else{
            $image_validation="required|mimes:jpeg,jpg,png,webp";
        }   
        $request->validate([
            'title'=>'required',
            'details'=>'required',
            'photo'=>$image_validation
            
        ]);

        /* $paidArr=$request->post('paid'); 
        $skuArr=$request->post('name');  */
        //$paidArr=$request->post('paid'); 
        if($request->post('id')>0){
            $model=Award::find($request->post('id'));
            $message = "Record Updated successfully!";
            $model['updated_at'] = Carbon::now()->toDateTimeString();
            $model['status'] = $request->status;
        }else{
            $model=new Award();
           // $message="Product inserted";
            $message = "Record Add successfully!";
            $model['status'] = '1';
        }
        if($request->hasfile('photo')){
            if($request->post('id')>0){                
                $arrImage=DB::table('awards')->where(['id'=>$request->post('id')])->get();
                if(Storage::exists('/public/media/'.$arrImage[0]->image)){
                    Storage::delete('/public/media/'.$arrImage[0]->image);
                }
            }
            $image=$request->file('photo');
            $ext=$image->extension();
            $image_name=time().'.'.$ext;
            $image->storeAs('/public/media',$image_name);
            $model->image=$image_name;
        }
        $model->title=$request->post('title');
        $model->description=$request->post('details');
        $model->save();

        return redirect('/admin/award/list')->with('success',$message);
		
    }
        public function destroy(Request $request,$id)
    {
        $arr = Award::find($id);
        if($arr != ''){
            $arr->delete();
            $message = "Record Deleted successfully!";
        }else{
            $message = "Record Not found";
        }
        return redirect('/admin/award/list')->with('success',$message);        
    }
   
    public function search(Request $request)
    {
        $find = $request->search;
            $query=DB::table('awards');
            $query=$query->where('title','like',"%$find%")->WhereNull('deleted_at');
            $query=$query->orwhere('description','like',"%$find%")->WhereNull('deleted_at');
            $query=$query->paginate(10);
            $arr['data']=$query;
            
            
        //return $result;die;
        return view('admin.awardlist',$arr);
    }
}
