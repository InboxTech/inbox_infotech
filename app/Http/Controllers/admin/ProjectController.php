<?php
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProjectController extends Controller
{
     public function index()
    {
       /*  return "shyam";
        die; */
       $arr['data'] =  Project::paginate(10);
       //return $arr;die;
       return view('admin.projectlist',$arr);
    }
    public function create(Request $r,$id='')
    {
        if($id !='')
        {
            $arr = Project::findorFail($id);
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
        return view('admin.manageproject',$arr);
    }

        public function store(Request $request)
    {
       /*  print_r($request->post());
        die; */
         
        $request->validate([
            'name'=>'required|unique:projects,name,'.$request->post('id'),            
        ]);

        if($request->post('id')>0){
            $model=Project::find($request->post('id'));
            $message = "Record Updated successfully!";
            $model['updated_at'] = Carbon::now()->toDateTimeString();
            $model['status'] = $request->status;
        }else{
            $model=new Project();
           // $message="Product inserted";
            $message = "Record Add successfully!";
            $model['status'] = '1';
        }
        $model->name=$request->post('name');
        $model->save();

        return redirect('/admin/projects/list')->with('success',$message);
		
    }
        public function destroy(Request $request,$id)
    {
        $arr = Project::find($id);
        if($arr != ''){
            $arr->delete();
            $message = "Record Deleted successfully!";
        }else{
            $message = "Record Not found";
        }
        return redirect('/admin/projects/list')->with('success',$message);        
    }
   
    public function search(Request $request)
    {
        $find = $request->search;
            $query=DB::table('projects');
           /*  $query = DB::table('sub__category__tickets')
            ->join('category__tickets', 'category__tickets.id', '=', 'sub__category__tickets.category_id')
            ->select('sub__category__tickets.*', 'category__tickets.name as maincategory'); */
            $query=$query->where('name','like',"%$find%")->WhereNull('deleted_at');
            $query=$query->paginate(10);
            $arr['data']=$query;
            
            
        //return $result;die;
        return view('admin.projectlist',$arr);
    }
}
