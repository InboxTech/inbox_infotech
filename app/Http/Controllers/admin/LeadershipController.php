<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
//use App\Models\Leadership;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Models\Leadership;

class LeadershipController extends Controller
{
    public function index()
    {
       $arr['data'] =  Leadership::paginate(10);
      // $arr['data'] = DB::table('leaderships')->paginate(10);
        //return $arr;die;
       return view('admin.leaderlist',$arr);
    }
    public function create(Request $r,$id='')
    {
        if($id !='')
        {
            $arr = Leadership::findorFail($id);
           // $arr = DB::table('leaderships')->where('id',$id)->get();
           // dd($arr);           
            $arr['id'] =$arr->id;
            $arr['name'] =$arr->name;
            $arr['title'] = $arr->title;
            $arr['details'] =$arr->details;
            $arr['photo'] = $arr->photo;
            $arr['status'] =$arr->status;
            $arr['created_at'] =$arr->created_at;
            $arr['updated_at'] =$arr->updated_at;
        }else{
            $arr['id'] ='';
            $arr['name'] ='';
            $arr['title'] = '';
            $arr['details'] ='';
            $arr['photo'] = '';
            $arr['status'] ='';
            $arr['created_at'] ='';
            $arr['updated_at'] ='';
        }
        /* return $arr;
        die; */
        return view('admin.manageleadership',$arr);
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
            'name'=>'required',
            'details'=>'required',
            'photo'=>$image_validation
            
        ]);

        /* $paidArr=$request->post('paid'); 
        $skuArr=$request->post('name');  */
        //$paidArr=$request->post('paid'); 
        if($request->post('id')>0){
            $model=Leadership::find($request->post('id'));
            $message = "Record Updated successfully!";
            $model['updated_at'] = Carbon::now()->toDateTimeString();
            $model['status'] = $request->status;
        }else{
            $model=new Leadership();
           // $message="Product inserted";
            $message = "Record Add successfully!";
            $model['status'] = '1';
        }
        if($request->hasfile('photo')){
            if($request->post('id')>0){                
                $arrImage=DB::table('leaderships')->where(['id'=>$request->post('id')])->get();
                if(Storage::exists('/public/media/'.$arrImage[0]->photo)){
                    Storage::delete('/public/media/'.$arrImage[0]->photo);
                }
            }
            $image=$request->file('photo');
            $ext=$image->extension();
            $image_name=time().'.'.$ext;
            $image->storeAs('/public/media',$image_name);
            $model->photo=$image_name;
        }

        $model->title=$request->post('title');;
        $model->name=$request->post('name');
        $model->details=$request->post('details');
        $model->save();

        return redirect('/admin/leadership/list')->with('success',$message);
		
    }
        public function destroy(Request $request,$id)
    {
        $arr = Leadership::find($id);
        if($arr != ''){
            $arr->delete();
            $message = "Record Deleted successfully!";
        }else{
            $message = "Record Not found";
        }
        return redirect('/admin/leadership/list')->with('success',$message);        
    }
   
    public function search(Request $request)
    {
        $find = $request->search;
            $query=DB::table('leaderships');
            $query=$query->where('title','like',"%$find%")->WhereNull('deleted_at');
            $query=$query->orwhere('name','like',"%$find%")->WhereNull('deleted_at');
            $query=$query->orwhere('details','like',"%$find%")->WhereNull('deleted_at');
            $query=$query->paginate(10);
            $arr['data']=$query;
            
            
        //return $result;die;
        return view('admin.leaderlist',$arr);
    }
}
