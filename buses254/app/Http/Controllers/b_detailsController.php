<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\bDetails;
use \Auth;


class b_detailsController extends Controller
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
        return view('b_details.create');
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
            'bus_no_plate' => 'required|string|max:255|unique:bus_details,bus_no_plate',
            'no_of_seats' => 'required | integer ',


            ));

        //store the data

            $bdetails = new bDetails;

            $bdetails->bus_no_plate = $request->bus_no_plate;
            $bdetails->company_id =  Auth::user()->company_id;
            $bdetails->no_of_seats = $request->no_of_seats;

            $bdetails->save();

        //redirect to view entered bus details

            return redirect()->route('b_details.show' , $bdetails->bus_id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
