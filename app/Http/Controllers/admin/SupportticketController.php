<?php
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Supportticket;
use App\Models\Ticketassignment;
use App\Models\Ticketreply;
use App\Models\Sub_Category_Ticket;
use App\Models\Category_Ticket;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;

class SupportticketController extends Controller
{
    public function index()
    {
       /*  return "shyam";
        die; */
       // $arr['data'] =  Supportticket::paginate(10);
       $arr['data'] = DB::table('supporttickets')
       ->join('projects','projects.id','=','supporttickets.project_id')
       ->join('customers','customers.id','=','supporttickets.cust_id')
       ->join('sub__category__tickets','sub__category__tickets.id','=','supporttickets.category_id')
       ->join('category__tickets','category__tickets.id','=','sub__category__tickets.category_id')
       ->select('customers.*','supporttickets.*','supporttickets.id as supportticket','supporttickets.created_at as ticketdate','sub__category__tickets.name as subcategoryname','projects.name as projectname','category__tickets.name as categoryname')->WhereNull('customers.deleted_at')
       ->orderBy('supporttickets.id', 'desc')
       ->paginate(10);
       //return $arr;die;
       return view('admin.allticketlist',$arr);
    }
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
        if($crr->isEmpty())
            {
                $arr['toassignuser_id'] = 0;
            }
            else
            {
                $arr['toassignuser_id'] = $crr[0]->toassignuser_id;
            }
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
        return view('admin.manageticket',$arr);
    }
    public function fetch(Request $request)
    {         
        $parent_id = $request->cat_id;         
        $subcat = Sub_Category_Ticket::where('category_id',$parent_id)
        ->select('id','name')
        ->get();
        return response()->json($subcat);
    }  
    public function fetchcust(Request $request)
    {
        $parent_id = $request->cat_id;         
        $subcat1 = DB::table('customers')->where('project_id',$parent_id)
        ->select('id','firstname','lastname')
        ->get();
        return response()->json($subcat1);
    }
        public function store(Request $request)
    {
       /*  $cdate = Carbon::createFromFormat('Y-m-d H:i:s', $request->post('approxclosetime'))->toDateTimeString();;
       */
       /*  print_r($request->all());
        die;  */
       /* echo  $request->approxclosetime;
        die; */
         
        $request->validate([
            'project_id'=>'required',
            'customers'=>'required',
            'subject'=>'required',
            'category_id'=>'required',
            'subcategory'=>'required',
            'message'=>'required',
            'priority'=>'required',            
        ]);

        if($request->post('id')>0){
           $model=Supportticket::find($request->post('id'));
            //print_r($model);die; 
            $message = "Record Updated successfully!";
            $model->updated_at = Carbon::now()->toDateTimeString();
           $model->status = $request->status;
        }else{
            $model = new Supportticket();
           // $message="Product inserted";
            $message = "Record Add successfully!";
            $model['user_id'] = Auth::user()->id;
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
        $model->approxclosetime = $request->post('approxclosetime');        
        $model->cust_id=$request->post('customers');
        $model->subject=$request->post('subject');
        $model->category_id=$request->post('subcategory');
        $model->project_id=$request->post('project_id');
        $model->message=$request->post('message');
        $model->alternetcontactno=$request->post('alternetcontactno');
        $model->priority=$request->post('priority');
        $model->save();
        $support_ticket_no = $model->id;
        $productAttrArr=[];
        $productAttrArr['ticket_id']= $support_ticket_no;
        $productAttrArr['toassignuser_id']= $request->post('assignticket');
        $productAttrArr['myassignuser_id']= Auth::user()->id;
        if($request->post('id')>0){
            $productAttrArr['updated_at'] = Carbon::now()->toDateTimeString();
            DB::table('ticketassignments')->where(['ticket_id'=>$request->post('id')])->update($productAttrArr);
        }
        else
        {
            $productAttrArr['created_at'] = Carbon::now()->toDateTimeString();
            DB::table('ticketassignments')->insert($productAttrArr);
        }
        if($support_ticket_no != '')
        {
        $findcust = DB::table('customers')->where('id',$request->post('customers'))->get();
        $cust_fname = $findcust[0]->firstname;
        $cust_lname = $findcust[0]->lastname;
        $fullname = $cust_fname.' '.$cust_lname;
        $emails = $findcust[0]->email;
        $tat = $request->post('approxclosetime');
        $ticketno = $support_ticket_no;
        $supportno ="9033569861";
        $issue =$request->post('subject');
        $data = array('name'=>$fullname,'ticketno'=>$ticketno,'tat'=>$tat,'supportno'=>$supportno,'issue'=>$issue);
        $subject = "Support Ticket"." # ".$ticketno;

      Mail::send('email.mail', $data, function($message) use ($emails,$subject)
        {    
        $message->to($emails)->subject($subject);    
        });
        }
        
        return redirect('/admin/supporttickets/list')->with('success',$message);
		
    }
    public function assignticket(Request $request,$id)
    {
            $model=Ticketassignment::find($id);
             //print_r($model);die; 
             $message = "Record Updated successfully!";
             $model->updated_at = Carbon::now()->toDateTimeString();
             $model->toassignuser_id = $request->toassignuser_id;
             $model->myassignuser_id = Auth::user()->id;
             $model->save();
             return redirect('/admin/supporttickets/list')->with('success',$message);
             
             
    }
        public function destroy(Request $request,$id)
    {
        $arr = Supportticket::find($id);
        if($arr != ''){
            $arr->delete();
            $message = "Record Deleted successfully!";
        }else{
            $message = "Record Not found";
        }
        return redirect('/admin/supporttickets/list')->with('success',$message);        
    }
   
    public function search(Request $request)
    {
            $find = $request->search;
            //$query=DB::table('customers');
            $query = DB::table('customers')
            ->join('projects','projects.id','=','customers.project_id')
            ->select('customers.*','projects.name')->WhereNull('customers.deleted_at');
            $query=$query->where('customers.firstname','like',"%$find%")->WhereNull('customers.deleted_at');
            $query=$query->orwhere('customers.lastname','like',"%$find%")->WhereNull('customers.deleted_at');
            $query=$query->orwhere('customers.email','like',"%$find%")->WhereNull('customers.deleted_at');
            $query=$query->orwhere('customers.phone','like',"%$find%")->WhereNull('customers.deleted_at');
            $query=$query->orwhere('projects.name','like',"%$find%")->WhereNull('projects.deleted_at');
            $query=$query->paginate(10);
            $arr['data']=$query;           
            
        //return $result;die;

        $query = DB::table('supporttickets')
        ->join('projects','projects.id','=','supporttickets.project_id')
        ->join('customers','customers.id','=','supporttickets.cust_id')
        ->join('sub__category__tickets','sub__category__tickets.id','=','supporttickets.category_id')
        ->join('category__tickets','category__tickets.id','=','sub__category__tickets.category_id')
        ->select('customers.*','supporttickets.*','supporttickets.id as supportticket','supporttickets.created_at as ticketdate','sub__category__tickets.name as subcategoryname','projects.name as projectname','category__tickets.name as categoryname')->WhereNull('customers.deleted_at')
        ->orderBy('supporttickets.id', 'desc');
        $query=$query->where('customers.firstname','like',"%$find%")->WhereNull('customers.deleted_at');
        $query=$query->orwhere('customers.lastname','like',"%$find%")->WhereNull('customers.deleted_at');
        $query=$query->orwhere('customers.email','like',"%$find%")->WhereNull('customers.deleted_at');
        $query=$query->orwhere('customers.phone','like',"%$find%")->WhereNull('customers.deleted_at');
        $query=$query->orwhere('projects.name','like',"%$find%")->WhereNull('projects.deleted_at');
        $query=$query->paginate(10);
        //return $arr;die;
        $arr['data']=$query;    
        return view('admin.allticketlist',$arr);
    }
    public function viewticket(Request $r,$id='')
    {
       /*  echo $id;
        die; */
       
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
        $arr['lastupdated'] =  $currentDateTime;
        $arr['customer'] =DB::table('customers')->where('project_id',$arr[0]->project_id)->get(); 
        $brr = DB::table('sub__category__tickets')->where('status',1)->WhereNull('deleted_at')->get();                    
        $arr['category_name'] =$brr[0]->name; 
        $crr = DB::table('ticketassignments')->where('ticket_id',$id)->orderBy('id','DESC')->limit('1')->get(); 
       // $testassige = $crr[0]->toassignuser_id;
        //dd($crr);
        if($crr->isEmpty())
            {
                $arr['toassignuser_id'] = 0;
            }
            else
            {
                $arr['toassignuser_id'] = $crr[0]->toassignuser_id;
            }
        
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
        ->join('users as fromassignusers','fromassignusers.id','=','ticketassignments.myassignuser_id')
        ->join('users as toassignusers','toassignusers.id','=','ticketassignments.toassignuser_id')
        ->select('ticketassignments.*','fromassignusers.name as fromasssignusername','toassignusers.name as toassignusersname')
        ->where('ticketassignments.ticket_id',$id)->orderBy('ticketassignments.id','DESC')->get(); 
        
        $arr['ticketreplys'] =DB::table('ticketreplys')
        ->join('users','users.id','=','ticketreplys.commentby')
        ->select('ticketreplys.*','users.*','ticketreplys.created_at as reply_date')
        ->where('ticketreplys.ticket_id',$id)
        ->orderBy('ticketreplys.id','DESC')
        ->get();
        //dd($arr);
        return view('admin.viewsupportticket',$arr);
    }
    public function ticketstatuschange(Request $request)
    {
        $message = "Record Updated";
        $productAttrArr=[];
        $productAttrArr['updated_at'] = Carbon::now()->toDateTimeString();
        $productAttrArr['status'] = $request->status;
        //$productAttrArr['finalstatus'] = $request->status;
        DB::table('supporttickets')->where(['id'=>$request->post('id')])->update($productAttrArr);
        $findcust = DB::table('supporttickets')
       ->join('projects','projects.id','=','supporttickets.project_id')
       ->join('customers','customers.id','=','supporttickets.cust_id')
       ->join('sub__category__tickets','sub__category__tickets.id','=','supporttickets.category_id')
       ->join('category__tickets','category__tickets.id','=','sub__category__tickets.category_id')
       //->join('ticketassignments','ticketassignments.ticket_id','=','supporttickets.id')
       //->join('sub__category__tickets','sub__category__tickets.id','=','supporttickets.category_id')
       ->select('customers.*','customers.image as customersimage','supporttickets.*','supporttickets.id as supportticket','supporttickets.created_at as ticketdate','sub__category__tickets.name as categoryname','projects.name as projectname','category__tickets.id as sub_categor_id','category__tickets.name as sub_categoryname','supporttickets.alternetcontactno')->WhereNull('customers.deleted_at')
       ->orderBy('supporttickets.id', 'desc')
       ->where('supporttickets.id',$request->post('id'))
       ->get();
        //$findcust = DB::table('customers')->where('id',$request->post('customers'))->get();
        $cust_fname = $findcust[0]->firstname;
        $cust_lname = $findcust[0]->lastname;
        $fullname = $cust_fname.' '.$cust_lname;
        $emails = $findcust[0]->email;
        $tat = $findcust[0]->approxclosetime;
        $ticketno = $findcust[0]->id;
        $supportno ="9033569861";
        $issue =$findcust[0]->subject;
        $lastupdated = $findcust[0]->created_at;
        $data = array('name'=>$fullname,'ticketno'=>$ticketno,'tat'=>$tat,'supportno'=>$supportno,'issue'=>$issue, 'lastupdated'=>$lastupdated);
        $subject = "Support Ticket"." # ".$ticketno;
        if($request->status == 0){
            Mail::send('email.resolveticket', $data, function($message) use ($emails,$subject)
            {    
            $message->to($emails)->subject($subject);    
            });
        }
        if($request->status == 3){
            Mail::send('email.updateticket', $data, function($message) use ($emails,$subject)
            {    
            $message->to($emails)->subject($subject);    
            });
        }
      
        return redirect()->back()->with('success',$message);  
    }
    public function assigntickets(Request $request)
    {
        
        //Update Ticket Status        
        $productAttrArr=[];
        $productAttrArr['updated_at'] = Carbon::now()->toDateTimeString();
        $productAttrArr['status'] = 2;
        DB::table('supporttickets')->where(['id'=>$request->post('id')])->update($productAttrArr);

        //Assign tikcet to agent
        $ticket_assign_history = DB::table('ticketassignments')->where(['ticket_id'=>$request->post('id')])->orderBy('id','DESC')->limit('1')->get();
        //dd($ticket_assign_history[0]->toassignuser_id);
         $toassignuser= $ticket_assign_history[0]->toassignuser_id;
         if($toassignuser == NULL)
         {
        $message = "Ticket Assigned";    
        $productAttrArr2=[];
        $productAttrArr2['toassignuser_id'] = $request->post('assignticket');
        $productAttrArr2['myassignuser_id'] = Auth::user()->id;
        $productAttrArr2['updated_at'] = Carbon::now()->toDateTimeString();
        DB::table('ticketassignments')->where(['ticket_id'=>$request->post('id')])->update($productAttrArr2);
            
        $findcust = DB::table('supporttickets')
       ->join('projects','projects.id','=','supporttickets.project_id')
       ->join('customers','customers.id','=','supporttickets.cust_id')
       ->join('sub__category__tickets','sub__category__tickets.id','=','supporttickets.category_id')
       ->join('category__tickets','category__tickets.id','=','sub__category__tickets.category_id')
       ->join('ticketassignments','ticketassignments.ticket_id','=','supporttickets.id')
       //->join('sub__category__tickets','sub__category__tickets.id','=','supporttickets.category_id')
       ->select('customers.*','customers.image as customersimage','supporttickets.*','supporttickets.id as supportticket','supporttickets.created_at as ticketdate','sub__category__tickets.name as categoryname','projects.name as projectname','category__tickets.id as sub_categor_id','category__tickets.name as sub_categoryname','supporttickets.alternetcontactno')->WhereNull('customers.deleted_at')
       ->orderBy('supporttickets.id', 'desc')
       ->where('supporttickets.id',$request->post('id'))
       ->get();
       $findcust['ticketassignedhistory'] = DB::table('users')
        ->where('id',$request->post('assignticket'))->get(); 
        $findcust['ticketassignedhistory1'] = DB::table('users')
        ->where('id',Auth::user()->id)->get(); 
        //dd($findcust);
        //$findcust = DB::table('customers')->where('id',$request->post('customers'))->get();
        $cust_fname = $findcust[0]->firstname;
        $cust_lname = $findcust[0]->lastname;
        $fullname = $cust_fname.' '.$cust_lname;
        $emails = $findcust['ticketassignedhistory'][0]->email;
        $tat = $findcust[0]->approxclosetime;
        $ticketno = $findcust[0]->id;
        $supportno ="9033569861";
        $issue =$findcust[0]->subject;
        $lastupdated = $findcust[0]->created_at;
        $categoryname = $findcust[0]->categoryname;
        $priority = $findcust[0]->priority;
        $subject = $findcust[0]->subject;
        $projectname = $findcust[0]->projectname;
        $phone = $findcust[0]->phone;
        $alternetcontactno = $findcust[0]->alternetcontactno;
        $message = $findcust[0]->message;
        $toassignusersname = $findcust['ticketassignedhistory'][0]->name;
        $fromasssignusername = $findcust['ticketassignedhistory1'][0]->name;
        $data = array('name'=>$fullname,'ticketno'=>$ticketno,'tat'=>$tat,'supportno'=>$supportno,'issue'=>$issue, 'lastupdated'=>$lastupdated,'categoryname'=>$categoryname,'priority'=>$priority, 'subject'=>$subject, 'projectname'=>$projectname, 'phone'=>$phone, 'alternetcontactno'=>$alternetcontactno, 'message'=>$message,'toassignusersname'=>$toassignusersname,'fromasssignusername'=>$fromasssignusername);
        //dd($data);
        $subject = "Support Ticket"." # ".$ticketno;
        Mail::send('email.assignticket', $data, function($message) use ($emails,$subject)
            {    
            $message->to($emails)->subject($subject);    
            });
            $message = "Ticket Assigned";
         }
         else
         {
        //Assign Ticket to new Agent
        $productAttrArr2=[];
        $productAttrArr2['updated_at'] = Carbon::now()->toDateTimeString();
        DB::table('ticketassignments')->where(['ticket_id'=>$request->post('id')])->update($productAttrArr2);
        $productAttrArr1=[];
        $productAttrArr1['created_at'] = Carbon::now()->toDateTimeString();
        $productAttrArr1['ticket_id'] = $request->post('id');
        $productAttrArr1['toassignuser_id'] = $request->post('assignticket');
        $productAttrArr1['myassignuser_id'] = Auth::user()->id;
        DB::table('ticketassignments')->insert($productAttrArr1);
        $findcust = DB::table('supporttickets')
       ->join('projects','projects.id','=','supporttickets.project_id')
       ->join('customers','customers.id','=','supporttickets.cust_id')
       ->join('sub__category__tickets','sub__category__tickets.id','=','supporttickets.category_id')
       ->join('category__tickets','category__tickets.id','=','sub__category__tickets.category_id')
       ->join('ticketassignments','ticketassignments.ticket_id','=','supporttickets.id')
       //->join('sub__category__tickets','sub__category__tickets.id','=','supporttickets.category_id')
       ->select('customers.*','customers.image as customersimage','supporttickets.*','supporttickets.id as supportticket','supporttickets.created_at as ticketdate','sub__category__tickets.name as categoryname','projects.name as projectname','category__tickets.id as sub_categor_id','category__tickets.name as sub_categoryname','supporttickets.alternetcontactno')->WhereNull('customers.deleted_at')
       ->orderBy('supporttickets.id', 'desc')
       ->where('supporttickets.id',$request->post('id'))
       ->get();
       $findcust['ticketassignedhistory'] = DB::table('users')
        ->where('id',$request->post('assignticket'))->get(); 
        $findcust['ticketassignedhistory1'] = DB::table('users')
        ->where('id',Auth::user()->id)->get(); 
        //dd($findcust);
        //$findcust = DB::table('customers')->where('id',$request->post('customers'))->get();
        $cust_fname = $findcust[0]->firstname;
        $cust_lname = $findcust[0]->lastname;
        $fullname = $cust_fname.' '.$cust_lname;
        $emails = $findcust['ticketassignedhistory'][0]->email;
        $tat = $findcust[0]->approxclosetime;
        $ticketno = $findcust[0]->id;
        $supportno ="9033569861";
        $issue =$findcust[0]->subject;
        $lastupdated = $findcust[0]->created_at;
        $categoryname = $findcust[0]->categoryname;
        $priority = $findcust[0]->priority;
        $subject = $findcust[0]->subject;
        $projectname = $findcust[0]->projectname;
        $phone = $findcust[0]->phone;
        $alternetcontactno = $findcust[0]->alternetcontactno;
        $message = $findcust[0]->message;
        $toassignusersname = $findcust['ticketassignedhistory'][0]->name;
        $fromasssignusername = $findcust['ticketassignedhistory1'][0]->name;
        $data = array('name'=>$fullname,'ticketno'=>$ticketno,'tat'=>$tat,'supportno'=>$supportno,'issue'=>$issue, 'lastupdated'=>$lastupdated,'categoryname'=>$categoryname,'priority'=>$priority, 'subject'=>$subject, 'projectname'=>$projectname, 'phone'=>$phone, 'alternetcontactno'=>$alternetcontactno, 'message'=>$message,'toassignusersname'=>$toassignusersname,'fromasssignusername'=>$fromasssignusername);
        //dd($data);
        $subject = "Support Ticket"." # ".$ticketno;
        Mail::send('email.assignticket', $data, function($message) use ($emails,$subject)
            {    
            $message->to($emails)->subject($subject);    
            });
            $message = "Ticket Assigned";
        return redirect()->back()->with('success',$message);  
         }
       
    }
    public function ticketnotes(Request $request)
    {
        //Update Ticket Notes  
        $message = "Ticket Notes added";
        $productAttrArr=[];
        $productAttrArr['updated_at'] = Carbon::now()->toDateTimeString();
        $productAttrArr['ticket_notes'] = $request->ticket_notes;
        $productAttrArr['notes_added_by'] = Auth::user()->name;
        DB::table('supporttickets')->where(['id'=>$request->post('id')])->update($productAttrArr);
        return redirect()->back()->with('success',$message);  
    }
    public function ticketreply(Request $request)
    {
        $request->validate([
            'comment'=>'required',
            'image'=>'mimes:jpeg,jpg,png,webp' 
        ]);

        $message = "Details updated";
        $productAttrArr=[];
        if($request->hasfile('image')){

           /*  if($request->post('id')>0){
                $arrImage=DB::table('ticketreplys')->where(['ticket_id'=>$request->post('id')])->get();
                if(Storage::exists('/public/media/complaint/reply'.$arrImage[0]->image)){
                    Storage::delete('/public/media/complaint/reply'.$arrImage[0]->image);
                }
            } */
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
        $productAttrArr['commentby'] = Auth::user()->id;
        DB::table('ticketreplys')->insert($productAttrArr);

        $productAttrArr1=[];
        $productAttrArr1['updated_at'] = Carbon::now()->toDateTimeString();
        $productAttrArr1['replystatus'] = 1;
        DB::table('supporttickets')->where(['id'=>$request->post('id')])->update($productAttrArr1);
        return redirect()->back()->with('success',$message); 
    }
    public function finalstatus(Request $request)
    {
       
       //dd($findcust);
        $fstatus = DB::table('supporttickets')->where(['id'=>$request->post('id')])->get();
       // dd($fstatus[0]->finalstatus);
       $productAttrArr=[];
        if($fstatus[0]->finalstatus == 1 && $request->finalstatus == 2)
        {
            $message = "You can not reopen ticket because it is already Activte";
            return redirect()->back()->with('success',$message); 
        }
        if($request->finalstatus == 2)
        {
            $productAttrArr['reopendate'] = Carbon::now()->toDateTimeString(); 
            $productAttrArr['status'] = 1; 
            $findcust = DB::table('supporttickets')
       ->join('projects','projects.id','=','supporttickets.project_id')
       ->join('customers','customers.id','=','supporttickets.cust_id')
       ->join('sub__category__tickets','sub__category__tickets.id','=','supporttickets.category_id')
       ->join('category__tickets','category__tickets.id','=','sub__category__tickets.category_id')
       //->join('ticketassignments','ticketassignments.ticket_id','=','supporttickets.id')
       //->join('sub__category__tickets','sub__category__tickets.id','=','supporttickets.category_id')
       ->select('customers.*','customers.image as customersimage','supporttickets.*','supporttickets.id as supportticket','supporttickets.created_at as ticketdate','sub__category__tickets.name as categoryname','projects.name as projectname','category__tickets.id as sub_categor_id','category__tickets.name as sub_categoryname','supporttickets.alternetcontactno')->WhereNull('customers.deleted_at')
       ->orderBy('supporttickets.id', 'desc')
       ->where('supporttickets.id',$request->post('id'))
       ->get();
        //$findcust = DB::table('customers')->where('id',$request->post('customers'))->get();
        $cust_fname = $findcust[0]->firstname;
        $cust_lname = $findcust[0]->lastname;
        $fullname = $cust_fname.' '.$cust_lname;
        $emails = $findcust[0]->email;
        $tat = $findcust[0]->approxclosetime;
        $ticketno = $findcust[0]->id;
        $supportno ="9033569861";
        $issue =$findcust[0]->subject;
        $data = array('name'=>$fullname,'ticketno'=>$ticketno,'tat'=>$tat,'supportno'=>$supportno,'issue'=>$issue);
        $subject = "Support Ticket"." # ".$ticketno;

      Mail::send('email.reopen', $data, function($message) use ($emails,$subject)
        {    
        $message->to($emails)->subject($subject);    
        });   
        }
        if($request->finalstatus == 0)
        {
            $productAttrArr['finalclosedate'] = Carbon::now()->toDateTimeString(); 
            $findcust = DB::table('supporttickets')
       ->join('projects','projects.id','=','supporttickets.project_id')
       ->join('customers','customers.id','=','supporttickets.cust_id')
       ->join('sub__category__tickets','sub__category__tickets.id','=','supporttickets.category_id')
       ->join('category__tickets','category__tickets.id','=','sub__category__tickets.category_id')
       //->join('ticketassignments','ticketassignments.ticket_id','=','supporttickets.id')
       //->join('sub__category__tickets','sub__category__tickets.id','=','supporttickets.category_id')
       ->select('customers.*','customers.image as customersimage','supporttickets.*','supporttickets.id as supportticket','supporttickets.created_at as ticketdate','sub__category__tickets.name as categoryname','projects.name as projectname','category__tickets.id as sub_categor_id','category__tickets.name as sub_categoryname','supporttickets.alternetcontactno')->WhereNull('customers.deleted_at')
       ->orderBy('supporttickets.id', 'desc')
       ->where('supporttickets.id',$request->post('id'))
       ->get();
        //$findcust = DB::table('customers')->where('id',$request->post('customers'))->get();
        $cust_fname = $findcust[0]->firstname;
        $cust_lname = $findcust[0]->lastname;
        $fullname = $cust_fname.' '.$cust_lname;
        $emails = $findcust[0]->email;
        $tat = $findcust[0]->approxclosetime;
        $ticketno = $findcust[0]->id;
        $supportno ="9033569861";
        $issue =$findcust[0]->subject;
        $data = array('name'=>$fullname,'ticketno'=>$ticketno,'tat'=>$tat,'supportno'=>$supportno,'issue'=>$issue);
        $subject = "Support Ticket"." # ".$ticketno;

      Mail::send('email.closeticket', $data, function($message) use ($emails,$subject)
        {    
        $message->to($emails)->subject($subject);    
        });
        }
        $message = "Record Updated";
       
        $productAttrArr['updated_at'] = Carbon::now()->toDateTimeString();
        //$productAttrArr['status'] = $request->status;
        $productAttrArr['finalstatus'] = $request->finalstatus;
        DB::table('supporttickets')->where(['id'=>$request->post('id')])->update($productAttrArr);  
        
       
       //email
       
        
        return redirect()->back()->with('success',$message);  
    }
    
    public function basic_email(Request $request) 
    {
        
        $findcust = DB::table('customers')->where('id',2)->get();
        $cust_fname = $findcust[0]->firstname;
        $cust_lname = $findcust[0]->lastname;
        $fullname = $cust_fname.' '.$cust_lname;
        $emails = $findcust[0]->email;
        $tat ="24 HRS";
        $ticketno = "0001";
        $supportno ="9033569861";
        $issue ="Keyboard not working";
        $data = array('name'=>$fullname,'ticketno'=>$ticketno,'tat'=>$tat,'supportno'=>$supportno,'issue'=>$issue);
        $subject = "Support Ticket"." # ".$ticketno;

      Mail::send('email.mail', $data, function($message) use ($emails,$subject)
    {    
    $message->to($emails)->subject($subject);    
    });
      echo "Email Sent with attachment. Check your inbox.";
    }
    
        
       
}
