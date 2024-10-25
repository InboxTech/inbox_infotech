<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use DB;
use Storage;
class SliderController extends Controller
{
    public function index()
    {
        //return "shyam";
        $result['data']=Slider::paginate(10);
        return view('admin/home_banner',$result);
    }

    
    public function manage_home_banner(Request $request,$id='')
    {
        if($id>0){
            $arr=Slider::where(['id'=>$id])->get(); 
            $result['image']=$arr['0']->image;
            $result['btn_txt']=$arr['0']->btn_txt;
            $result['btn_link']=$arr['0']->btn_link;
            $result['id']=$arr['0']->id;
        }else{
            $result['image']='';
            $result['btn_txt']='';
            $result['btn_link']='';
            $result['id']="";
        }

        return view('admin/manage_home_banner',$result);
    }

    public function manage_home_banner_process(Request $request)
    {
        if($request->post('id') == '')
        {
        $request->validate([
            'image'=>'required|mimes:jpeg,jpg,png,webp'
        ]);
        }
        if($request->post('id')>0){
            $model=Slider::find($request->post('id'));
            $msg="Banner updated";
        }else{
            $model=new Slider();
            $msg="Banner inserted";
        }

        if($request->hasfile('image')){

            if($request->post('id')>0){
                $arrImage=DB::table('sliders')->where(['id'=>$request->post('id')])->get();
                if(Storage::exists('/public/media/banner/'.$arrImage[0]->image)){
                    Storage::delete('/public/media/banner/'.$arrImage[0]->image);
                }
            }

            $image=$request->file('image');
            $ext=$image->extension();
            $image_name=time().'.'.$ext;
            $image->storeAs('/public/media/banner',$image_name);
            $model->image=$image_name;

        }
        $model->btn_txt=$request->post('btn_txt');
        $model->btn_link=$request->post('btn_link');
        $model->status=1;
        $model->save();
        $request->session()->flash('message',$msg);
        return redirect('admin/home_banner');
        
    }

    public function delete(Request $request,$id){
        $model=Slider::find($id);
        $model->delete();
        $request->session()->flash('message','Banner deleted');
        return redirect('admin/home_banner');
    }

    public function status(Request $request,$status,$id){
        $model=Slider::find($id);
        $model->status=$status;
        $model->save();
        $request->session()->flash('message','Banner status updated');
        return redirect('admin/home_banner');
    }
}
