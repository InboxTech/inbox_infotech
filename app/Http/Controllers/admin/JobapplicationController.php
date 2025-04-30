<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Jobapplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ExportJobapplication;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\PDF;
class JobapplicationController extends Controller
{
    
    public function jobapplist(Request $request){
        
        
        $arr['data'] = DB::table('jobapplications')
            ->Join('carrers', 'jobapplications.job_post_id', '=', 'carrers.id')
            ->select('carrers.position','jobapplications.*')
            ->whereNull('jobapplications.deleted_at')
            ->orderBy('jobapplications.job_application_id', 'desc')
            ->paginate(10);
      
       return view('admin.jobappllist',$arr);
   }
   public function jobapplistsearch(Request $request){
     /*  return $request->all();
       die; */
       if($request->search != null){
           if($request->property == 'Firstname')
       {
        $arr['data'] = DB::table('jobapplications')
        ->Join('carrers', 'jobapplications.job_post_id', '=', 'carrers.id')
        ->select('carrers.position','jobapplications.*')
        ->whereNull('jobapplications.deleted_at')
        ->where('jobapplications.first_name', 'like', $request->search.'%')
        ->paginate(10);
       }elseif($request->property == 'Position'){
        $arr['data'] = DB::table('jobapplications')
        ->Join('carrers', 'jobapplications.job_post_id', '=', 'carrers.id')
        ->select('carrers.position','jobapplications.*')
        ->whereNull('jobapplications.deleted_at')
        ->where('carrers.position', 'like', $request->search.'%')
        ->paginate(10);
       }
       elseif($request->property == 'Lastname'){
        $arr['data'] = DB::table('jobapplications')
        ->Join('carrers', 'jobapplications.job_post_id', '=', 'carrers.id')
        ->select('carrers.position','jobapplications.*')
        ->whereNull('jobapplications.deleted_at')
        ->where('jobapplications.last_name', 'like', $request->search.'%')
        ->paginate(10);
       }
       elseif($request->property == 'Mobile'){
        $arr['data'] = DB::table('jobapplications')
        ->Join('carrers', 'jobapplications.job_post_id', '=', 'carrers.id')
        ->select('carrers.position','jobapplications.*')
        ->whereNull('jobapplications.deleted_at')
        ->where('jobapplications.phone_no', 'like', $request->search.'%')
        ->paginate(10);
       }
       elseif($request->property == 'Email'){
        $arr['data'] = DB::table('jobapplications')
        ->Join('carrers', 'jobapplications.job_post_id', '=', 'carrers.id')
        ->select('carrers.position','jobapplications.*')
        ->whereNull('jobapplications.deleted_at')
        ->where('jobapplications.email_id', 'like', $request->search.'%')
        ->paginate(10);
       }
       }elseif($request->property == 'All Data'){
           $arr['data'] = DB::table('jobapplications')
            ->Join('carrers', 'jobapplications.job_post_id', '=', 'carrers.id')
            ->select('carrers.position','jobapplications.*')
            ->whereNull('jobapplications.deleted_at')
            ->paginate(10);
       }
       
        
       //return $arr;die;
       return view('admin.jobappllist',$arr);
   }
   public function managejobapp($id)
   {
    $arr = DB::table('jobapplications')
    ->Join('carrers', 'jobapplications.job_post_id', '=', 'carrers.id')
    ->select('carrers.position','jobapplications.*')
    ->where('jobapplications.job_application_id',$id)
    ->get();
    $arr['id'] = $arr[0]->job_application_id ;
    $arr['position'] = $arr[0]->position;
    $arr['first_name'] = $arr[0]->first_name;
    $arr['last_name'] = $arr[0]->last_name;
    // $arr['citizenship'] = $arr[0]->citizenship;
    // $arr['date_of_birth'] = $arr[0]->date_of_birth;
    $arr['address'] = $arr[0]->address;
    // $arr['zip_code'] = $arr[0]->zip_code;
    $arr['city'] = $arr[0]->city;
    $arr['state'] = $arr[0]->state;
    $arr['phone_no'] = $arr[0]->phone_no;
    $arr['email_id'] = $arr[0]->email_id;
    $arr['ready_to_reallocates'] = $arr[0]->ready_to_reallocates;
    $arr['resume'] = $arr[0]->resume;
    // $arr['photo'] = $arr[0]->photo;
    $arr['status'] = $arr[0]->status;
    $arr['created_at'] = $arr[0]->created_at;
    $arr['updated_at'] = $arr[0]->updated_at;
    $arr['updatedby'] = $arr[0]->updatedby;
    $arr['comment'] = $arr[0]->comment;
    $arr['qualification'] = DB::table('applicant_qualifications')
    ->where('job_application_id',$id)
    ->get();
    $arr['applicant_exps'] = DB::table('applicant_exps')
    ->where('job_application_id',$id)
    ->get();
    /* return $arr;
    die; */
       return view('admin.managejobapplication',$arr);
   }
   public function submitform(Request $req){
       
           $message = "Record Updated successfully!";
           $results = Jobapplication::where('job_application_id','=', $req->id)
           ->update([
                   'status' => $req->status,
                   'comment' => $req->comment,
                   'updated_at'=>Carbon::now()->toDateTimeString(),
                   'updatedby' => Auth::user()->name

             ]);

      return redirect('/admin/career/jobapplication/list')->with('success',$message);
      }
      
