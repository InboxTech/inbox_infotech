<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ExportUser;
use Illuminate\Support\Facades\Session;
class UserController extends Controller
{
    public function index()
    {
        $userType = Auth::user()->users_type;
        $userstatus = Auth::user()->status;
        if($userstatus == '1')
        {
            return view('admin.dashboard');        
        }
        else
        {
            Auth::logout();
            Session::flush();
            return $message = "<h3 style='color:red'>"."Your Account is Notactive, Please Contact System Admin"."</h3>"."<a href='/'>"."Click Here to Main Website"."</a>";
        }
       // return view('admin.dashboard');
    }
    public function userlist()
    {
        $arr['data'] = User::paginate(10);
        return view('admin.userlist',$arr);
    }
    public function usermanage($id)
    {
            $arr = User::findorFail($id);
           //dd($arr);
           $arr['id'] =$arr->id;
            $arr['name'] =$arr->name;
            $arr['email'] =$arr->email; 
            $arr['status'] =$arr->status;
            $arr['users_type'] = $arr->users_type;
            //$arr['password'] =Hash::make($arr->password);
            return view('admin.manageuser',$arr);
    }
    public function submitform(Request $request)
    {
            $arr = User::findOrFail($request->id);
            $message = "Record Updated successfully!";
            $arr['users_type'] = $request->users_type;
            $arr['updated_at'] = Carbon::now()->toDateTimeString();
            $arr['status'] = $request->status;
            $arr->save();
            return redirect('/admin/users/userlist')->with('success',$message);
    }
    public function userdelete($id){
        $data = User::find($id);
        $data->delete();
        if($data)
        {
            echo "Record Deleted";
        }
    }
    public function export(Request $request){
        return Excel::download(new ExportUser, 'userlist.xlsx');
         
        }

        public function userlistsearch(Request $request){
            /*  return $request->all();
              die; */
              if($request->search != null){
                  if($request->property == 'name')
              {
                  $arr['data'] = User::where('name', 'like', $request->search.'%')->paginate(10);
              }elseif($request->property == 'email'){
                  $arr['data'] = User::where('email', 'like', $request->search.'%')->paginate(10);
              }elseif($request->property == 'All Data'){
                  $arr['data'] = User::paginate(10);
              }
              }else{
                  $arr['data'] = User::paginate(10);
              }
              
               
              //return $arr;die;
              return view('admin.userlist',$arr);
          }
          function logout(){
           // session_destroy();
          }

}
