<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Clientlogo;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ClientlogoController extends Controller
{
    public function index()
    {
       $arr['data'] =  Clientlogo::paginate(10);
      // $arr['data'] = DB::table('Clientlogos')->paginate(10);
        //return $arr;die;
       return view('admin.clientlogolist',$arr);
    }
    public function create(Request $r,$id='')
    {
        if($id !='')
        {
            $arr = Clientlogo::findorFail($id);
           // $arr = DB::table('Clientlogos')->where('id',$id)->get();
           // dd($arr);           
            $arr['id'] =$arr->id;
            $arr['name'] =$arr->name;
            $arr['image'] = $arr->image;
            $arr['status'] =$arr->status;
            $arr['created_at'] =$arr->created_at;
            $arr['updated_at'] =$arr->updated_at;
        }else{
            $arr['id'] ='';
            $arr['name'] ='';
            $arr['image'] = '';
            $arr['status'] ='';
            $arr['created_at'] ='';
            $arr['updated_at'] ='';
        }
        /* return $arr;
        die; */
        return view('admin.manageclientlogo',$arr);
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
            'name'=>'required',
            'photo'=>$image_validation
            
        ]);

        /* $paidArr=$request->post('paid'); 
        $skuArr=$request->post('name');  */
        //$paidArr=$request->post('paid'); 
        if($request->post('id')>0){
            $model=Clientlogo::find($request->post('id'));
            $message = "Record Updated successfully!";
            $model['updated_at'] = Carbon::now()->toDateTimeString();
            $model['status'] = $request->status;
        }else{
            $model=new Clientlogo();
           // $message="Product inserted";
            $message = "Record Add successfully!";
            $model['status'] = '1';
        }
        if($request->hasfile('photo')){
            if($request->post('id')>0){                
                $arrImage=DB::table('clientlogos')->where(['id'=>$request->post('id')])->get();
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
        $model->name=$request->post('name');
        $model->save();

        return redirect('/admin/clientlogo/list')->with('success',$message);
		
    }
        public function destroy(Request $request,$id)
    {
        $arr = Clientlogo::find($id);
        if($arr != ''){
            $arr->delete();
            $message = "Record Deleted successfully!";
        }else{
            $message = "Record Not found";
        }
        return redirect('/admin/clientlogo/list')->with('success',$message);        
    }
   
    public function search(Request $request)
    {
        $find = $request->search;
            $query=DB::table('clientlogos');
            $query=$query->where('name','like',"%$find%")->WhereNull('deleted_at');
            $query=$query->paginate(10);
            $arr['data']=$query;
            
            
        //return $result;die;
        return view('admin.clientlogolist',$arr);
    }
}
