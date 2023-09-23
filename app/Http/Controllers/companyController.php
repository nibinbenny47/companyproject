<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\company;
use DB;
class companyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('company/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'website'=>'required',
            
        ]);
  
        $getname=request('name');
        $getemail=request('email');
        $getwebsite=request('website');
      
  
        $company=new company();
        $company->name=$getname;
        $company->email=$getemail;
        $company->website=$getwebsite;

        $company->save();
        return view('company/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(company $company)
    {
        //
        $company=company::all();
        return view('company/index',compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $company=company::find($id);
        return view('company/edit',compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $updating=DB::table('companies')->where('id',$request->input('id'))->update([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'website'=>$request->input('website'),

        ]);
        return redirect('/displayCompanies');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function delete($id)
    {
        $company=company::find($id);
        return view('company/delete',compact('company'));
    }
    public function destroy($id)
    {
        //
        $company=company::find($id);
        $company->delete();
        return redirect('/displayCompanies');
    }
   
}
