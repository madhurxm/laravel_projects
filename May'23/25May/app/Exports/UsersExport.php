<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\Models\EmpDetails;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;
use Session;

class UsersExport implements FromCollection, WithHeadings, WithCustomStartCell
{
    /**
     * @return \Illuminate\Support\Collection
     */

    public function collection()
    {
        $c =  new EmpDetails;

        $col = session('col');
        $data = session('data');
        // dd($col);

        return $c->select(['name', 'email', 'empcode', 'dept', 'salary', 'gender', 'address'])->where($col, $data)->get();
    }
    public function headings(): array
    {
        return [
            'name',
            'email',
            'empcode',
            'dept',
            'salary',
            'gender',
            'address',

        ];
    }
    public function startCell(): string
    {
        return 'A2';
    }
}
