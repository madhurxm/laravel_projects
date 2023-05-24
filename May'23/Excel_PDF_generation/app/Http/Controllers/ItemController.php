<?php
namespace App\Http\Controllers;  
  
use App\Http\Requests;  
use Illuminate\Http\Request;  
use DB;  
use PDF;
use App\Imports\UsersImport;
use App\Exports\UsersExportss;
use Maatwebsite\Excel\Facades\Excel;
use App\custs;
  
class ItemController extends Controller  
{  
  
    
    public function pdfview(Request $request)  
    {  
        
        view()->share(['name'=>'SHubham', 'email'=>'amsa.cc']);  
  
        if($request->has('download')){  
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

        $records = new custs;
        $records = $records->get();
        return view('import_excel')->with(compact('records'));
        
    }
    public function get_excel_import()
    {
        $records = new custs;
        $records = $records->get();
        return view('import_excel')->with(compact('records'));
    }
}  