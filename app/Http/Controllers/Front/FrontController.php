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
use App\Models\Carrer;
use Illuminate\Http\Response;

class FrontController extends Controller
{
    public function index()
    {
        $arr['slider'] = DB::table('sliders')->WhereNull('deleted_at')->get();
        $arr['leadership'] = Leadership::where('status', 1)->get();
        $arr['clientlogos'] = DB::table('clientlogos')->where('status', 1)->WhereNull('deleted_at')->get();
        $arr['testimonials'] = DB::table('testimonials')->where('status', 1)->WhereNull('deleted_at')->get();
        $arr['service_data'] = DB::table('services')->where('status', 1)->WhereNull('deleted_at')->get();
        $arr['product_data'] = DB::table('products')->where('status', 1)->WhereNull('deleted_at')->get();
        //   dd($arr);
        return view('afrontend.index', $arr);
    }

    public function aboutus()
    {
        $arr['ceomessage'] = DB::table('cms')->where('id', 53)->where('status', 1)->WhereNull('deleted_at')->get();
        $arr['compover'] = DB::table('cms')->where('id', 54)->where('status', 1)->WhereNull('deleted_at')->get();
        $arr['award'] = DB::table('awards')->where('status', 1)->WhereNull('deleted_at')->orderby('id', 'desc')->get();

        //dd($arr);
        // dd($arr);
        return view('afrontend.aboutus', $arr);
    }
    public function products()
    {
        $arr['product'] = DB::table('products')->where('status', 1)->WhereNull('deleted_at')->get();
        //dd($arr);
        return view('afrontend.products', $arr);
    }

    // voksen AI bot
    public function tuno()
    {
        // $arr['slider']=DB::table('sliders')->WhereNull('deleted_at')->get(); //swiper
        // $arr['product']=DB::table('products')->where('status',1)->WhereNull('deleted_at')->get();
        //dd($arr);
        // return view('afrontend.voksen',$arr);
        return view('afrontend.tuno');
    }
    public function healthTech()
    {
        $arr['clientlogos'] = DB::table('clientlogos')->where('status', 1)->WhereNull('deleted_at')->get();
        return view('afrontend.health-tech', $arr);
    }
    public function finTech()
    {
        $arr['clientlogos'] = DB::table('clientlogos')->where('status', 1)->WhereNull('deleted_at')->get();
        return view('afrontend.fintech', $arr);
    }
     public function retailEcommerce()
    {
        $arr['clientlogos'] = DB::table('clientlogos')->where('status', 1)->WhereNull('deleted_at')->get();
        return view('afrontend.retail-ecommerce', $arr);
    }
     public function logistic()
    {
        $arr['clientlogos'] = DB::table('clientlogos')->where('status', 1)->WhereNull('deleted_at')->get();
        return view('afrontend.logistics', $arr);
    }
     public function edTech()
    {
        $arr['clientlogos'] = DB::table('clientlogos')->where('status', 1)->WhereNull('deleted_at')->get();
        return view('afrontend.edtech', $arr);
    }
    public function product(Request $req, $name)
    {
        $brr = DB::table('products')->where('slug', $name)->get();
        if ($brr->isEmpty()) {
            return view('errors.404');
        } else {
            $id = $brr[0]->id;
            $arr['product'] = DB::table('products')->where('id', $id)->where('status', 1)->WhereNull('deleted_at')->get();
            $arr['slider'] = DB::table('products_images')->where('product_id', $id)->get();
            return view('afrontend.productdetails', $arr);
        }
    }
    public function services()
    {
        $arr['service'] = DB::table('services')->where('status', 1)->WhereNull('deleted_at')->get();
        //dd($arr);
        return view('afrontend.services', $arr);
    }

