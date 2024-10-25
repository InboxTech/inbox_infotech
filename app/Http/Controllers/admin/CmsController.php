<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cms;
use Illuminate\Support\Facades\Auth;
use Session;
use Carbon\Carbon;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ExportCms;
use Spatie\Activitylog\Contracts\Activity;

class CmsController extends Controller
{
    public function cmslist(Request $request){
        
         $arr['data'] = Cms::paginate(10);
        //return $arr;
        //Activity::activity()->log('Look mum, I logged something');

        return view('admin.cmslist',$arr);

    }
    public function cmslistsearch(Request $request){
      /*  return $request->all();
        die; */
        if($request->search != null){
            if($request->property == 'Page Name')
        {
            $arr['data'] = Cms::where('page_name', 'like', $request->search.'%')->paginate(10);
        }elseif($request->property == 'Title'){
            $arr['data'] = Cms::where('title', 'like', $request->search.'%')->paginate(10);
        }elseif($request->property == 'All Data'){
            $arr['data'] = Cms::paginate(10);
        }
        }else{
            $arr['data'] = Cms::paginate(10);
        }
        
         
        //return $arr;die;
        return view('admin.cmslist',$arr);
    }
    public function cmsmanage(Request $r,$id='')
    {
        if($id !='')
        {
            $arr = Cms::findorFail($id);
           //dd($arr);           
            $arr['id'] =$arr->id;
            $arr['page_name'] =$arr->page_name;
            $arr['title'] = $arr->title;
            $arr['short_details'] =$arr->short_details;
            $arr['long_details'] = $arr->long_details;
            $arr['main_image'] =$arr->main_image;
            $arr['nav_title'] =$arr->nav_title;
            $arr['nav_description'] =$arr->nav_description;
            $arr['galleryimages'] =$arr->galleryimages;
            $arr['createdby'] =$arr->createdby;
            $arr['updatedby'] =$arr->updatedby;
            $arr['created_at'] =$arr->created_at;
            $arr['updated_at'] =$arr->updated_at;
            $arr['status'] =$arr->status;
        }else{
            $arr['id'] ='';
            $arr['page_name'] ='';
            $arr['title'] ='';
            $arr['short_details'] ='';
            $arr['long_details'] ='';
            $arr['main_image'] ='';
            $arr['nav_title'] ='';
            $arr['nav_description'] ='';
            $arr['galleryimages'] ='';
            $arr['createdby'] ='';
            $arr['updatedby'] ='';
            $arr['created_at'] ='';
            $arr['updated_at'] ='';
            $arr['status'] ='';
        }
        /* return $arr;
        die; */
        return view('admin.managecms',$arr);
    }
    public function submitform(Request $req){
        /* return $arr = $req->all();
        die; */
        /* $arr = Carbon::now()->toDateTimeString();
        print_r($arr);
        die; */
        $validatedData = $req->validate([
            'page_name'=> 'required',
            'title'=> 'required|unique:cms,title,'.$req->id.'id',
            'short_details'=> 'required',
            'long_details'=> 'required',
            'main_image' => 'image|mimes:jpg,png,jpeg,gif,webp,svg|max:2048',
            'galleryimages*' => 'image|mimes:jpg,png,jpeg,gif,webp,svg|max:2048',
   
           ]);
           if($req->id != '')
           {
            $arr = Cms::findOrFail($req->id);
            $message = "Record Updated successfully!";
            $arr['updatedby'] = Auth::user()->name;
            $arr['updated_at'] = Carbon::now()->toDateTimeString();
            $arr['status'] = $req->status;
           }else{
            $arr = new Cms;
            $message = "Record Add successfully!";
            $arr['createdby'] = Auth::user()->name;
            $arr['status'] = '1';
           }
        
        if($req->hasFile('main_image')){ 
            $filenameWithExt    = $req->file('main_image')->getClientOriginalName();
            $filename           = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension          = $req->file('main_image')->getClientOriginalExtension();
            $fileNameToStore    = $filename.'_'.time().'.'.$extension;
            $path               = $req->file('main_image')->storeAs('public/cmsimages', $fileNameToStore);
            $arr['main_image'] = $fileNameToStore;
        }
        if($req->hasFile('galleryimages')){ 
            $filenameWithExt1    = $req->file('galleryimages')->getClientOriginalName();
            $filename1           = pathinfo($filenameWithExt1, PATHINFO_FILENAME);
            $extension          = $req->file('galleryimages')->getClientOriginalExtension();
            $fileNameToStore1    = $filename1.'_'.time().'.'.$extension;
            $path1               = $req->file('galleryimages')->storeAs('public/cmsimages', $fileNameToStore1);
            $arr['galleryimages'] = $fileNameToStore1;
        }
        
        $arr['page_name'] = $req->page_name;
        $arr['title'] = $req->title;
        $arr['short_details'] = $req->short_details;
        $arr['long_details'] = $req->long_details;
        $arr['nav_title'] = $req->nav_title;
        $arr['nav_description'] = $req->nav_description;
        $arr->save();
       return redirect('/admin/cms/cmslist')->with('success',$message);
       }
       
       public function delete($id)
       {
        $arr = CMS::find($id);
        if($arr != ''){
            $arr->delete();
            $message = "Record Deleted successfully!";
        }else{
            $message = "Record Not found";
        }
        return redirect('/admin/cms/cmslist')->with('success',$message);
       }
       public function export(Request $request){
       // Excel::import(new ExportCms, $request->file('file')->store('files'));
       return Excel::download(new ExportCms, 'cms.xlsx');
        
        //return redirect()->back();
        
       }
       
}
