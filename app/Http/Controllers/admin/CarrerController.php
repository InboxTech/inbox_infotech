<?php

//namespace App\Http\Controllers;
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Carrer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ExportJobs;
use DB;
use Storage;
class CarrerController extends Controller
{
    public function joblist(Request $request){
        
        $arr['data'] = Carrer::paginate(10);
       //return $arr;
       return view('admin.joblist',$arr);
   }
   public function joblistsearch(Request $request){
     /*  return $request->all();
       die; */
       if($request->search != null){
           if($request->property == 'Positions')
       {
           $arr['data'] = Carrer::where('position', 'like', $request->search.'%')->paginate(10);
       }elseif($request->property == 'All Data'){
           $arr['data'] = Carrer::paginate(10);
       }
       }else{
           $arr['data'] = Carrer::paginate(10);
       }
       
        
       //return $arr;die;
       return view('admin.joblist',$arr);
   }
   public function managejob(Request $r,$id='')
   {
       if($id !='')
       {
           $arr = Carrer::findorFail($id);
          //dd($arr);           
           $arr['id'] =$arr->id;
           $arr['position'] =$arr->position;
           $arr['salary'] = $arr->salary;
           $arr['experience'] =$arr->experience;
           $arr['joinin'] = $arr->joinin;
           $arr['jobdescription'] =$arr->jobdescription;
           $arr['status'] =$arr->status;
           $arr['image'] =$arr->image;
           $arr['startdate'] =$arr->startdate;
           $arr['endmdate'] =$arr->endmdate;
           $arr['skill'] =$arr->skill;
           $arr['postedby'] =$arr->postedby;
           $arr['created_at'] =$arr->created_at;
           $arr['updated_at'] =$arr->updated_at;
       }else{
           $arr['id'] ='';
           $arr['position'] ='';
           $arr['salary'] = '';
           $arr['experience'] ='';
           $arr['joinin'] = '';
           $arr['jobdescription'] ='';
           $arr['status'] ='';
           $arr['startdate'] ='';
           $arr['endmdate'] ='';
           $arr['skill'] ='';
           $arr['postedby'] ='';
           $arr['created_at'] ='';
           $arr['updated_at'] ='';
           $arr['image'] ='';

       }
       /* return $arr;
       die; */
       return view('admin.managejob',$arr);
   }
   public function submitform(Request $req){
       /* return $arr = $req->all();
       die; */
       if($req->post('id')>0){
        $image_validation="mimes:jpeg,jpg,png,webp";
    }else{
        $image_validation="required|mimes:jpeg,jpg,png,webp";
    }   
       $validatedData = $req->validate([
           'image'=>$image_validation,
           'position'=> 'required',
           'jobdescription'=> 'required',
           'skill'=> 'required',
        ]);
          if($req->id != '')
          {
           $arr = Carrer::findOrFail($req->id);
           $message = "Record Updated successfully!";
           $arr['updated_at'] = Carbon::now()->toDateTimeString();
           $arr['status'] = $req->status;
          }else{
           $arr = new Carrer;
           $message = "Record Add successfully!";
           $arr['postedby'] = Auth::user()->name;
           $arr['status'] = '1';
          }
          if($req->hasfile('image')){
            if($req->post('id')>0){                
                $arrImage=DB::table('carrers')->where(['id'=>$req->post('id')])->get();
                if(Storage::exists('/public/media/'.$arrImage[0]->image)){
                    Storage::delete('/public/media/'.$arrImage[0]->image);
                }
            }
            $image=$req->file('image');
            $ext=$image->extension();
            $image_name=time().'.'.$ext;
            $image->storeAs('/public/media',$image_name);
            $arr['image']=$image_name;
        }       
       $arr['position'] = $req->position;
       $arr['salary'] = $req->salary;
       $arr['experience'] = $req->experience;
       $arr['joinin'] = $req->joinin;
       $arr['jobdescription'] = $req->jobdescription;
       $arr['startdate'] = $req->startdate;
       $arr['endmdate'] = $req->endmdate;
       $arr['skill'] = $req->skill;
       $arr->save();
      return redirect('/admin/career/jobposting/list')->with('success',$message);
      }
      
      public function delete($id)
      {
       $arr = Carrer::find($id);
       if($arr != ''){
           $arr->delete();
           $message = "Record Deleted successfully!";
       }else{
           $message = "Record Not found";
       }
       return redirect('/admin/career/jobposting/list')->with('success',$message);
      }
      public function export(Request $request){
      // Excel::import(new ExportCms, $request->file('file')->store('files'));
      return Excel::download(new ExportJobs, 'jobpostinglist.xlsx');

       //return redirect()->back();
       
      }
}
