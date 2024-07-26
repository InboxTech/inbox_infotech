<?php

namespace App\Exports;

use App\Models\Cms;
use Maatwebsite\Excel\Concerns\FromCollection;
use DB;
class ExportJobapplication implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
       return DB::table('jobapplications')
            ->Join('carrers', 'jobapplications.job_post_id', '=', 'carrers.id')
            ->select('carrers.position','jobapplications.*')
            ->get();    
        }
    

}
