<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\financial_statements;
use App\Models\net_capital_balance;
use Redirect;
use Validator;
use Auth;

class ReportController extends Controller
{
    public function financial_report()
    {
        return view('financial-report');
    }

    public function net_capital_report()
    {
        return view('net-capital-report');
    }
    
    public function financial_statement()
    {
      $financial_reports = financial_statements::orderBy('id', 'desc')->get();
      return view('financial-statement', compact('financial_reports'));
    }

    public function financial_fetch($name)
    {
      return Storage::download('financial-reports/'.$name.'/'.$name.'');
    }

    public function capital_fetch($name)
    {
      return Storage::download('net-capital-reports/'.$name.'/'.$name.'');
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
          return redirect('/financial-report');
        }
          
    }

    public function net_capital_balance()
    {
      $reports = net_capital_balance::orderBy('id', 'desc')->get();
      return view('net-capital-balance', compact('reports'));
    }

    public function net_capital_upload(Request $req)
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
            'net-capital-reports/'.$filename,
            $uploadedFile,
            $filename
          );
    
          $net_capital = new net_capital_balance;
          $net_capital->year = $req->year;
          $net_capital->name = $req->name;
          $net_capital->report = $filename;
    
          $net_capital->save();
          return redirect('/financial-report');
        }
          
    }
    
    public function logout()
    {
      Auth::logout();
      return redirect(route('login'));
    }



  }
