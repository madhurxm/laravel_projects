<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use App\custs;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithValidation;


class UsersImport implements ToCollection, WithHeadingRow, WithValidation
{
    // public function model(array $row)
    // {
    //    dd($row);
       
    //     return new custs([
    //         'first_name' => $row[0],
    //         'last_name' => $row[1],
    //         'gender' => $row[2],
    //         'plan_id' => $row[3],
    //         'country' => $row[4],
    //         'username' => $row[5],
    //         'password' => $row[6],
            

    //     ]);
        
    // }

    public function collection(Collection $rows)
    {
        // dd($rows);
        foreach ($rows as $row) {
            custs::create([
                'first_name' => $row['first_name'],
                'last_name' => $row['last_name'],
                'gender' => $row['gender'],
                'plan_id'=>$row['plan_id'],
                'country' => $row['country'],
                'username' => $row['username'],
                'password' => $row['password'],

            ]);
        }
    }
    
    public function uniqueBy()
    {
        return 'email';
    }
    public function rules(): array{
        return [
            'first_name'   => 'required',           
            'plan_id'   => 'required',
            'username'   => 'required',           
            'password'   => 'required',
            'last_name'   => 'required',
            'gender'   => 'required',           
            'country'   => 'required',
            
        ];
    }

    // public function model(array $row)
    //     {
    //         return new User([
    //            'first_name' => $row[0],
    //            'last_name' => $row[1],
    //            'gender'     => $row[2],
    //            'country'     => $row[3],
    //            'email'    => $row[4], 
    //            'password' => Hash::make($row[5]),
    //         ]);
    //     }   
    
}

