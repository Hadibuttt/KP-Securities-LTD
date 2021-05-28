<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\financial_statements;
use Redirect;
use Validator;

class ReportController extends Controller
{
    public function financial_report()
    {
        return view('upload');
    }

    public function financial_statement()
    {
      $financial_reports = financial_statements::orderBy('id', 'desc')->get();
      return view('download', compact('financial_reports'));
    }

    public function financial_fetch($name)
    {
      return Storage::download('financial-reports/'.$name.'/'.$name.'');
    }

    public function financial_upload(Request $req)
    {       
            $data = $req->all();  
            $rule = array(
                'report'=>'required|mimes:xlsx,docx,pdf',
             );
     
            $validator = Validator::make($data,$rule);
     
         if ($validator->fails())
         {
             return Redirect::back()->withErrors($validator->errors());
         }

        else
        {
          $uploadedFile = $req->file('report');
          $filename = time().$uploadedFile->getClientOriginalName();
    
          Storage::disk('local')->putFileAs(
            'financial-reports/'.$filename,
            $uploadedFile,
            $filename
          );
    
          $financial_statements = new financial_statements;
          $financial_statements->year = $req->year;
          $financial_statements->name = $req->name;
          $financial_statements->report = $filename;
    
          $financial_statements->save();
          return redirect('/');
        }
          
    }

}
