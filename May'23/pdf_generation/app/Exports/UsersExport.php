<?php

namespace App\Exports;

use App\User;


use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class UsersExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return collect([
            [
                'name' => 'Povilas',
                'email' => 'povilas@laraveldaily.com'
            ],
            [
                'name' => 'Taylor',
                'email' => 'taylor@laravel.com'
            ]
        ]);
    }
    public function headings(): array
    {
        return [
            'Name',
            'Email'
        ];
    }
}
