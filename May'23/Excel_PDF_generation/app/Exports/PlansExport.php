<?php

namespace App\Exports;

use App\plans;
use App\learners;
use Maatwebsite\Excel\Concerns\FromCollection;

class PlansExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        
        $planname = request()->planname;
        return learners::select('learners.*')->leftJoin('plans', 'learners.plan_id', '=', 'plans.plan_id')->where('planname',$planname)->get();

    }
}
