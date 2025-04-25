<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category_Ticket;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;


class CategoryTicketController extends Controller
{
    public function index()
    {
       $arr['data'] =  Category_Ticket::paginate(10);
      // $arr['data'] = DB::table('leaderships')->paginate(10);
        //return $arr;die;
       return view('admin.ticket_categoriylist',$arr);
    }
    public function create(Request $r,$id='')
    {
        if($id !='')
        {
            $arr = Category_Ticket::findorFail($id);
           // $arr = DB::table('leaderships')->where('id',$id)->get();
           // dd($arr);           
            $arr['id'] =$arr->id;
            $arr['name'] = $arr->name;
            $arr['status'] =$arr->status;
            $arr['created_at'] =$arr->created_at;
            $arr['updated_at'] =$arr->updated_at;
        }else{
            $arr['id'] ='';
            $arr['name'] = '';
            $arr['status'] ='';
            $arr['created_at'] ='';
            $arr['updated_at'] ='';
        }
        /* return $arr;
        die; */
        return view('admin.manage_category_ticket',$arr);
    }

        public function store(Request $request)
    {
       /*  print_r($request->post());
        die; */
         
        $request->validate([
            'name'=>'required',
            
        ]);

        /* $paidArr=$request->post('paid'); 
        $skuArr=$request->post('name');  */
        //$paidArr=$request->post('paid'); 
        if($request->post('id')>0){
            $model=Category_Ticket::find($request->post('id'));
            $message = "Record Updated successfully!";
            $model['updated_at'] = Carbon::now()->toDateTimeString();
            $model['status'] = $request->status;
        }else{
            $model=new Category_Ticket();
           // $message="Product inserted";
            $message = "Record Add successfully!";
            $model['status'] = '1';
        }
        
        $model->name=$request->post('name');
        $model->save();

        return redirect('/admin/tieket_category/list')->with('success',$message);
		
    }
        public function destroy(Request $request,$id)
    {
        $arr = Category_Ticket::find($id);
        if($arr != ''){
            $arr->delete();
            $message = "Record Deleted successfully!";
        }else{
            $message = "Record Not found";
        }
        return redirect('/admin/tieket_category/list')->with('success',$message);        
    }
   
    public function search(Request $request)
    {
        $find = $request->search;
            $query=DB::table('category__tickets');
            $query=$query->where('name','like',"%$find%")->WhereNull('deleted_at');
            $query=$query->paginate(10);
            $arr['data']=$query;
            
            
        //return $result;die;
        return view('admin.ticket_categoriylist',$arr);
    }
}
