<?php

namespace App\Http\Controllers;

use App\Models\Worker;
use App\Http\Requests\StoreWorkerRequest;
use App\Http\Requests\UpdateWorkerRequest;
use App\Models\Employee;
use Illuminate\Support\Facades\Auth;

class WorkerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function View()
    {
        $MyOffice=Employee::where('user_id','=',[Auth::user()->id])
        ->select("office_id")->first();

        $Worker=Worker::where('office_id','=',$MyOffice->office_id)->get();
        return view('Employee.ViewWorker',compact('Worker'));
    }

    public function index()
    {
        return view('Employee.AddWorker');
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
     * @param  \App\Http\Requests\StoreWorkerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWorkerRequest $request)
    {
        $MyOffice=Employee::where('user_id','=',[Auth::user()->id])
        ->select("office_id")->first();

        // save Image in database and storge Image
        $IMG_File=$request->file('worker_photo_path');
        $IMG_filename=time().'.'.$IMG_File->getClientOriginalExtension();
        $IMG_File->storeAs('public/worker_photo',$IMG_filename);

        Worker::create([
            'office_id'=> $MyOffice->office_id,
            'name' => $request->name,
            'age' => $request->age,
            'country' => $request->country,
            'language' => $request->language,
            'Social_status' => $request->Social_status,
            'Experience' => $request->Experience,
            'religon' => $request->religon ,
            'worker_photo_path' =>$IMG_filename ,
            'Available' => "Available", 
        ]);
            // $Worker=new Worker();
            // $Worker->office_id= $MyOffice->office_id;
            // $Worker->name = $request->name;
            // $Worker->age = $request->age;
            // $Worker->country = $request->country;
            // $Worker->language = $request->language;
            // $Worker->Social_status = $request->Social_status;
            // $Worker->Experience = $request->Experience;
            // $Worker->religon = $request->religon ;
            // $Worker->worker_photo_path =$IMG_filename ;
            // $Worker->Available = "Available";
            // $Worker->save();
        

        return redirect()->back()->withErrors(['Worker has been added successfully.']);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function show(Worker $worker)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function edit(Worker $worker)
    {
        $MyOffice=Employee::where('user_id','=',[Auth::user()->id])
        ->select("office_id")->first();

        $Worker=Worker::where('office_id','=',$MyOffice->office_id)->get();
        return view('Employee.EditWorker',compact('Worker'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWorkerRequest  $request
     * @param  \App\Models\Worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWorkerRequest $request, Worker $worker)
    {
        if($request->file('worker_photo_path')==true)
        {
            // save Image in database and storge Image
        $IMG_File=$request->file('worker_photo_path');
        $IMG_filename=time().'.'.$IMG_File->getClientOriginalExtension();
        $IMG_File->storeAs('public/worker_photo',$IMG_filename);
        Worker::where('id',$request->id)
        ->update([
        'worker_photo_path' =>$IMG_filename ,
        ]);
        }
        
        Worker::where('id',$request->id)
        ->update([
        'name' => $request->name,
        'age' => $request->age,
        'country' => $request->country,
        'language' => $request->language,
        'Social_status' => $request->Social_status,
        'Experience' => $request->Experience,
        'religon' => $request->religon ,
        'Available' => $request->Available,
        ]);

        return redirect()->back()->withErrors(['Worker Updated.']);
    }

    public function DeleteWorker(UpdateWorkerRequest $request, Worker $worker)
    {
        Worker::find($request->id)->delete();
        return redirect()->back()->withErrors(['Worker Deleted.']);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function destroy(Worker $worker)
    {
        //
    }
}
