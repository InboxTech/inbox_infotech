<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use FontLib\Table\Type\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Use_;
use Illuminate\Support\Facades\torage;
use App\Models\Customer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\Console\Helper\Table;
use Illuminate\Support\Facades\Storage;


class AuthController extends Controller
{
    public function login()
    {
        return view('customer.login');
    }
    public function register()
    {
        return view('customer.register');
    }
    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
      
        $arr = Customer::where('email',$request->email)->first();
        //dd($arr);die;
        if($arr != null)
        {
            $fname = $arr->firstname;
            $lname = $arr->lastname;
            $name = $fname.' '.$lname;
            $image = $arr->image;
            $id = $arr->id;
            $status = $arr->status;
            if (Hash::check($request->password,$arr->password)) {
                session(['username' => $name, 'userid'=>$id, 'image'=>$image, 'cust_status'=>$status]);
                return redirect('customer/dashboard');
             }
             else{
                $message = 'Oppes! You have entered invalid password';
                return redirect('customers/login')->with('fail',$message);
             }
        }
        else
        {
            $message = 'Oppes! You have entered invalid emailid';
            return redirect('customers/login')->with('fail',$message);
        }
        
    }
    public function mydashboard()
    {
        return view('customer.newdashbaord');
    }
    public function logout()
    {
        session()->flush();
        $message = 'Logout Successfully';
        return redirect('customers/login')->with('fail',$message);
    }
    
    public function registerationsubmit(Request $request)
    {
        $userfound = DB::table('users')->where('id',5)->get();
        //dd($userfound);
        $request->validate([
            'fname'=>'required',
            'lname'=>'required',
            'email'=>'required|unique:customers,email',
            'phone'=>'required|unique:customers,phone',
            'password'=>'required|min:8|string',
        ]);
        //return $request->all() ;
        $model = new Customer();
        $model->firstname = $request->fname;
        $model->lastname = $request->lname;
        $model->email = $request->email;
        $model->phone = $request->phone;
        $model->password = Hash::make($request->password);
        $model->status = 0;
        $model->save();
        $findcust = DB::table('customers')->where('id',$model->id)->get();
        $cust_fname = $findcust[0]->firstname;
        $cust_lname = $findcust[0]->lastname;
        $fullname = $cust_fname.' '.$cust_lname;
        $emails = $findcust[0]->email;
        $data = array('name'=>$fullname);

        
        $emails1 = $userfound[0]->email;
        $adminname = $userfound[0]->name; 
        $data1 = array('name'=>$adminname,'customername'=>$fullname,'customerid'=>$model->id);
        
        
        $subject = "Account Creation";

      Mail::send('email.accountcreate', $data, function($message) use ($emails,$subject)
    {    
    $message->to($emails)->subject($subject);    
    });

    Mail::send('email.admin', $data1, function($message) use ($emails1,$subject)
    {    
    $message->to($emails1)->subject($subject);    
    });

    $message = 'Account Creation sucessfully, Kindly login and update your profile';
    return redirect('customers/login')->with('pass',$message);
    }
    public function accountsetting()
    {
        //echo "shyam";
       $id = Session::get('userid');
       // $id=7;
        $arr = Customer::findorFail($id);
        //dd($arr);
        return view('customer.regisration',$arr);
    }
    public function accountsettingsubmit(Request $request)
    {
        $request->validate([
            'phone'=>'required|unique:customers,phone,'.$request->post('id'),
            'firstname'=>'required',
            'lastname'=>'required',        
            'gender'=>'required',
            'address'=>'required',
            'city'=>'required', 
            'state'=>'required', 
            'country'=>'required',    
        ]);    
            $model=Customer::find($request->post('id'));
            $message = "Record Updated successfully!";
            $model['updated_at'] = Carbon::now()->toDateTimeString();
            $model['status'] = $request->status;
    
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
        $model->phone=$request->post('phone');
        $model->address=$request->post('address');
        $model->city=$request->post('city');
        $model->state=$request->post('state');
        $model->country	=$request->post('country');
        $model->status	= 0 ;
        $model->save();
        $message = "Record Updated";
        
        return redirect('/customer/account')->with('success',$message);
    }
    public function changepasssowrd()
    {

        return view('customer.changepassword');
    }
    public function changepasswordsubmit(Request $request)
    {
        $this->validate($request, [
            'current_password' => 'required',
            'new_password' => 'required|min:8'
        ]);
        $auth=Customer::find($request->post('id'));
 // The passwords matches
        if (!Hash::check($request->get('current_password'), $auth->password)) 
        {
            return back()->with('fail', "Current Password is Invalid");
        }
 
// Current password and new password same
        if (strcmp($request->get('current_password'), $request->new_password) == 0) 
        {
            return redirect()->back()->with("fail", "New Password cannot be same as your current password.");
        }
 
        $user =  Customer::find($request->post('id'));
        $user->password =  Hash::make($request->new_password);
        $user->save();
        return back()->with('pass', "Password Changed Successfully");
    }
    
}
