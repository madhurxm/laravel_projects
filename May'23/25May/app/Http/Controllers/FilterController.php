<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmpDetails;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport;
use PDF;
// use Barryvdh\DomPDF\PDF;

class FilterController extends Controller
{
    //
    public function view_records()
    {
        $emp = new EmpDetails;

        if (session('select') == 'empcode') {
            // if (session('empcode') == 'all') {
            //     $all_employees = $emp->get();
            //     return view('download_reports')->with(compact('all_employees'));
            // } else {
            $empcode = session('empcode');
            $all_employees = $emp->where('empcode', $empcode)->paginate(10);
            $select_empcodes = $emp->select('empcode')->get();
            $select_depts = $emp->select('dept')->groupBy('dept')->get();
            // session()->forget('empcode');
            // session()->forget('select');

            return view('download_reports')->with(compact('select_empcodes', 'select_depts', 'all_employees'));
            // }
        } else if (session('select') == 'gender') {
            $gender = session('gender');
            $all_employees = $emp->where('gender', $gender)->paginate(10);
            $select_empcodes = $emp->select('empcode')->get();
            $select_depts = $emp->select('dept')->groupBy('dept')->get();

            // session()->forget('gender');
            // session()->forget('select');
            return view('download_reports')->with(compact('select_empcodes', 'select_depts', 'all_employees'));
        } else if (session('select') == 'dept') {
            $dept = session('dept');
            $all_employees = $emp->where('dept', $dept)->paginate(10);
            $select_empcodes = $emp->select('empcode')->get();
            $select_depts = $emp->select('dept')->groupBy('dept')->get();
            // session()->forget('dept');
            // session()->forget('select');
            return view('download_reports')->with(compact('select_empcodes', 'select_depts', 'all_employees'));
        } else {

            $select_empcodes = $emp->select('empcode')->get();
            $select_depts = $emp->select('dept')->groupBy('dept')->get();
            $all_employees = $emp->paginate(10);
            return view('download_reports')->with(compact('select_empcodes', 'select_depts', 'all_employees'));
        }
    }
    public function get_select_value(Request $req)
    {
        if ($req->empcode != "nothing" && $req->has('search')) {
            session(['select' => 'empcode', 'empcode' => $req->empcode, 'view-select' => 'empcode', 'view-empcode' => $req->empcode]);
            return redirect()->route('get_records');
        } else if ($req->gender != "nothing" && $req->has('search')) {
            session(['select' => 'gender', 'gender' => $req->gender, 'view-select' => 'gender', 'view-gender' => $req->gender]);
            return redirect()->route('get_records');
        } else if ($req->dept != "nothing" && $req->has('search')) {
            session(['select' => 'dept', 'dept' => $req->dept, 'view-select' => 'dept', 'view-dept' => $req->dept]);
            return redirect()->route('get_records');
        } else if ($req->dept != "nothing" && $req->has('excel')) {
            session(['col' => 'dept', 'data' => $req->dept]);
            return Excel::download(new UsersExport, 'users.xlsx');
        } else if ($req->gender != "nothing" && $req->has('excel')) {
            session(['col' => 'gender', 'data' => $req->gender]);
            return Excel::download(new UsersExport, 'users.xlsx');
        } else if ($req->empcode != "nothing" && $req->has('excel')) {
            session(['col' => 'empcode', 'data' => $req->empcode]);
            return Excel::download(new UsersExport, 'users.xlsx');
            // } else if ($req->empcode != "nothing" && $req->has('pdf')) {
            //     session(['col' => 'empcode', 'data' => $req->empcode]);
            //     $pdf = PDF::loadView('pdf   ', $data);
            //     return Excel::download(new UsersExport, 'users.xlsx');
        } else if ($req->has('pdf')) {
            $emp = new EmpDetails;
            
            if (session('select') == 'empcode') {
                $empcode = session('empcode');
                $all_employees = $emp->where('empcode', $empcode)->get();
                session()->forget('empcode');
                session()->forget('select');
                $data = compact('all_employees');
                $pdf = PDF::loadView('pdf', $data);

                return $pdf->download('records.pdf');
                // }
            } else if (session('select') == 'gender') {
                $gender = session('gender');
                $all_employees = $emp->where('gender', $gender)->get();

                session()->forget('gender');
                session()->forget('select');
                $data = compact('all_employees');
                $pdf = PDF::loadView('pdf', $data);

                return $pdf->download('records.pdf');
            } else if (session('select') == 'dept') {
                $dept = session('dept');
                $all_employees = $emp->where('dept', $dept)->get();

                session()->forget('dept');
                session()->forget('select');
                $data = compact('all_employees');
                $pdf = PDF::loadView('pdf', $data);

                return $pdf->download('records.pdf');
            } else {

                
                $all_employees = $emp->get();
                $data = compact( 'all_employees');
                $pdf = PDF::loadView('pdf', $data);

                return $pdf->download('records.pdf');
            }
        } else {

            return redirect()->route('get_records');
        }
    }
    public function reset()
    {
        // session()->forget(['view-select', 'status']);

        return redirect()->route('get_records');
    }
    // public function pdf(){
    //     $emp = new EmpDetails;

    //     if (session('select') == 'empcode') {
    //         $empcode = session('empcode');
    //         $all_employees = $emp->where('empcode', $empcode)->get();
    //         session()->forget('empcode');
    //         session()->forget('select');
    //         $data = compact( 'all_employees');
    //         $pdf = PDF::loadView('pdf', $data);

    //         return $pdf->download('records.pdf');
    //         // }
    //     } else if (session('select') == 'gender') {
    //         $gender = session('gender');
    //         $all_employees = $emp->where('gender', $gender)->get();

    //         session()->forget('gender');
    //         session()->forget('select');
    //         $data = compact('all_employees');
    //         $pdf = PDF::loadView('pdf', $data);

    //         return $pdf->download('records.pdf');
    //     } else if (session('select') == 'dept') {
    //         $dept = session('dept');
    //         $all_employees = $emp->where('dept', $dept)->get();

    //         session()->forget('dept');
    //         session()->forget('select');
    //         $data = compact( 'all_employees');
    //         $pdf = PDF::loadView('pdf', $data);

    //         return $pdf->download('records.pdf');
    //     } else {

    //         $select_empcodes = $emp->select('empcode')->get();
    //         $select_depts = $emp->select('dept')->groupBy('dept')->get();
    //         $all_employees = $emp->paginate(10);
    //         $data = compact('select_empcodes', 'select_depts', 'all_employees');
    //         $pdf = PDF::loadView('pdf', $data);

    //         return $pdf->download('records.pdf');
    //     }
    // }
}
