<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\User;
use App\Models\Worker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Worker=Reservation::join('workers','workers.id', '=', 'reservations.worker_id')
        ->join('users','users.id', '=', 'reservations.user_id')
        ->where('user_id','=',[Auth::user()->id])
        ->select('workers.id','workers.name','workers.age','workers.country','workers.language','workers.Social_status','workers.Experience','workers.religon','reservations.status')
        ->get();

        return view('User.Reservation',compact('Worker'));
        
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $MyOffice=Worker::where('id','=',$request->Worker_id)
        ->select("office_id")->first();
        $User=User::where('id','=',[Auth::user()->id])
        ->select("id")->first();
        Reservation::create([
            'user_id'=>$User->id,
            'office_id'=>$MyOffice->office_id,
            'worker_id'=>$request->Worker_id,
            'status'=>'On request',
        ]);
        
        Worker::where('id',$request->Worker_id)
        ->update([
        'Available' =>'On request',
        ]);
        return redirect()->back()->withErrors(['Your reservation request has been sent.']);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservation  $Reservation
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $Worker=Reservation::join('workers','workers.id', '=', 'reservations.worker_id')
        ->where('Available','=','On request')
        ->select('workers.id','workers.name','workers.age','workers.country','workers.language','workers.Social_status','workers.Experience','workers.religon','workers.Available')
        ->get();

        return view('Employee.Reservation',compact('Worker'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservation  $Reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $Reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservation  $Reservation
     * @return \Illuminate\Http\Response
     */
    public function accept(Request $request, Reservation $Reservation)
    {
        Reservation::where('worker_id',$request->Worker_id)
        ->update([
        'status' =>'accept',
        ]);
        Worker::where('id',$request->Worker_id)
        ->update([
        'Available' =>'NotAvailable',
        ]);
        return redirect()->back()->withErrors(['Your reservation request has been sent.']);
        
    }

    public function reject(Request $request, Reservation $Reservation)
    {
        Reservation::where('worker_id',$request->Worker_id)
        ->update([
        'status' =>'reject',
        ]);
        Worker::where('id',$request->Worker_id)
        ->update([
        'Available' =>'Available',
        ]);
        return redirect()->back()->withErrors(['Your reservation request has been sent.']);
        
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservation  $Reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $Reservation)
    {
        //
    }
}