    // recruitment and staffing
    public function softwareDevelopment()
    {
        $arr['clientlogos'] = DB::table('clientlogos')->where('status', 1)->WhereNull('deleted_at')->get();
        return view('afrontend.software-development', $arr);
    }
    public function appDevelopment()
    {
        $arr['clientlogos'] = DB::table('clientlogos')->where('status', 1)->WhereNull('deleted_at')->get();
        return view('afrontend.app-development', $arr);
    }
    public function aimlDevelopment()
    {
        $arr['clientlogos'] = DB::table('clientlogos')->where('status', 1)->WhereNull('deleted_at')->get();
        return view('afrontend.ai-ml-development', $arr);
    }
    public function iot()
    {
        $arr['clientlogos'] = DB::table('clientlogos')->where('status', 1)->WhereNull('deleted_at')->get();
        return view('afrontend.iot', $arr);
    }
    public function cloud()
    {
        $arr['clientlogos'] = DB::table('clientlogos')->where('status', 1)->WhereNull('deleted_at')->get();
        return view('afrontend.cloud', $arr);
    }
    public function infrastructureManagement()
    {
        $arr['clientlogos'] = DB::table('clientlogos')->where('status', 1)->WhereNull('deleted_at')->get();
        return view('afrontend.infrastructure-management', $arr);
    }
    public function cyberSecurity()
    {
        $arr['clientlogos'] = DB::table('clientlogos')->where('status', 1)->WhereNull('deleted_at')->get();
        return view('afrontend.cyber-security', $arr);
    }
    public function dataCenterSolutions()
    {
        $arr['clientlogos'] = DB::table('clientlogos')->where('status', 1)->WhereNull('deleted_at')->get();
        return view('afrontend.data-center-solutions', $arr);
    }
    public function recruitmentStaffing()
    {
        $arr['testimonials'] = DB::table('testimonials')->where('status', 1)->WhereNull('deleted_at')->get();
        return view('afrontend.recruitment_staffing', $arr);
    }
    public function servicesdetails(Request $req, $name)
    {
        $brr = DB::table('services')->where('slug', $name)->get();
        if ($brr->isEmpty()) {
            return view('errors.404');
        } else {
            $id = $brr[0]->id;
            $arr['service'] = DB::table('services')->where('id', $id)->where('status', 1)->WhereNull('deleted_at')->get();
            $arr['slider'] = DB::table('service_images')->where('service_id', $id)->get();
            //dd($arr);
            return view('afrontend.servicedetail', $arr);
        }
        //dd();

    }
    public function careers()
    {
        $date = Carbon::now()->format('Y-m-d');
        $arr['careers'] = DB::table('carrers')->where('status', 1)->WhereNull('deleted_at')->orderBy('id', 'DESC')->get();
        //dd($arr);
        return view('afrontend.careers', $arr);
    }
    public function careersdetails($name, $id)
    {
        $carrers['carrersdetails'] = Carrer::where('id', $id)->where('status', 1)->firstOrFail();
        return view('afrontend.careerdetail', $carrers, compact('carrers'));
    }
    public function careersapply($name, $id)
    {
        //return $name.$id;
        /* $arr = DB::table('carrers')->where('id',$id)->get();
        $arr['position'] = $arr[0]->position;
        $arr['id'] = $arr[0]->id;   */
        $arr['productAttrArr'][0]['aeid'] = '';
        $arr['productAttrArr'][0]['job_application_id'] = '';
        $arr['productAttrArr'][0]['company_name'] = '';
        $arr['productAttrArr'][0]['position'] = '';
        $arr['productAttrArr'][0]['details'] = '';
        $arr['productAttrArr'][0]['start_date'] = '';
        $arr['productAttrArr'][0]['end_date'] = '';
        $arr['productAttrArr'][0]['reason_for_job_change'] = '';
        $arr['productAttrArr'][0]['other'] = '';
        // // dd($arr);
        $arr = DB::table('carrers')->where('id', $id)->where('status', 1)->get();
        $arr['position'] = $arr[0]->position;
        $arr['id'] = $arr[0]->id;

        $arr = Carrer::where(['id' => $id, 'status' => 1])->firstOrFail();

        return view('afrontend.jobapplcation', $arr);
    }
    public function jobappsubmitform(Request $req)
    {
        $req->validate([

            'resume' => 'required|mimes:jpeg,jpg,png,pdf,doc',
            'first_name' => 'required',
            'last_name' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'phone_no' => 'required',
            'email_id' => 'required',
            'ready_to_reallocates' => 'required',
        ]);


        $arr = new Jobapplication();
        $message = "Thanks for apply, We have received your application!";
        $arr->status = 1;

        if ($req->hasfile('resume')) {
            $image = $req->file('resume');
            $ext = $image->extension();
            $image_name = time() . '.' . $ext;
            $image->storeAs('/public/media', $image_name);
            $arr->resume = $image_name;
        }

        $arr->job_post_id = $req->jobid;
        $arr->first_name = $req->first_name;
        $arr->last_name = $req->last_name;

        $arr->address = $req->address;

        $arr->city = $req->city;
        $arr->state = $req->state;
        $arr->ready_to_reallocates = $req->ready_to_reallocates;
        $arr->email_id = $req->email_id;
        $arr->phone_no = $req->phone_no;
        // $arr->save();

        $fn = $req->first_name;
        $ln = $req->last_name;
        $fullname =  $fn . ' ' . $ln;
        $app_emails = $req->email_id;
        $supportno = $req->phone_no;
        $jobid = $req->jobid;
        $dfg = DB::table('carrers')->where('id', $jobid)->get();
        $position = $dfg[0]->position;
        $resume = $image_name;
        $emails = "hr@inbox-infotech.com";
        $data = array('name' => $fullname, 'supportno' => $supportno, 'position' => $position, 'resume' => $resume, 'emailid' => $app_emails);
        $subject = "Job Application for post of " . $position;

        Mail::send('email.jobapplication', $data, function ($message) use ($emails, $subject) {
            $message->to($emails)->subject($subject);
        });

        return back()->with('success', $message);
    }
    public function contactus()
    {
        return view('afrontend.contactus');
    }
    public function contactusformsubmit(Request $request)
    {
        //echo $clientIP = request()->ip();
        // return $result['data'] = Contactu::all();die;

        $request->validate([
            'email' => 'required|email|unique:contactus,email',
        ]);

        // Combine country code with phone number
        $fullPhone = $request->country_code . $request->phone;

        $data = new Contactu();
        $data->created_at = Carbon::now()->toDateTimeString();
        $data->updated_at = Carbon::now()->toDateTimeString();
        $data->ip = $request->ip;
        $data->message = $request->message;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $fullPhone; // Save combined phone
        $data->status = 0;
        $data->save();

        // Spam word filtering
        $string = strtolower($request->name . $request->message);
        $spamwords = ['women sex', 'sex', 'best women', 'porn', 'viagra', 'girl', 'sexy girl', 'hot girl', 'girls', 'hot sexy'];

        foreach ($spamwords as $word) {
            if (strpos($string, $word) !== false) {
                return back();
            }
        }

        $fullname = $request->name;
        $emails = ["info@inbox-infotech.com"]; // multiple emails
        $supportno = $request->email;
        $phoneno = $fullPhone;
        $data = [
            'name' => $fullname,
            'supportno' => $supportno,
            'phoneno' => $phoneno,
            'details' => $request->message
        ];
        $subject = "Request Call Back / Inquiry";

        Mail::send('email.contactus', $data, function ($message) use ($emails, $subject) {
            $message->to($emails)->subject($subject);
        });

        return redirect('/contact-us')->with('success', "Thank You, We have received your response");
    }

