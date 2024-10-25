<?php

namespace App\Exports;

//use App\Models\Cms;
use App\Models\Carrer;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportJobs implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Carrer::all();
    }
   

}
