<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Carbon\Carbon;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CustomerController extends Controller
{
    public function index()
    {
       /*  return "shyam";
        die; */
       //$arr['data'] =  Customer::paginate(10);
       $arr['data'] = DB::table('customers')
       ->leftjoin('projects','projects.id','=','customers.project_id')
       ->select('customers.*','projects.name')->WhereNull('customers.deleted_at')
       ->orderBy('customers.id','desc')
       ->paginate(10);
       //dd($arr);
       //return $arr;die;
       return view('admin.custometrlist',$arr);
    }
    public function create(Request $r,$id='')
    {
        if($id !='')
        {
            $arr = Customer::findorFail($id);
           // $arr = DB::table('leaderships')->where('id',$id)->get();
           // dd($arr);           
           
        }else{
            $arr['id'] ='';
            $arr['firstname'] = '';
            $arr['lastname'] = '';
            $arr['email'] = '';
            $arr['gender'] = '';
            $arr['phone'] = '';
            $arr['image'] = '';
            $arr['address'] = '';
            $arr['city'] = '';
            $arr['state'] = '';
            $arr['country'] = '';
            $arr['comment'] = '';
            $arr['status'] ='';
            $arr['created_at'] ='';
            $arr['updated_at'] ='';
            $arr['project_id'] ='';
        }
        /* return $arr;
        die; */
        $arr['project'] =DB::table('projects')->get();
        return view('admin.managecustomers',$arr);
    }

        public function store(Request $request)
    {
       /*  print_r($request->post());
        die; */
         
        $request->validate([
            'email'=>'required|unique:customers,email,'.$request->post('id'),
            'phone'=>'required|unique:customers,phone,'.$request->post('id'),            
        ]);

        if($request->post('id')>0){
            $model=Customer::find($request->post('id'));
            $message = "Record Updated successfully!";
            $model['updated_at'] = Carbon::now()->toDateTimeString();
            $model['status'] = $request->status;
        }else{
            $model=new Customer();
           // $message="Product inserted";
            $message = "Record Add successfully!";
            $model['status'] = '1';
            $model->password = Hash::make('Inbox@123');
        }
        if($request->hasfile('image')){

            if($request->post('id')>0){
                $arrImage=DB::table('customers')->where(['id'=>$request->post('id')])->get();
                if(Storage::exists('/public/media/customer/'.$arrImage[0]->image)){
                    Storage::delete('/public/media/customer/'.$arrImage[0]->image);
                }
            }

            $image=$request->file('image');
            $ext=$image->extension();
            $image_name=time().'.'.$ext;
            $image->storeAs('/public/media/customer',$image_name);
            $model->image=$image_name;
        }
        $model->firstname=$request->post('firstname');
        $model->lastname=$request->post('lastname');
        $model->gender=$request->post('gender');
        $model->project_id=$request->post('project_id');
        $model->email=$request->post('email');
        $model->phone=$request->post('phone');
        $model->address=$request->post('address');
        $model->city=$request->post('city');
        $model->state=$request->post('state');
        $model->country	=$request->post('country');
        $model->comment=$request->post('comment');
        $model->save();

        return redirect('/admin/customers/list')->with('success',$message);
		
    }
        public function destroy(Request $request,$id)
    {
        $arr = Customer::find($id);
        if($arr != ''){
            $arr->delete();
            $message = "Record Deleted successfully!";
        }else{
            $message = "Record Not found";
        }
        return redirect('/admin/customers/list')->with('success',$message);        
    }
   
    public function search(Request $request)
    {
            $find = $request->search;
            //$query=DB::table('customers');
            $query = DB::table('customers')
            ->join('projects','projects.id','=','customers.project_id')
            ->select('customers.*','projects.name')->WhereNull('customers.deleted_at');
            $query=$query->where('customers.firstname','like',"%$find%")->WhereNull('customers.deleted_at');
            $query=$query->orwhere('customers.lastname','like',"%$find%")->WhereNull('customers.deleted_at');
            $query=$query->orwhere('customers.email','like',"%$find%")->WhereNull('customers.deleted_at');
            $query=$query->orwhere('customers.phone','like',"%$find%")->WhereNull('customers.deleted_at');
            $query=$query->orwhere('projects.name','like',"%$find%")->WhereNull('projects.deleted_at');
            $query=$query->paginate(10);
            $arr['data']=$query;
            
            
        //return $result;die;
        return view('admin.custometrlist',$arr);
    }
    
}
