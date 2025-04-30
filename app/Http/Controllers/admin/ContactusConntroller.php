<?php

namespace App\Http\Controllers\admin;

use Illuminate\Support\Carbon;
use App\Models\Contactu;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ExportUser;

class ContactusConntroller extends Controller
{
    public function index()
    {
        //return "shyam";
       $result['data']=Contactu::orderBy('id', 'desc')->paginate(10);
        return view('admin/contactuslist',$result);
    }

    
    public function manage_contactus(Request $request,$id='')
    {
        if($id>0){
            $arr=Contactu::where(['id'=>$id])->get(); 
            $result['name']=$arr['0']->name;
            $result['email']=$arr['0']->email;
            $result['ip']=$arr['0']->ip;
            $result['message1']=$arr['0']->message;
            $result['status']=$arr['0']->status;
            $result['created_at']=$arr['0']->created_at;
            $result['id']=$arr['0']->id;
        }else{
            $result['name']='';
            $result['email']='';
            $result['ip']='';
            $result['message1']='';
            $result['status']='';
            $result['created_at']='';
            $result['id']="";
        }
       //return $result;die;
        return view('admin/manage_contactus',$result);
    }

    public function manage_contactus_process(Request $request)
    {
        

        if($request->post('id')>0){
            $model=Contactu::find($request->post('id'));
            $msg="Record updated";
        }else{
            $model=new Contactu();
            $msg="Record inserted";
        }        
        $model->status=$request->post('status');
        $model->save();
        $request->session()->flash('success',$msg);
        return redirect('admin/contactus');
        
    }

    public function delete(Request $request,$id){
        $model=Contactu::find($id);
        $model->delete();
        $request->session()->flash('success','Record deleted');
        return redirect('admin/contactus');
    }

    public function status(Request $request,$status,$id){
        $model=Contactu::find($id);
        $model->status=$status;
        $model->save();
        $request->session()->flash('success','Status updated');
        return redirect('admin/contactus');
    }
}
