<?php

namespace App\Exports;

use App\custs;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;

class UsersExportss implements FromCollection, WithHeadings, WithCustomStartCell
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        $c =  new Custs;


        return $c->get(['first_name','last_name','gender','plan_id','country','username','password']);
    }
    public function headings() :array
    {
        return [
            'first name', 
            'last name', 
            'gender', 
            'plan id', 
            'country', 
            'username', 
            'password',
             
        ];
    }
    public function startCell(): string
    {
        return 'A1';
    }
}
