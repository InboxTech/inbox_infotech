<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Symfony\Component\Console\Helper\Table;
use Illuminate\Support\Carbon;
use App\Models\Contactu;
use PhpParser\Node\Expr\AssignOp\Concat;
use Mail;
use App\Models\Leadership;
use App\Models\Jobapplication;
class FrontController extends Controller
{
        public function index()
    {
       $arr['slider']=DB::table('sliders')->WhereNull('deleted_at')->get();
       $arr['leadership'] = Leadership::where('status',1)->get();
       $arr['clientlogos']=DB::table('clientlogos')->where('status',1)->WhereNull('deleted_at')->get();
       $arr['testimonials']=DB::table('testimonials')->where('status',1)->WhereNull('deleted_at')->get();
       $arr['service_data']=DB::table('services')->where('status',1)->WhereNull('deleted_at')->get();
       $arr['product_data']=DB::table('products')->where('status',1)->WhereNull('deleted_at')->get();
       //dd($arr);
        return view('afrontend.index',$arr);
    }
    public function aboutus()
    {
        $arr['ceomessage']=DB::table('cms')->where('id',53)->where('status',1)->WhereNull('deleted_at')->get();
        $arr['compover']=DB::table('cms')->where('id',54)->where('status',1)->WhereNull('deleted_at')->get();
        $arr['award']=DB::table('awards')->where('status',1)->WhereNull('deleted_at')->orderby('id','desc')->get();

        //dd($arr);
        return view('afrontend.aboutus',$arr);
    }
    public function products()
    {
        $arr['product']=DB::table('products')->where('status',1)->WhereNull('deleted_at')->get();    
        //dd($arr);    
        return view('afrontend.products',$arr);
    }
    public function product(Request $req, $name)
    {
        $brr = DB::table('products')->where('slug',$name)->get();
        if($brr->isEmpty()){
            return view('errors.404');
        }
        else
        {
        $id =$brr[0]->id;    
        $arr['product']=DB::table('products')->where('id',$id)->where('status',1)->WhereNull('deleted_at')->get();
        $arr['slider']=DB::table('products_images')->where('product_id',$id)->get();
       return view('afrontend.productdetails',$arr);
        }
    }
    public function services()
    {
        $arr['service']=DB::table('services')->where('status',1)->WhereNull('deleted_at')->get();
        //dd($arr);
        return view('afrontend.services',$arr);
    }
    public function servicesdetails(Request $req, $name)
    {
        $brr = DB::table('services')->where('slug',$name)->get();
        if($brr->isEmpty()){
            return view('errors.404');
        }
        else
        {
        $id =$brr[0]->id;
        $arr['service']=DB::table('services')->where('id',$id)->where('status',1)->WhereNull('deleted_at')->get();
        $arr['slider']=DB::table('service_images')->where('service_id',$id)->get();
        //dd($arr);
        return view('afrontend.servicedetail',$arr);
        }
        //dd();
        
    }
    public function careers()
    {
        $date = Carbon::now()->format('Y-m-d');
        $arr['careers']=DB::table('carrers')->where('status',1)->WhereNull('deleted_at')->orderBy('id', 'DESC')->get();
        //dd($arr);
        return view('afrontend.careers',$arr);
    }
    public function careersdetails(Request $req, $name,$id)
    {
        $arr['carrers']=DB::table('carrers')->where('id',$id)->where('status',1)->WhereNull('deleted_at')->get();
        //dd($arr);
        return view('afrontend.careerdetail',$arr);
    }
    public function careersapply($name,$id)
    {
        //return $name.$id;
        /* $arr = DB::table('carrers')->where('id',$id)->get();
        $arr['position'] = $arr[0]->position;
        $arr['id'] = $arr[0]->id;   */     
        $arr['productAttrArr'][0]['aeid']='';
        $arr['productAttrArr'][0]['job_application_id']='';
        $arr['productAttrArr'][0]['company_name']='';
        $arr['productAttrArr'][0]['position']='';
        $arr['productAttrArr'][0]['details']='';
        $arr['productAttrArr'][0]['start_date']='';
        $arr['productAttrArr'][0]['end_date']='';
        $arr['productAttrArr'][0]['reason_for_job_change']='';
        $arr['productAttrArr'][0]['other']='';
       //dd($arr);
       $arr = DB::table('carrers')->where('id',$id)->get();
        $arr['position'] = $arr[0]->position;
        $arr['id'] = $arr[0]->id; 
        return view('afrontend.jobapplcation',$arr);
    }
    public function jobappsubmitform(Request $req){
       /* return $req->all();
       die; */
       /* echo '<pre>';
        print_r($req->post());
        die(); */
       $req->validate([
        'photo'=>'required|mimes:jpeg,jpg,png',
        'resume'=>'required|mimes:jpeg,jpg,png,pdf,doc',
        'first_name'=>'required',
        'last_name'=>'required',
        'citizenship'=>'required',
        'date_of_birth'=>'required',
        'address'=>'required',
        'zip_code'=>'required',
        'city'=>'required',
        'state'=>'required',
        'phone_no'=>'required',
        'email_id'=>'required',
        'ready_to_reallocates'=>'required',
    ]);
       
        $name_of_the_examination=$req->post('name_of_the_examination'); 
        $name_of_the_boardoruniversity=$req->post('name_of_the_boardoruniversity'); 
        $name_of_the_institution=$req->post('name_of_the_institution'); 
        $year_of_passing=$req->post('year_of_passing'); 
        $company_name=$req->post('company_name'); 
        $position=$req->post('position'); 
        $details=$req->post('details'); 
        $start_date= $req->post('start_date');
        $end_date=$req->post('end_date');
        /* $start_date= date ('Y-m-d H:i:s', $req->post('start_date'));
        $end_date= date ('Y-m-d H:i:s', $req->post('start_date')); */
        $reason_for_job_change=$req->post('reason_for_job_change'); 
        $cgpa=$req->post('cgpa'); 
        $arr = new Jobapplication();
        $message = "Thanks for apply, We have received your application!";
        $arr->status = 1;
        if($req->hasfile('photo')){
            $image=$req->file('photo');
            $ext=$image->extension();
            $image_name=time().'.'.$ext;
            $image->storeAs('/public/media',$image_name);
            $arr->photo=$image_name;
        }
        if($req->hasfile('resume')){
            $image=$req->file('resume');
            $ext=$image->extension();
            $image_name=time().'.'.$ext;
            $image->storeAs('/public/media',$image_name);
            $arr->resume=$image_name;
        }
        $skuArr= $req->jobid;
        $skuArr1= $req->jobid;
        $arr->job_post_id = $req->jobid;
        $arr->first_name= $req->first_name;
        $arr->last_name= $req->last_name;
        $arr->citizenship= $req->citizenship;
        $arr->date_of_birth= $req->date_of_birth;
        $arr->address= $req->address;
        $arr->zip_code= $req->zip_code;
        $arr->city= $req->city;
        $arr->state= $req->state;
        $arr->ready_to_reallocates= $req->ready_to_reallocates;
        $arr->email_id= $req->email_id;
        $arr->phone_no= $req->phone_no;
        $arr->save();
        $pid=$arr->id;
        foreach($name_of_the_examination as $key=>$val){
            $productAttrArr=[];
            $productAttrArr['job_application_id']=$pid;
            $productAttrArr['name_of_the_examination']=$name_of_the_examination[$key];
            $productAttrArr['name_of_the_boardoruniversity']=$name_of_the_boardoruniversity[$key];
            $productAttrArr['name_of_the_institution']=$name_of_the_institution[$key];
            $productAttrArr['year_of_passing']=$year_of_passing[$key];
            $productAttrArr['cgpa']=$cgpa[$key];
			//dd($productAttrArr);
            DB::table('applicant_qualifications')->insert($productAttrArr);            
        }  
        foreach($company_name as $key=>$val){
            $productAttrArr1=[];
            $productAttrArr1['job_application_id']=$pid;
            $productAttrArr1['company_name']=$company_name[$key];
            $productAttrArr1['position']=$position[$key];
            $productAttrArr1['details']=$details[$key];
            $productAttrArr1['start_date']=$start_date[$key];
            $productAttrArr1['end_date']=$end_date[$key];
			$productAttrArr1['reason_for_job_change']=$reason_for_job_change[$key];

            DB::table('applicant_exps')->insert($productAttrArr1);            
        }  
		
   return back()->with('success',$message);
   }
    public function contactus()
    {
        return view('afrontend.contactus');
    }
    public function contactusformsubmit(Request $request)
    {
        //echo $clientIP = request()->ip();
       // return $result['data'] = Contactu::all();die;
        $data = new Contactu();
        $data->created_at = Carbon::now()->toDateTimeString();
        $data->updated_at = Carbon::now()->toDateTimeString();
        $data->ip = $request->ip;
        $data->message = $request->message;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->status = 0;
        $data->save();

        
        $fullname =  $request->name;
        $emails = "support@inboxtechs.com";
        $supportno = $request->email;
        $data = array('name'=>$fullname,'supportno'=>$supportno,'details'=>$request->message);
        $subject = "Request Call Back / Inquiry";

      Mail::send('email.contactus', $data, function($message) use ($emails,$subject)
    {    
    $message->to($emails)->subject($subject);    
    });
   
      return redirect('/contactus')->with('success',"Thank You, We have received your response");
    }
    public function industries()
    {
        $arr['industries']=DB::table('industries')->where('status',1)->WhereNull('deleted_at')->get();
        //dd($arr);
        return view('afrontend.industries',$arr);
    }
    public function industriesdetails(Request $req, $name)
    {
        $brr = DB::table('industries')->where('slug',$name)->get();
       // dd($brr);
        if($brr->isEmpty()){
            return view('errors.404');
        }
        else
        {
        $id =$brr[0]->id;
        $arr['product']=DB::table('industries')->where('id',$id)->where('status',1)->WhereNull('deleted_at')->get();
        $arr['slider']=DB::table('industrie_images')->where('service_id',$id)->get();
        //dd($arr);
        return view('afrontend.industriesdetail',$arr);
        }
        //dd();
        
    }
}
