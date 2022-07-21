<?php

namespace App\Http\Controllers;

use App\Parking;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicle = Parking::all()->where('user_id','=',Auth::user()->id);
        $active = "Vehicle";
        return view('vehicle.index',compact('active','vehicle'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $active = "Vehicle";
        return view('vehicle.create',compact('active'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'car_no' => 'required',
            'vehicle_type' => 'required',
            'title' => 'required',
        ]);
        $id = Auth::user()->id;
        $user = \App\User::find($id);

        $data['user_id'] = "$user->id";

        $park = new Parking();
        $park->car_no = $data['car_no'];
        $park->vehicle_type = $data['vehicle_type'];
        $park->user_id = $data['user_id'];
        $park->title = $data['title'];
        $park->save();

        return redirect()->route('vehicle.index');
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
        Parking::destroy($id);

        return redirect()->route('vehicle.index');
    }
}
