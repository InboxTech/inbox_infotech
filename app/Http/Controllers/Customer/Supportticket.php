<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Mail;
use App\Models\Ticketassignment;
use App\Models\Ticketreply;
use App\Models\Sub_Category_Ticket;
use App\Models\Category_Ticket;
use App\Models\Supportticket as st;
use Session;

class Supportticket extends Controller
{
    public function create(Request $r,$id='')
    {    
        if($id !='')
        {
            //return $id;die;
           // $arr = Supportticket::findorFail($id);
            //$arr = DB::table('supporttickets')->where('id',$id)->get();
        $arr = DB::table('supporttickets')
       ->join('projects','projects.id','=','supporttickets.project_id')
       ->join('customers','customers.id','=','supporttickets.cust_id')
       ->join('sub__category__tickets','sub__category__tickets.id','=','supporttickets.category_id')
       ->join('category__tickets','category__tickets.id','=','sub__category__tickets.category_id')
       //->join('ticketassignments','ticketassignments.ticket_id','=','supporttickets.id')
       //->join('sub__category__tickets','sub__category__tickets.id','=','supporttickets.category_id')
       ->select('customers.*','supporttickets.*','supporttickets.id as supportticket','supporttickets.created_at as ticketdate','sub__category__tickets.name as categoryname','projects.name as projectname','category__tickets.id as sub_categor_id')->WhereNull('customers.deleted_at')
       ->orderBy('supporttickets.id', 'desc')
       ->where('supporttickets.id',$id)
       ->get();
        //dd($arr);
        /* print_r($arr[0]->id);
        die; */
        $arr['id'] =$arr[0]->id;
        $arr['subject']=$arr[0]->subject;
        $arr['messager'] = $arr[0]->message;
        $arr['firstname'] = $arr[0]->firstname;
        $arr['lastname'] = $arr[0]->lastname;
        $arr['email'] = $arr[0]->email;
        $arr['phone'] = $arr[0]->phone;
        $arr['image'] = $arr[0]->image;
        $arr['alternetcontactno'] = $arr[0]->alternetcontactno;
        $arr['approxclosetime'] = $arr[0]->approxclosetime;
        $arr['priority'] = $arr[0]->priority;
        $arr['country'] = $arr[0]->country;
        $arr['status'] =$arr[0]->status;
        $arr['created_at'] =$arr[0]->created_at;
        $arr['updated_at'] =$arr[0]->updated_at;
        $arr['project_id'] =$arr[0]->project_id;
        $arr['category_id'] =$arr[0]->category_id;
        $arr['cust_id'] = $arr[0]->cust_id;
        $arr['sub_categor_id'] = $arr[0]->sub_categor_id;
        $arr['customer'] =DB::table('customers')->where('project_id',$arr[0]->project_id)->get(); 
        $brr = DB::table('sub__category__tickets')->where('status',1)->WhereNull('deleted_at')->get();                    
        $arr['category_name'] =$brr[0]->name; 
        $crr = DB::table('ticketassignments')->where('ticket_id',$id)->get(); 
        $arr['toassignuser_id'] = $crr[0]->toassignuser_id;
        }else{
            $arr['id'] ='';
            $arr['subject']='';
            $arr['messager'] = '';
            $arr['lastname'] = '';
            $arr['firstname'] = '';
            $arr['email'] = '';
            $arr['gender'] = '';
            $arr['phone'] = '';
            $arr['image'] = '';
            $arr['alternetcontactno'] = '';
            $arr['approxclosetime'] = '';
            $arr['priority'] = '';
            $arr['country'] = '';
            $arr['comment'] = '';
            $arr['status'] ='';
            $arr['created_at'] ='';
            $arr['updated_at'] ='';
            $arr['project_id'] ='';
            $arr['category_id'] ='';
            $arr['cust_id']='';    
            $arr['category_name'] ='';    
            $arr['toassignuser_id'] ='';
            $arr['sub_categor_id']='';     
        }
        $arr['category'] =DB::table('category__tickets')->where('status',1)->WhereNull('deleted_at')->get();
        $arr['subcategory'] =DB::table('sub__category__tickets')
            ->join('category__tickets','category__tickets.id','=','sub__category__tickets.category_id')
            ->select('sub__category__tickets.*','category__tickets.name as catname','category__tickets.id as catid')
            ->where('sub__category__tickets.status',1)->WhereNull('sub__category__tickets.deleted_at')
            ->get();
       /*  return $arr;
        die; */
        $arr['project'] =DB::table('projects')->get();
        $arr['users'] = DB::table('users')->get();
        return view('customer.manageticket',$arr);
    }
    public function fetch(Request $request)
    {    
        /* return "shyam";
        die;   */   
        $parent_id = $request->cat_id;         
        $subcat = Sub_Category_Ticket::where('category_id',$parent_id)
        ->select('id','name')
        ->get();
        return response()->json($subcat);
    } 
    public function store(Request $request)
    {
        $cust_id = Session::get('userid');
        $find_cust = DB::table('customers')->where('id',$cust_id)->get();
        //dd($find_cust);
       /*  $cdate = Carbon::createFromFormat('Y-m-d H:i:s', $request->post('approxclosetime'))->toDateTimeString();;
       */
      /*   print_r($request->all());
        die;  */
       /* echo  $request->approxclosetime;
        die; */
         
        $request->validate([
            'subject'=>'required',
            'category_id'=>'required',
            'subcategory'=>'required',
            'message'=>'required',           
        ]);

        if($request->post('id')>0){
           $model=st::find($request->post('id'));
            //print_r($model);die; 
            $message = "Record Updated successfully!";
            $model->updated_at = Carbon::now()->toDateTimeString();
           $model->status = $request->status;
        }else{
            $model = new st();
           // $message="Product inserted";
            $message = "Record Add successfully!";
            $model['user_id'] = '6';
            $model['status'] = '1';
            //$model['ticket_notes'] = 'New Ticket';
            $model->replystatus='0';
            $model->finalstatus='1';
        }
        if($request->hasfile('image')){

            if($request->post('id')>0){
                $arrImage=DB::table('supporttickets')->where(['id'=>$request->post('id')])->get();
                if(Storage::exists('/public/media/complaint/'.$arrImage[0]->image)){
                    Storage::delete('/public/media/complaint/'.$arrImage[0]->image);
                }
            }

            $image=$request->file('image');
            $ext=$image->extension();
            $image_name=time().'.'.$ext;
            $image->storeAs('/public/media/complaint',$image_name);
            $model->image=$image_name;
        }
       // $cdate = Carbon::createFromFormat('Y-m-d H:i:s', $request->post('approxclosetime'))->toDateTimeString();;
        
       // $model->approxclosetime = $request->post('approxclosetime');        
        $model->cust_id = $find_cust[0]->id;
        $model->subject = $request->post('subject');
        $model->category_id = $request->post('subcategory');
        $model->project_id = $find_cust[0]->project_id;
        $model->message = $request->post('message');
        $model->alternetcontactno=$request->post('alternetcontactno');
        $model->priority=$request->post('priority');
        $model->save();
                
        return redirect('/customer/supporttickets/showalltikcets')->with('success',$message);
		
    } 
    public function showalltikcets()
    {
        $cust_id = Session::get('userid');
        $arr['data'] = DB::table('supporttickets')
       ->join('projects','projects.id','=','supporttickets.project_id')
       ->join('customers','customers.id','=','supporttickets.cust_id')
       ->join('sub__category__tickets','sub__category__tickets.id','=','supporttickets.category_id')
       ->join('category__tickets','category__tickets.id','=','sub__category__tickets.category_id')
       ->select('customers.*','supporttickets.*','supporttickets.id as supportticket','supporttickets.created_at as ticketdate','sub__category__tickets.name as subcategoryname','projects.name as projectname','category__tickets.name as categoryname')->WhereNull('customers.deleted_at')
       ->where('supporttickets.cust_id',$cust_id)
       ->orderBy('supporttickets.id', 'desc')
       ->paginate(10);
       //dd($arr);
        return view('customer.allticketlist',$arr);
    }
    public function viewticket(Request $r,$id='')
    {
       /*  echo $id;
        die; */
       //echo "shyam";die;
        if($id !='')
        {
            //return $id;die;
           // $arr = Supportticket::findorFail($id);
            //$arr = DB::table('supporttickets')->where('id',$id)->get();
        $arr = DB::table('supporttickets')
       ->join('projects','projects.id','=','supporttickets.project_id')
       ->join('customers','customers.id','=','supporttickets.cust_id')
       ->join('sub__category__tickets','sub__category__tickets.id','=','supporttickets.category_id')
       ->join('category__tickets','category__tickets.id','=','sub__category__tickets.category_id')
       //->join('ticketassignments','ticketassignments.ticket_id','=','supporttickets.id')
       //->join('sub__category__tickets','sub__category__tickets.id','=','supporttickets.category_id')
       ->select('customers.*','customers.image as customersimage','supporttickets.*','supporttickets.id as supportticket','supporttickets.created_at as ticketdate','sub__category__tickets.name as categoryname','projects.name as projectname','category__tickets.id as sub_categor_id','category__tickets.name as sub_categoryname','supporttickets.alternetcontactno','customers.comment as ccomment')->WhereNull('customers.deleted_at')
       ->orderBy('supporttickets.id', 'desc')
       ->where('supporttickets.id',$id)
       ->get();
       //dd($arr);
        /* print_r($arr[0]->id);
        die; */
        $arr['id'] =$arr[0]->id;
        $arr['subject']=$arr[0]->subject;
        $arr['messager'] = $arr[0]->message;
        $arr['firstname'] = $arr[0]->firstname;
        $arr['lastname'] = $arr[0]->lastname;
        $arr['email'] = $arr[0]->email;
        $arr['phone'] = $arr[0]->phone;
        $arr['gender'] = $arr[0]->gender;
        $arr['alternetcontactno']=$arr[0]->alternetcontactno;
        $arr['image'] = $arr[0]->image;
        $arr['customersimage'] = $arr[0]->customersimage;
        $arr['alternetcontactno'] = $arr[0]->alternetcontactno;
        $arr['approxclosetime'] = $arr[0]->approxclosetime;
        $arr['priority'] = $arr[0]->priority;
        $arr['address'] = $arr[0]->address;
        $arr['city'] = $arr[0]->city;
        $arr['state'] = $arr[0]->state;
        $arr['country'] = $arr[0]->country;
        $arr['status'] =$arr[0]->status;
        $arr['finalstatus'] =$arr[0]->finalstatus;
        $arr['created_at'] =$arr[0]->created_at;
        $arr['updated_at'] =$arr[0]->updated_at;
        $arr['project_id'] =$arr[0]->project_id;
        $arr['category_id'] =$arr[0]->category_id;
        $arr['categoryname'] =$arr[0]->categoryname;
        $arr['sub_categoryname'] =$arr[0]->sub_categoryname;
        $arr['cust_id'] = $arr[0]->cust_id;
        $arr['sub_categor_id'] = $arr[0]->sub_categor_id;
        $arr['ticket_notes'] = $arr[0]->ticket_notes;
        $arr['notes_added_by'] = $arr[0]->notes_added_by;
        $arr['reopendate'] = $arr[0]->reopendate;
        $arr['finalclosedate'] = $arr[0]->finalclosedate;
        $arr['ccomment'] = $arr[0]->ccomment;
        $currentDateTime = Carbon::now();
        //dd($arr);
        $arr['lastupdated'] =  $currentDateTime;
        $arr['customer'] =DB::table('customers')->where('project_id',$arr[0]->project_id)->get(); 
        $brr = DB::table('sub__category__tickets')->where('status',1)->WhereNull('deleted_at')->get();                    
        $arr['category_name'] =$brr[0]->name; 
        /* $crr = DB::table('ticketassignments')->where('ticket_id',$id)->orderBy('id','DESC')->limit('1')->get(); 
        $arr['toassignuser_id'] = $crr[0]->toassignuser_id; */
       // dd($arr);
        }
        
        
        $arr['customers'] =DB::table('customers')->get();
        $arr['category'] =DB::table('category__tickets')->where('status',1)->WhereNull('deleted_at')->get();
        $arr['subcategory'] =DB::table('sub__category__tickets')
            ->join('category__tickets','category__tickets.id','=','sub__category__tickets.category_id')
            ->select('sub__category__tickets.*','category__tickets.name as catname','category__tickets.id as catid')
            ->where('sub__category__tickets.status',1)->WhereNull('sub__category__tickets.deleted_at')
            ->get();
       /*  return $arr;
        die; */
        $arr['project'] =DB::table('projects')->get();
        $arr['users'] = DB::table('users')->get();
        $arr['ticketassignedhistory'] = DB::table('ticketassignments')
        ->join('users as fromassignusers','fromassignusers.id','=','ticketassignments.toassignuser_id')
        ->join('users as toassignusers','toassignusers.id','=','ticketassignments.myassignuser_id')
        ->select('ticketassignments.*','fromassignusers.name as fromasssignusername','toassignusers.name as toassignusersname')
        ->where('ticketassignments.ticket_id',$id)->orderBy('ticketassignments.id','DESC')->get(); 
        
        $arr['ticketreplys'] =DB::table('ticketreplys')
        ->join('users','users.id','=','ticketreplys.commentby')
        ->select('ticketreplys.*','users.*','ticketreplys.created_at as reply_date')
        ->where('ticketreplys.ticket_id',$id)
        ->orderBy('ticketreplys.id','DESC')
        ->get();
        //dd($arr);
        return view('customer.viewsupportticket',$arr);
    }
    public function ticketreply(Request $request)
    {
        $request->validate([
            'comment'=>'required',
            'image'=>'mimes:jpeg,jpg,png' 
        ]);

        $message = "Details updated";
        $productAttrArr=[];
        if($request->hasfile('image')){
            $image=$request->file('image');
            $ext=$image->extension();
            $image_name=time().'.'.$ext;
            $image->storeAs('/public/media/complaint/reply',$image_name);
            $productAttrArr['image']=$image_name;
        }
        $productAttrArr['ticket_id'] = $request->post('id');
        $productAttrArr['comment'] = $request->comment;
        $productAttrArr['updated_at'] = Carbon::now()->toDateTimeString();
        $productAttrArr['created_at'] = Carbon::now()->toDateTimeString();
        $productAttrArr['commentby'] = "6";
        DB::table('ticketreplys')->insert($productAttrArr);

        $productAttrArr1=[];
        $productAttrArr1['updated_at'] = Carbon::now()->toDateTimeString();
        $productAttrArr1['replystatus'] = 1;
        DB::table('supporttickets')->where(['id'=>$request->post('id')])->update($productAttrArr1);
        return redirect()->back()->with('success',$message); 
    }
}