      public function delete($id)
      {
       $arr = Jobapplication::where('job_application_id',$id);
       if($arr != ''){
           $arr->delete();
           $message = "Record Deleted successfully!";
       }else{
           $message = "Record Not found";
       }
       return redirect('/admin/career/jobapplication/list')->with('success',$message);
      }
      public function export(Request $request){
      return Excel::download(new ExportJobapplication, 'job_application_list.xlsx');
       
      }
      public function print($id)
      {
        set_time_limit(300);
        $arr = DB::table('jobapplications')
        ->Join('carrers', 'jobapplications.job_post_id', '=', 'carrers.id')
        ->select('carrers.position','jobapplications.*')
        ->where('jobapplications.job_application_id',$id)
        ->get();
        $data1 = DB::table('applicant_qualifications')
        ->where('job_application_id',$id)
        ->get();
        $data2 = DB::table('applicant_exps')
        ->where('job_application_id',$id)
        ->get();
        $data = [
           'date' => date('m/d/Y'),
           'name' => $arr[0]->first_name,
           'id' => $arr[0]->job_application_id,
           'position' => $arr[0]->position,
           'first_name' => $arr[0]->first_name,
           'last_name' => $arr[0]->last_name,
        //    'citizenship' => $arr[0]->citizenship,
        //    'date_of_birth' => $arr[0]->date_of_birth,
           'address' => $arr[0]->address,
        //    'zip_code' => $arr[0]->zip_code,
           'city' => $arr[0]->city,
           'state' => $arr[0]->state,
           'phone_no' => $arr[0]->phone_no,
           'email_id' => $arr[0]->email_id,
           'ready_to_reallocates' => $arr[0]->ready_to_reallocates,
           'resume' => $arr[0]->resume,
        //    'photo' => $arr[0]->photo,
           'status' => $arr[0]->status,
           'created_at' => $arr[0]->created_at,
           'updated_at' => $arr[0]->updated_at,
           'updatedby' => $arr[0]->updatedby,
           'abz'=> $data1,
           'xyz'=> $data2,
           //'logo' => asset('logo')
            
        ];
        $file_name = 'Application_'. $arr[0]->first_name.'_'.$arr[0]->last_name.'.pdf';
       //  return "test";  
        $pdf = PDF::loadView('admin.printjobapp', $data);
     
        return $pdf->download($file_name);
      }
}