    public function industries()
    {
        $arr['industries'] = DB::table('industries')->where('status', 1)->WhereNull('deleted_at')->get();
        //dd($arr);
        return view('afrontend.industries', $arr);
    }
    public function industriesdetails(Request $req, $name)
    {
        $brr = DB::table('industries')->where('slug', $name)->get();
        // dd($brr);
        if ($brr->isEmpty()) {
            return view('errors.404');
        } else {
            $id = $brr[0]->id;
            $arr['product'] = DB::table('industries')->where('id', $id)->where('status', 1)->WhereNull('deleted_at')->get();
            $arr['slider'] = DB::table('industrie_images')->where('service_id', $id)->get();
            //dd($arr);
            return view('afrontend.industriesdetail', $arr);
        }
        //dd();

    }
    public function blog()
    {
        $arr['blog'] = DB::table('blogs')->where('status', 1)->WhereNull('deleted_at')->get();
        //dd($arr);
        return view('afrontend.blogs', $arr);
    }
    public function blogdetails(Request $req, $name)
    {
        //echo "Test";die;
        $brr = DB::table('blogs')->where('slug', $name)->get();
        // dd($brr);
        if ($brr->isEmpty()) {
            return view('errors.404');
        } else {
            $id = $brr[0]->id;
            $arr['product'] = DB::table('blogs')->where('id', $id)->where('status', 1)->WhereNull('deleted_at')->get();
            $arr['slider'] = DB::table('blog_images')->where('service_id', $id)->get();
            //dd($arr);
            return view('afrontend.blogdetail', $arr);
        }
    }

    public function sitemap(): Response
    {
        return response()->view('afrontend.sitemap')->header('Content-Type', 'text/xml');

        $id = $brr[0]->id;
        $arr['product'] = DB::table('blogs')->where('id', $id)->where('status', 1)->WhereNull('deleted_at')->get();
        $arr['slider'] = DB::table('blog_images')->where('service_id', $id)->get();
        //dd($arr);
        // return view('afrontend.blogdetail', $arr);
        //dd();
    }
    /* public function sitemap()
	{
		return view('afrontend.sitemap');
	} */
}
