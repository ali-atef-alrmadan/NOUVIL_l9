<?php

namespace App\Http\Controllers;

use App\Models\Office;
use App\Http\Requests\StoreOfficeRequest;
use App\Http\Requests\UpdateOfficeRequest;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Employee=Employee::join('offices','offices.id', '=', 'employees.office_id')
        ->join('users','users.id', '=', 'employees.user_id')
        ->where('admin_id','=',[Auth::user()->id])
        ->select('employees.id','users.name','users.email','users.Phone','employees.salary')
        ->get();

        return view('OfficeAdmin.AddEmployee',compact('Employee'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOfficeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOfficeRequest $request)
    {
        $MyOffice=Office::where('admin_id','=',[Auth::user()->id])
        ->select("id")->first();
        $User=User::where('email','=',$request->email)
        ->select("id")->first();
        Employee::create([
            'office_id'=> $MyOffice->id,
            'user_id'=>$User->id,
            'salary'=>$request->salary,
        ]);
        DB::update('update role_user set role_id = ? where user_id = ?', ['2',$User->id]);

        return redirect()->back()->withErrors(['Employee has been added successfully.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Office  $office
     * @return \Illuminate\Http\Response
     */
    public function show(Office $office)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Office  $office
     * @return \Illuminate\Http\Response
     */
    public function edit(Office $office)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOfficeRequest  $request
     * @param  \App\Models\Office  $office
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOfficeRequest $request, Office $office)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Office  $office
     * @return \Illuminate\Http\Response
     */
    public function destroy(Office $office)
    {
        //
    }
}
