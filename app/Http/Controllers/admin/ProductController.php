<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
class ProductController extends Controller
{
    public function index()
    {
        $arr['data'] =  Product::paginate(10);
        //return $arr;die;
       return view('admin.productlist',$arr);
    }
    public function create(Request $r,$id='')
    {
        if($id !='')
        {
            $arr = Product::findorFail($id);
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
            $arr['slug'] =$arr->slug;
            $arr['tax2'] =$arr->tax2;
            $arr['tax3'] =$arr->tax3;
            $arr['tax4'] =$arr->tax4;
            $arr['tax5'] =$arr->tax5;
            $arr['createdby'] =$arr->createdby;
            $arr['updatedby'] =$arr->updatedby;
            $arr['created_at'] =$arr->created_at;
            $arr['updated_at'] =$arr->updated_at;
            $arr['status'] =$arr->status;
            $arr['productAttrArr']=DB::table('products_images')->where(['product_id'=>$id])->get();
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
            $arr['slug'] = '';
            $arr['tax2'] = '';
            $arr['tax3'] = '';
            $arr['tax4'] = '';
            $arr['tax5'] = '';
            $arr['createdby'] = '';
            $arr['updatedby'] = '';
            $arr['created_at'] = '';
            $arr['updated_at'] = '';
            $arr['status'] = '';
            $arr['productAttrArr'][0]['id']='';
            $arr['productAttrArr'][0]['product_id']='';
            $arr['productAttrArr'][0]['attr_image']='';
            $arr['productAttrArr'][0]['name']='';
        }
        /* return $arr;
        die; */
        return view('admin.manageproduct',$arr);
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
            'imaage'=>$image_validation,
            'attr_image.*' =>'mimes:jpg,jpeg,png,webp',
            'slug'=>'required|unique:products,slug,'.$request->post('id'),
            
        ]);

        $paidArr=$request->post('paid'); 
        $skuArr=$request->post('name'); 
        //$paidArr=$request->post('paid'); 
        if($request->post('id')>0){
            $model=Product::find($request->post('id'));
            $message = "Record Updated successfully!";
            $model['updatedby'] = Auth::user()->name;
            $model['updated_at'] = Carbon::now()->toDateTimeString();
            $model['status'] = $request->status;
        }else{
            $model=new Product();
           // $message="Product inserted";
            $message = "Record Add successfully!";
            $model['createdby'] = Auth::user()->name;
            $model['status'] = '1';
        }
        if($request->hasfile('imaage')){
            if($request->post('id')>0){                
                $arrImage=DB::table('products')->where(['id'=>$request->post('id')])->get();
                if(Storage::exists('/public/media/'.$arrImage[0]->imaage)){
                    Storage::delete('/public/media/'.$arrImage[0]->imaage);
                }
            }
            $image=$request->file('imaage');
            $ext=$image->extension();
            $image_name=time().'.'.$ext;
            $image->storeAs('/public/media',$image_name);
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
        $model->slug=$request->post('slug');
        $model->tax2=$request->post('tax2');
        $model->tax3=$request->post('tax3');
        $model->tax4=$request->post('tax4');
        $model->tax5=$request->post('tax5');
        $model->save();

        $pid=$model->id;
        foreach($skuArr as $key=>$val){
            $productAttrArr=[];
            $productAttrArr['product_id']=$pid;
            $productAttrArr['name']=$skuArr[$key];           
            if($request->hasFile("attr_image.$key")){
                if($paidArr[$key]!=''){ 
                    $arrImage=DB::table('products_images')->where(['id'=>$paidArr[$key]])->get();
                    if(Storage::exists('/public/media/'.$arrImage[0]->attr_image)){
                        Storage::delete('/public/media/'.$arrImage[0]->attr_image);
                    }
                }

                $rand=rand('111111111','999999999');
                $attr_image=$request->file("attr_image.$key");
                $ext=$attr_image->extension();
                $image_name=$rand.'.'.$ext;
                $request->file("attr_image.$key")->storeAs('/public/media',$image_name);
                $productAttrArr['attr_image']=$image_name;
            }
			
            if($paidArr[$key]!=''){
                DB::table('products_images')->where(['id'=>$paidArr[$key]])->update($productAttrArr);
            }else{
                DB::table('products_images')->insert($productAttrArr);
            }
            
        }  
        return redirect('/admin/product/list')->with('success',$message);
		
    }
        public function destroy(Request $request,$id)
    {
        $arr = Product::find($id);
        if($arr != ''){
            $arr->delete();
            $message = "Record Deleted successfully!";
        }else{
            $message = "Record Not found";
        }
        return redirect('/admin/product/list')->with('success',$message);        
    }
    public function product_attr_delete(Request $request,$paid,$pid)
    {
        $arrImage=DB::table('products_images')->where(['id'=>$paid])->get();
        if(Storage::exists('/public/media/'.$arrImage[0]->attr_image)){
            Storage::delete('/public/media/'.$arrImage[0]->attr_image);
        }
        DB::table('products_images')->where(['id'=>$paid])->delete();
        return redirect('/admin/product/update/'.$pid);
    }
    public function search(Request $request)
    {
        $find = $request->search;
            $query=DB::table('products');
            $query=$query->where('title','like',"%$find%")->WhereNull('deleted_at');
            $query=$query->orwhere('short_desc','like',"%$find%")->WhereNull('deleted_at');
            $query=$query->orwhere('long_desc','like',"%$find%")->WhereNull('deleted_at');
            $query=$query->orwhere('createdby','like',"%$find%")->WhereNull('deleted_at');
            $query=$query->paginate(10);
            $arr['data']=$query;
            
            
        //return $result;die;
        return view('admin.productlist',$arr);
    }
}
