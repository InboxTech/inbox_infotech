<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Industrie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class IndustrieController extends Controller
{
    public function index()
    {
        $arr['data'] =  Industrie::paginate(10);
        //return $arr;die;
       return view('admin.industrielist',$arr);
    }
    public function create(Request $r,$id='')
    {
        if($id !='')
        {
            $arr = Industrie::findorFail($id);
           //dd($arr);
            $arr['id'] =$arr->id;
            $arr['title'] =$arr->title;
            $arr['short_desc'] = $arr->short_desc;
            $arr['long_desc'] =$arr->long_desc;
            $arr['meta_tags'] = $arr->meta_tags;
            $arr['meta_desc'] =$arr->meta_desc;
            $arr['con_tag'] =$arr->con_tag;
            $arr['imaage'] =$arr->imaage;
            $arr['image_alt'] =$arr->image_alt;
            $arr['noindex_tag'] =$arr->noindex_tag;
            $arr['tax1'] =$arr->tax1;
            $arr['tax2'] =$arr->tax2;
            $arr['slug'] =$arr->slug;
            $arr['tax4'] =$arr->tax4;
            $arr['tax5'] =$arr->tax5;
            $arr['createdby'] =$arr->createdby;
            $arr['updatedby'] =$arr->updatedby;
            $arr['created_at'] =$arr->created_at;
            $arr['updated_at'] =$arr->updated_at;
            $arr['status'] =$arr->status;
            $arr['productAttrArr']=DB::table('industrie_images')->where(['service_id'=>$id])->get();

        }else{
            $arr['id'] = '';
            $arr['title'] = '';
            $arr['short_desc'] = '';
            $arr['long_desc'] = '';
            $arr['meta_tags'] = '';
            $arr['meta_desc'] = '';
            $arr['con_tag'] = '';
            $arr['imaage'] = '';
            $arr['image_alt'] = '';
            $arr['noindex_tag'] = '';
            $arr['tax1'] = '';
            $arr['tax2'] = '';
            $arr['slug'] = '';
            $arr['tax4'] = '';
            $arr['tax5'] = '';
            $arr['createdby'] = '';
            $arr['updatedby'] = '';
            $arr['created_at'] = '';
            $arr['updated_at'] = '';
            $arr['status'] = '';
            $arr['productAttrArr'][0]['id']='';
            $arr['productAttrArr'][0]['service_id']='';
            $arr['productAttrArr'][0]['attr_image']='';
            $arr['productAttrArr'][0]['name']='';
        }
        /* return $arr;
        die; */
       // dd($arr);
        return view('admin.manageindustry',$arr);
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
            'short_desc'=>'required',
            'long_desc'=>'required',
            'slug'=>'required|unique:industries,slug,'.$request->post('id'),
            'imaage'=>$image_validation,
            'attr_image.*' =>'mimes:jpg,jpeg,png,webp',

        ]);

        $paidArr=$request->post('paid');
        $skuArr=$request->post('name');
        //$paidArr=$request->post('paid');
        if($request->post('id')>0){
            $model=Industrie::find($request->post('id'));
            $message = "Record Updated successfully!";
            $model['updatedby'] = Auth::user()->name;
            $model['updated_at'] = Carbon::now()->toDateTimeString();
            $model['status'] = $request->status;
        }else{
            $model=new Industrie();
            $message="Service inserted";
            $message = "Record Add successfully!";
            $model['createdby'] = Auth::user()->name;
            $model['status'] = '1';
        }
        if($request->hasfile('imaage')){
            if($request->post('id')>0){
                $arrImage=DB::table('industries')->where(['id'=>$request->post('id')])->get();
                if(Storage::exists('/public/media/industries/banner'.$arrImage[0]->imaage)){
                    Storage::delete('/public/media/industries/banner'.$arrImage[0]->imaage);
                }
            }
            $image=$request->file('imaage');
            $ext=$image->extension();
            $image_name=time().'.'.$ext;
            $image->storeAs('/public/media/industries/banner',$image_name);
            $model->imaage=$image_name;
        }

        $model->title=$request->post('title');;
        $model->short_desc=$request->post('short_desc');
        $model->long_desc=$request->post('long_desc');
        $model->meta_tags=$request->post('meta_tags');
        $model->meta_desc=$request->post('meta_desc');
        $model->con_tag=$request->post('con_tag');
        $model->image_alt=$request->post('image_alt');
        $model->noindex_tag=$request->post('noindex_tag');
        $model->tax1=$request->post('tax1');
        $model->tax2=$request->post('tax2');
        $model->slug=$request->post('slug');
        $model->tax4=$request->post('tax4');
        $model->tax5=$request->post('tax5');
        $model->save();

        $pid=$model->id;
        foreach($skuArr as $key=>$val){
            $productAttrArr=[];
            $productAttrArr['service_id']=$pid;
            $productAttrArr['name']=$skuArr[$key];
            if($request->hasFile("attr_image.$key")){
                if($paidArr[$key]!=''){
                    $arrImage=DB::table('industrie_images')->where(['id'=>$paidArr[$key]])->get();
                    if(Storage::exists('/public/media/industries/'.$arrImage[0]->attr_image)){
                        Storage::delete('/public/media/industries/'.$arrImage[0]->attr_image);
                    }
                }

                $rand=rand('111111111','999999999');
                $attr_image=$request->file("attr_image.$key");
                $ext=$attr_image->extension();
                $image_name=$rand.'.'.$ext;
                $request->file("attr_image.$key")->storeAs('/public/media/industries',$image_name);
                $productAttrArr['attr_image']=$image_name;
            }

            if($paidArr[$key]!=''){
                DB::table('industrie_images')->where(['id'=>$paidArr[$key]])->update($productAttrArr);
            }else{
                DB::table('industrie_images')->insert($productAttrArr);
            }

        }
        return redirect('/admin/industry/list')->with('success',$message);

    }
        public function destroy(Request $request,$id)
    {
        $arr = Industrie::find($id);
        if($arr != ''){
            $arr->delete();
            $message = "Record Deleted successfully!";
        }else{
            $message = "Record Not found";
        }
        return redirect('/admin/industry/list')->with('success',$message);
    }

    public function search(Request $request)
    {
        $find = $request->search;
            $query=DB::table('industries');
            $query=$query->where('title','like',"%$find%")->WhereNull('deleted_at');
            $query=$query->orwhere('short_desc','like',"%$find%")->WhereNull('deleted_at');
            $query=$query->orwhere('long_desc','like',"%$find%")->WhereNull('deleted_at');
            $query=$query->orwhere('createdby','like',"%$find%")->WhereNull('deleted_at');
            $query=$query->paginate(10);
            $arr['data']=$query;


        //return $result;die;
        return view('admin.industrielist',$arr);
    }
    public function product_attr_delete(Request $request,$paid,$pid)
    {
        $arrImage=DB::table('industrie_images')->where(['id'=>$paid])->get();
        if(Storage::exists('/public/media/industries/banner/'.$arrImage[0]->attr_image)){
            Storage::delete('/public/media/industries/banner/'.$arrImage[0]->attr_image);
        }
        DB::table('industrie_images')->where(['id'=>$paid])->delete();
        return redirect('/admin/industry/update/'.$pid);
    }
}
