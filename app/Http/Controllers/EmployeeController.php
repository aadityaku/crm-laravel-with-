<?php

namespace App\Http\Controllers;

use App\Models\Companie;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['employee']=Employee::all();
        return view("homepages/manageEmployee",$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['companie']=Companie::all();
        return view("homepages/insertEmployee",$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'companie_id'=>'required',
            'email'=>'required',
            'phone'=>'required',
        ]);
        $data=new Employee();
        $data->first_name=$request->first_name;
        $data->last_name=$request->last_name;
        $data->companie_id=$request->companie_id;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->save();
        return redirect()->route("employee.index");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        $data['employee']=$employee;
        return view("homepages/viewEmployee",$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        $data['employee']=$employee;
        $data['companie']=Companie::all();
        return view("homepages/editEmployee",$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'companie_id'=>'required',
            'email'=>'required',
            'phone'=>'required',
        ]);
        
        $employee->first_name=$request->first_name;
        $employee->last_name=$request->last_name;
        $employee->companie_id=$request->companie_id;
        $employee->email=$request->email;
        $employee->phone=$request->phone;
        $employee->save();
        return redirect()->route("employee.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->back();
    }
}
