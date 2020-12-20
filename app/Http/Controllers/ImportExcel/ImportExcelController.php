<?php

namespace App\Http\Controllers\ImportExcel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Imports\ImportContacts;
use Maatwebsite\Excel\Facades\Excel;
use DB;
use App\Contact;


class ImportExcelController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('import_excel.index',compact('contacts'));
    }
   
    public function import(Request $request)
    {
        $request->validate([
            'import_file' => 'required'
        ]);

        $file = $request->file("import_file");

       //Display File Extension
        $file->getClientOriginalExtension();
       
        if($file->getClientOriginalExtension() == 'csv')
        {
            Excel::import(new ImportContacts, request()->file('import_file'));
            return back()->with('success', 'file imported successfully.');
        }
        else {
            return back()->with('error', 'invalid file');
        }
    }

   
  
}
