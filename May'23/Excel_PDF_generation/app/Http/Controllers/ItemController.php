<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
use PDF;
use App\Imports\UsersImport;
use App\Exports\UsersExportss;
use Maatwebsite\Excel\Facades\Excel;
use App\learners;
use App\plans;
use App\Exports\PlansExport;

class ItemController extends Controller
{


    public function pdfview(Request $request)
    {

        view()->share(['name' => 'SHubham', 'email' => 'amsa.cc']);

        if ($request->has('download')) {
            $pdf = PDF::loadView('pdfview');
            return $pdf->download('pdfview.pdf');
        }

        return view('download');
    }
    public function excel_export()
    {

        return Excel::download(new UsersExportss, 'users.xlsx');
    }
    public function excel_import(Request $req)
    {
        // dd($req->file('file'));

        Excel::import(new UsersImport, $req->file);

        $records = new learners;
        $records = $records->get();
        return view('import_excel')->with(compact('records'));
    }
    public function get_excel_import()
    {
        $records = new learners;
        $records = $records->get();
        return view('import_excel')->with(compact('records'));
    }

    public function post_plan_excel()
    {
        $plans_records = new plans;
        $plansrecords = $plans_records->select('plan_id', 'planname')->get();
        return view('excel_select')->with(compact('records'));
    }
    public function get_plan_excel(Request $req)
    {
        if ($req->has('get_excel')) {
            
            return Excel::download(new PlansExport, 'plan_wise_users.xlsx');

           
        } else {
            $all_plans = new plans();
            $all_plans = $all_plans->select('planname')->distinct()->get();
            return view('excel_select')->with(compact('all_plans'));
        }
    }
}
