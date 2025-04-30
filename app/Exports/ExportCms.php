<?php

namespace App\Exports;

use App\Models\Cms;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportCms implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Cms::all();
    }
    /* public function model(array $row)
    {
        return new Cms([
            'Id' => $row[0],
            'Page Name' => $row[1],
            'title' => $row[2],
            'Short Details' => $row[3],
            'Long Details' => $row[4],
            'Nav Title' => $row[6],
            'Nav Description' => $row[7],
            'Created by' => $row[9],
            'Updatedby' => $row[10],
            'Created at' => $row[11],
            'Updated at' => $row[11],
            'Status' => $row[12],

        ]);
    } */

}
