<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;

use App\bSchedule;

use App\bDetails;

class b_scheduleController extends Controller
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
       
     return view('b_schedule.createSched')->with('buses', bDetails::where('company_id', \Auth::user()->company_id )->pluck('bus_no_plate' , 'bus_id'));
        }

    /**
     * Store a newly created resource in storage.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this -> validate($request, array
            (
            //validate the data
            'bus_id' => 'required|string|max:255',
            'county_of_departure' => 'required | string | max:255 ',
            'county_of_arrival' => 'required | string | max:255 ',
            'date_of_travel' => 'required | date | after_or_equal:date() | max:255 ',
            'time_of_arrival' => 'required | string | max:255 ',


            ));

        //store the data

            $bschedule = new bSchedule;

            //$busid= bDetails::where('bus_no_plate', $request->bus_id)->pluck('bus_id');

            $bschedule->bus_id = $request->bus_id;
            $bschedule->county_of_departure = $request->county_of_departure;
            $bschedule->county_of_arrival =  $request->county_of_arrival;
            $bschedule->date_of_travel = $request->date_of_travel;
            $bschedule->time_of_arrival = $request->time_of_arrival;


            $bschedule->save();

        //redirect to view entered bus details

            return redirect()->route('b_schedule.show' , $bschedule->schedule_id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        //the find method used below is used to find records SPECIFICALLY by their primary ids
        $schedule = bSchedule::find($id);

       return view('b_schedule.show')->with('schedule', $schedule)

                                    ->with('bus_no_plate',bDetails::where('bus_id', $schedule->bus_id )->pluck('bus_no_plate' ));
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
