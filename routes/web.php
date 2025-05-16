<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\CmsController;
use App\Http\Controllers\admin\CarrerController;
use App\Http\Controllers\admin\JobapplicationController;
use App\Http\Controllers\admin\ServiceController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\admin\SliderController;
// use App\Http\Controllers\admin\ProductSliderController;
use App\Http\Controllers\admin\ContactusConntroller;
use App\Http\Controllers\admin\LeadershipController;
use App\Http\Controllers\admin\ClientlogoController;
use App\Http\Controllers\admin\TestimonialController;
use App\Http\Controllers\admin\AwardController;
use App\Http\Controllers\admin\CategoryTicketController;
use App\Http\Controllers\admin\SubCategoryTicketController;
use App\Http\Controllers\admin\ProjectController;
use App\Http\Controllers\admin\CustomerController;
use App\Http\Controllers\admin\SupportticketController;
use App\Http\Controllers\Customer\AuthController;
use App\Http\Controllers\Customer\Supportticket;
use App\Http\Controllers\Front\SignupemailController;
use App\Http\Controllers\admin\IndustrieController;
use App\Http\Controllers\admin\BlogController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    //User Management
    Route::get('/admin/users/userlist',[UserController::class,'userlist']);//Users List
    Route::get('/admin/user/delete/{id}',[UserController::class,'userdelete']);//User Soft Delete
    Route::get('/admin/user/manageuser/{id}',[UserController::class,'usermanage']);  //Manage user form view
    Route::post('/admin/user/manageuser/submit',[UserController::class,'submitform']); //Manage user From Submit
    Route::get('/admin/user/export',[UserController::class,'export']); //Export Users Data
    Route::post('/admin/user/cmslist',[UserController::class,'userlistsearch']); //Search Data
    //CMS Managment
    Route::get('/admin/cms/cmslist',[CmsController::class,'cmslist']); //CMS List View
    Route::get('/admin/cms/managecms/',[CmsController::class,'cmsmanage']);  //CMS ADD form view
    Route::get('/admin/cms/managecms/{id}',[CmsController::class,'cmsmanage']);  //CMS ADD form view
    Route::post('/admin/cms/managecms/submit',[CmsController::class,'submitform']); //CMS From Submit
    Route::get('/admin/cms/delete/{id}',[CmsController::class,'delete']); //CMS Record Delete
    Route::post('/admin/cms/cmslist',[CmsController::class,'cmslistsearch']); //Search Data
    Route::get('/admin/cms/export',[CmsController::class,'export']); //Export Data
    //Career Page Management
    Route::get('/admin/career/jobposting/list',[CarrerController::class,'joblist']);//Job Posting List
    Route::get('/admin/career/jobposting/managejob',[CarrerController::class,'managejob']);  //Job ADD form view
    Route::get('/admin/career/jobposting/managejob/{id}',[CarrerController::class,'managejob']);  //Job ADD form view
    Route::post('/admin/career/jobposting/managejob/submit',[CarrerController::class,'submitform']); //Job From Submit
    Route::get('/admin/career/jobposting/delete/{id}',[CarrerController::class,'delete']); //Job Record Delete
    Route::post('/admin/career/jobposting/list',[CarrerController::class,'joblistsearch']); //Search Data
    Route::get('/admin/career/jobposting/export',[CarrerController::class,'export']); //Export Data
    //Job Application  Management
    Route::get('/admin/career/jobapplication/list',[JobapplicationController::class,'jobapplist']);//Job Application List
    Route::get('/admin/career/jobapplication/managejobapp',[JobapplicationController::class,'managejobapp']);  //Job Application ADD form view
    Route::get('/admin/career/jobapplication/managejobapp/{id}',[JobapplicationController::class,'managejobapp']);  //Job Application ADD form view
    Route::post('/admin/career/jobapplication/managejobapp/submit',[JobapplicationController::class,'submitform']); //Job Application From Submit
    Route::get('/admin/career/jobapplication/delete/{id}',[JobapplicationController::class,'delete']); //Job Application Record Delete
    Route::post('/admin/career/jobapplication/list',[JobapplicationController::class,'jobapplistsearch']); //Search Data
    Route::get('/admin/career/jobapplication/export',[JobapplicationController::class,'export']); //Export Data
    Route::get('/admin/career/jobapplication/print/{id}',[JobapplicationController::class,'print']);//Print Application
    //Service Management
    Route::get('/admin/service/list',[ServiceController::class,'index']);//Show list of service
    Route::get('/admin/service/add',[ServiceController::class,'create']);//Create service
    Route::get('/admin/service/update/{id}',[ServiceController::class,'create']);//Update service
    Route::post('/admin/service/manageservice/submit',[ServiceController::class,'store']);//Form submit
    Route::get('/admin/service/delete/{id}',[ServiceController::class,'destroy']);//Form Record Delete
    Route::get('admin/service/service_attr_delete/{paid}/{pid}',[ServiceController::class,'service_attr_delete']);//Service Attributes Delete
    Route::post('/admin/service/list/search/',[ServiceController::class,'search']);//Show list of service
    //Product Management
    Route::get('/admin/product/list',[ProductController::class,'index']);//Show list of product
    Route::get('/admin/product/add',[ProductController::class,'create']);//Create product
    Route::get('/admin/product/update/{id}',[ProductController::class,'create']);//Update product
    Route::post('/admin/product/manageproduct/submit',[ProductController::class,'store']);//Form submit
    Route::get('/admin/product/delete/{id}',[ProductController::class,'destroy']);//Form Record Delete
    Route::get('admin/product/product_attr_delete/{paid}/{pid}',[ProductController::class,'product_attr_delete']);//Service Attributes Delete
    Route::post('/admin/product/list/search/',[ProductController::class,'search']);//Show list of product
    //Slider Management
    Route::get('admin/home_banner',[SliderController::class,'index']);
    Route::get('admin/home_banner/manage_home_banner',[SliderController::class,'manage_home_banner']);
    Route::get('admin/home_banner/manage_home_banner/{id}',[SliderController::class,'manage_home_banner']);
    Route::post('admin/home_banner/manage_home_banner_process',[SliderController::class,'manage_home_banner_process'])->name('home_banner.manage_home_banner_process');
    Route::get('admin/home_banner/delete/{id}',[SliderController::class,'delete']);
    Route::get('admin/home_banner/status/{status}/{id}',[SliderController::class,'status']);
    //Contact US
    Route::get('admin/contactus',[ContactusConntroller::class,'index']);
    Route::get('admin/contactus/manage_contactus/{id}',[ContactusConntroller::class,'manage_contactus']);
    Route::post('admin/contactus/manage_contactus_process',[ContactusConntroller::class,'manage_contactus_process']);
    Route::get('admin/contactus/delete/{id}',[ContactusConntroller::class,'delete']);
    Route::get('admin/contactus/status/{status}/{id}',[ContactusConntroller::class,'status']);
    //Leadership Management
    Route::get('/admin/leadership/list',[LeadershipController::class,'index']);//Show list
    Route::get('/admin/leadership/add',[LeadershipController::class,'create']);//Create Data
    Route::get('/admin/leadership/update/{id}',[LeadershipController::class,'create']);//Update Data
    Route::post('/admin/leadership/manageleadership/submit',[LeadershipController::class,'store']);//Form submit
    Route::get('/admin/leadership/delete/{id}',[LeadershipController::class,'destroy']);//Form Record Delete
    Route::post('/admin/product/list/search/',[LeadershipController::class,'search']);//Show list of product
    //Clientlogo Management
    Route::get('/admin/clientlogo/list',[ClientlogoController::class,'index']);//Show list
    Route::get('/admin/clientlogo/add',[ClientlogoController::class,'create']);//Create Data
    Route::get('/admin/clientlogo/update/{id}',[ClientlogoController::class,'create']);//Update Data
    Route::post('/admin/clientlogo/manageclientlogo/submit',[ClientlogoController::class,'store']);//Form submit
    Route::get('/admin/clientlogo/delete/{id}',[ClientlogoController::class,'destroy']);//Form Record Delete
    Route::post('/admin/clientlogo/list/search/',[ClientlogoController::class,'search']);//Show list of product
    //Testimonial Management
    Route::get('/admin/testimonial/list',[TestimonialController::class,'index']);//Show list
    Route::get('/admin/testimonial/add',[TestimonialController::class,'create']);//Create Data
    Route::get('/admin/testimonial/update/{id}',[TestimonialController::class,'create']);//Update Data
    Route::post('/admin/testimonial/managetestimonial/submit',[TestimonialController::class,'store']);//Form submit
    Route::get('/admin/testimonial/delete/{id}',[TestimonialController::class,'destroy']);//Form Record Delete
    Route::post('/admin/testimonial/list/search/',[TestimonialController::class,'search']);//Show list of product
    //voksen product slider
    // Route::get('admin/product_banner',[ProductSliderController::class,'index']);
    // Route::get('admin/product_banner/manage_product_banner',[ProductSliderController::class,'manage_product_banner']);
    // Route::get('admin/product_banner/manage_product_banner/{id}',[ProductSliderController::class,'manage_product_banner']);
    // Route::post('admin/product_banner/manage_product_banner_process',[ProductSliderController::class,'manage_product_banner_process'])->name('product_banner.manage_product_banner_process');
    // Route::get('admin/product_banner/delete/{id}',[ProductSliderController::class,'delete']);
    // Route::get('admin/product_banner/status/{status}/{id}',[ProductSliderController::class,'status']);
     //Leadership Management
    Route::get('/admin/award/list',[AwardController::class,'index']);//Show list
    Route::get('/admin/award/add',[AwardController::class,'create']);//Create Data
    Route::get('/admin/award/update/{id}',[AwardController::class,'create']);//Update Data
    Route::post('/admin/award/manageaward/submit',[AwardController::class,'store']);//Form submit
    Route::get('/admin/award/delete/{id}',[AwardController::class,'destroy']);//Form Record Delete
    Route::post('/admin/award/list/search/',[AwardController::class,'search']);//search
     //Ticket Category
    Route::get('/admin/tieket_category/list',[CategoryTicketController::class,'index']);//Show list
    Route::get('/admin/tieket_category/add',[CategoryTicketController::class,'create']);//Create Data
    Route::get('/admin/tieket_category/update/{id}',[CategoryTicketController::class,'create']);//Update Data
    Route::post('/admin/tieket_category/managecategory/submit',[CategoryTicketController::class,'store']);//Form submit
    Route::get('/admin/tieket_category/delete/{id}',[CategoryTicketController::class,'destroy']);//Form Record Delete
    Route::post('/admin/tieket_category/list/search/',[CategoryTicketController::class,'search']);//search
      //Ticket Sub Category
    Route::get('/admin/tieket_sub_category/list',[SubCategoryTicketController::class,'index']);//Show list
    Route::get('/admin/tieket_sub_category/add',[SubCategoryTicketController::class,'create']);//Create Data
    Route::get('/admin/tieket_sub_category/update/{id}',[SubCategoryTicketController::class,'create']);//Update Data
    Route::post('/admin/tieket_sub_category/managecategory/submit',[SubCategoryTicketController::class,'store']);//Form submit
    Route::get('/admin/tieket_csub_ategory/delete/{id}',[SubCategoryTicketController::class,'destroy']);//Form Record Delete
    Route::post('/admin/tieket_sub_category/list/search/',[SubCategoryTicketController::class,'search']);//search
    //Manage Projects
    Route::get('/admin/projects/list',[ProjectController::class,'index']);//Show list
    Route::get('/admin/projects/add',[ProjectController::class,'create']);//Create Data
    Route::get('/admin/projects/update/{id}',[ProjectController::class,'create']);//Update Data
    Route::post('/admin/projects/manageprojects/submit',[ProjectController::class,'store']);//Form submit
    Route::get('/admin/projects/delete/{id}',[ProjectController::class,'destroy']);//Form Record Delete
    Route::post('/admin/projects/list/search/',[ProjectController::class,'search']);//search
    //Manage Customers
    Route::get('/admin/customers/list',[CustomerController::class,'index']);//Show list
    Route::get('/admin/customers/add',[CustomerController::class,'create']);//Create Data
    Route::get('/admin/customers/update/{id}',[CustomerController::class,'create']);//Update Data
    Route::post('/admin/customers/managecustomers/submit',[CustomerController::class,'store']);//Form submit
    Route::get('/admin/customers/delete/{id}',[CustomerController::class,'destroy']);//Form Record Delete
    Route::post('/admin/customers/list/search/',[CustomerController::class,'search']);//search
    //Manage Tickets
    Route::get('/admin/supporttickets/list',[SupportticketController::class,'index']);//Show list
    Route::get('/admin/supporttickets/add',[SupportticketController::class,'create']);//Create Data
    Route::get('/admin/supporttickets/update/{id}',[SupportticketController::class,'create']);//Update Data
    Route::post('/admin/supporttickets/manageticket/submit',[SupportticketController::class,'store']);//Form submit
    Route::get('/admin/supporttickets/delete/{id}',[SupportticketController::class,'destroy']);//Form Record Delete
    Route::post('/admin/supporttickets/list/search/',[SupportticketController::class,'search']);//search
    Route::post('/admin/supporttickets/category',[SupportticketController::class,'fetch']);//search
    Route::post('/admin/supporttickets/projectcust',[SupportticketController::class,'fetchcust']);
    Route::get('/admin/supporttickets/view/{id}',[SupportticketController::class,'viewticket']);
    Route::post('/admin/supporttickets/manageticket/status/submit',[SupportticketController::class,'ticketstatuschange']);
    Route::post('/admin/supporttickets/manageticket/assign/submit',[SupportticketController::class,'assigntickets']);
    Route::post('/admin/supporttickets/manageticket/ticketnotes/submit',[SupportticketController::class,'ticketnotes']);
    Route::post('/admin/supporttickets/manageticket/ticketreply/submit',[SupportticketController::class,'ticketreply']);
    Route::post('/admin/supporttickets/manageticket/finalstatus/submit',[SupportticketController::class,'finalstatus']);
    Route::get('/emailtest',[SupportticketController::class,'basic_email']);
    //Industrie Management
    Route::get('/admin/industry/list',[IndustrieController::class,'index']);//Show list of Industrie
    Route::get('/admin/industry/add',[IndustrieController::class,'create']);//Create Industrie
    Route::get('/admin/industry/update/{id}',[IndustrieController::class,'create']);//Update Industrie
    Route::post('/admin/industry/manageindustry/submit',[IndustrieController::class,'store']);//Form submit
    Route::get('/admin/industry/delete/{id}',[IndustrieController::class,'destroy']);//Form Record Delete
    Route::get('admin/industry/industry_attr_delete/{paid}/{pid}',[IndustrieController::class,'product_attr_delete']);//Industrie Attributes Delete
    Route::post('/admin/industry/list/search/',[IndustrieController::class,'search']);//Show list of Industrie
    //Blog Management
    Route::get('/admin/blog/list',[BlogController::class,'index']);//Show list of Blog
    Route::get('/admin/blog/add',[BlogController::class,'create']);//Create Blog
    Route::get('/admin/blog/update/{id}',[BlogController::class,'create']);//Update Blog
    Route::post('/admin/blog/manageblog/submit',[BlogController::class,'store']);//Form submit
    Route::get('/admin/blog/delete/{id}',[BlogController::class,'destroy']);//Form Record Delete
    Route::get('admin/blog/blog_attr_delete/{paid}/{pid}',[BlogController::class,'product_attr_delete']);//Blog Attributes Delete
    Route::post('/admin/blog/list/search/',[BlogController::class,'search']);//Show list of Blog
});
Route::get('/sitemap.xml',[FrontController::class,'sitemap']);
Route::get('/redirect',[UserController::class,'index']);
Route::get('/',[FrontController::class,'index']);
Route::get('/about-us',[FrontController::class,'aboutus']);
Route::get('/products',[FrontController::class,'products']);
Route::get('/products/tuno',[FrontController::class,'tuno']);
Route::get('/products/healthtech',[FrontController::class,'healthTech']);
Route::get('/products/fintech',[FrontController::class,'finTech']);
Route::get('/products/retail&e-commerce',[FrontController::class,'retailEcommerce']);
Route::get('/products/hrtech',[FrontController::class,'hrTech']);
Route::get('/products/{name}',[FrontController::class,'product']);
Route::get('/industries',[FrontController::class,'industries']);
Route::get('/industries/Financial-Services',[FrontController::class,'financialServices']);
Route::get('/industries/Healthcare',[FrontController::class,'healthCare']);
Route::get('/industries/{name}',[FrontController::class,'industriesdetails']);
Route::get('/services',[FrontController::class,'services']);
Route::get('/services/software-development',[FrontController::class,'softwareDevelopment']);
Route::get('/services/app-development',[FrontController::class,'appDevelopment']);
Route::get('/services/ai-ml-development',[FrontController::class,'aimlDevelopment']);
Route::get('/services/recruitment_staffing',[FrontController::class,'recruitmentStaffing']);
Route::get('/services/iot',[FrontController::class,'iot']);
Route::get('/services/cloud',[FrontController::class,'cloud']);
Route::get('/services/infrastructure-management',[FrontController::class,'infrastructureManagement']);
Route::get('/services/cyber-security',[FrontController::class,'cyberSecurity']);
Route::get('/services/data-center-solutions',[FrontController::class,'dataCenterSolutions']);
Route::get('/services/{name}',[FrontController::class,'servicesdetails']);
Route::get('/careers',[FrontController::class,'careers']);
Route::get('/careers/{name}/{id}',[FrontController::class,'careersdetails']);
Route::get('/careers/apply/{name}/{id}',[FrontController::class,'careersapply']);
Route::get('/contact-us',[FrontController::class,'contactus']);
Route::post('contactus/form/submit',[FrontController::class,'contactusformsubmit']);
Route::post('/jobapplication/submit',[FrontController::class,'jobappsubmitform']);
//Route::get('/logout',[UserController::class,'logout']);
Route::get('customers/login',[AuthController::class,'login']);//Show Login page to customer
Route::get('customers/register',[AuthController::class,'register']);//Show Registeration page to customer
Route::post('customers/post-login', [AuthController::class, 'postLogin']);
Route::get('customer/logout',[AuthController::class,'logout']);
Route::post('customers/post-registeration',[AuthController::class,'registerationsubmit']);
Route::post('/emailsubscriber',[SignupemailController::class,'index']);
Route::get('/web-cache', function() {
    $exitCode = Artisan::call('route:cache');
    $exitCode = Artisan::call('config:cache');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('view:clear');
    return 'Routes cache cleared';
});
Route::get('/blog',[FrontController::class,'blog']);
Route::get('/blog/{name}',[FrontController::class,'blogdetails']);
/* Route::middleware([restrictcust::class])->group(function(){

Route::get('customer/dashboard',[AuthController::class,'mydashboard']);

}); */
Route::group(["middleware"=>["restrictcust"]],function(){
    //Customer Auth
    Route::get('/customer/dashboard',[AuthController::class,'mydashboard']);
    Route::get('/customer/account',[AuthController::class,'accountsetting']);
    Route::post('/customer/account/submit',[AuthController::class,'accountsettingsubmit']);
    Route::get('customer/account/changepassword',[AuthController::class,'changepasssowrd']);
    Route::post('customer/account/changepassword/submit',[AuthController::class,'changepasswordsubmit']);
    //Create Support Ticket
    Route::get('/customer/createticket',[Supportticket::class,'create']);
    Route::post('/customer/supporttickets/category',[Supportticket::class,'fetch']);//search
    Route::get('/customer/supporttickets/showalltikcets',[Supportticket::class,'showalltikcets']);//Ticket List
    Route::post('/customer/supporttickets/manageticket/submit',[Supportticket::class,'store']);
    Route::get('/customer/supporttickets/view/{id}',[Supportticket::class,'viewticket']);
    Route::post('/customer/supporttickets/ticketreply/submit',[Supportticket::class,'ticketreply']);
});

