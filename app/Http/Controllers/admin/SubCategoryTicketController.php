<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Sub_Category_Ticket;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

class SubCategoryTicketController extends Controller
{
    public function index()
    {
       /*  return "shyam";
        die; */
       //$arr['data'] =  Sub_Category_Ticket::paginate(10);
       $arr['data'] = DB::table('sub__category__tickets')
       ->join('category__tickets', 'category__tickets.id', '=', 'sub__category__tickets.category_id')
       ->select('sub__category__tickets.*', 'category__tickets.name as maincategory')->WhereNull('sub__category__tickets.deleted_at')
       ->paginate(10);

      // $arr['data'] = DB::table('leaderships')->paginate(10);
       //return $arr;die;
       return view('admin.ticket_sub_categoriylist',$arr);
    }
    public function create(Request $r,$id='')
    {
        if($id !='')
        {
            $arr = Sub_Category_Ticket::findorFail($id);
           // $arr = DB::table('leaderships')->where('id',$id)->get();
           // dd($arr);           
            $arr['id'] =$arr->id;
            $arr['name'] = $arr->name;
            $arr['category_id'] = $arr->category_id;
            $arr['status'] =$arr->status;
            $arr['created_at'] =$arr->created_at;
            $arr['updated_at'] =$arr->updated_at;
        }else{
            $arr['id'] ='';
            $arr['name'] = '';
            $arr['status'] ='';
            $arr['created_at'] ='';
            $arr['updated_at'] ='';
            $arr['category_id'] = '';
        }
        /* return $arr;
        die; */
        $arr['category'] = DB::table('category__tickets')->WhereNull('deleted_at')->get();
        return view('admin.manage_sub_category_ticket',$arr);
    }

        public function store(Request $request)
    {
       /*  print_r($request->post());
        die; */
         
        $request->validate([
            'name'=>'required',
            'category_id'=>'required',
            
        ]);

        /* $paidArr=$request->post('paid'); 
        $skuArr=$request->post('name');  */
        //$paidArr=$request->post('paid'); 
        if($request->post('id')>0){
            $model=Sub_Category_Ticket::find($request->post('id'));
            $message = "Record Updated successfully!";
            $model['updated_at'] = Carbon::now()->toDateTimeString();
            $model['status'] = $request->status;
        }else{
            $model=new Sub_Category_Ticket();
           // $message="Product inserted";
            $message = "Record Add successfully!";
            $model['status'] = '1';
        }
        $model->category_id=$request->post('category_id');
        $model->name=$request->post('name');
        $model->save();

        return redirect('/admin/tieket_sub_category/list')->with('success',$message);
		
    }
        public function destroy(Request $request,$id)
    {
        $arr = Sub_Category_Ticket::find($id);
        if($arr != ''){
            $arr->delete();
            $message = "Record Deleted successfully!";
        }else{
            $message = "Record Not found";
        }
        return redirect('/admin/tieket_sub_category/list')->with('success',$message);        
    }
   
    public function search(Request $request)
    {
        $find = $request->search;
            //$query=DB::table('sub__category__tickets');
            $query = DB::table('sub__category__tickets')
            ->join('category__tickets', 'category__tickets.id', '=', 'sub__category__tickets.category_id')
            ->select('sub__category__tickets.*', 'category__tickets.name as maincategory');
            $query=$query->where('sub__category__tickets.name','like',"%$find%")->WhereNull('sub__category__tickets.deleted_at');
            $query=$query->paginate(10);
            $arr['data']=$query;
            
            
        //return $result;die;
        return view('admin.ticket_sub_categoriylist',$arr);
    }
}
