<?php
namespace App\Http\Controllers;  
  
use App\Http\Requests;  
use Illuminate\Http\Request;  
use DB;  
use PDF;  
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
  
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
    public function excel()
    {
        
            return Excel::download(new UsersExport, 'users.xlsx');
        
    }
}  