<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employee;
use App\Models\company;
use DB;

class employeeController extends Controller
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
        $company=company::all();
        return view('employees/create',compact('company'));

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
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required|email|unique:App\Models\employee,email',
            'phone'=>'required|digits:10|unique:App\Models\employee,phone',
            'company_id'=>'required',
            
        ]);
  
        $getfirstname=request('firstname');
        $getlastname=request('lastname');
        $getemail=request('email');
        $getphone=request('phone');
        $getcompany_id=request('company_id');
      
  
        $employee=new employee();
        $employee->firstname=$getfirstname;
        $employee->lastname=$getlastname;
        $employee->email=$getemail;
        $employee->phone=$getphone;
        $employee->company_id=$getcompany_id;

        $employee->save();
        return view('company/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(employee $employee)
    {
        //
        $employee=employee::all();
        return view('employees/index',compact('employee'));
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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
