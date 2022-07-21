<?php

namespace App\Http\Controllers;

use App\Parking;
use App\Places;
use App\Slots;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ParkingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $active = 'Parking';
        if(Auth::user()->id == 1){
            $slots = Slots::all()->where('user_id','!=',NULL);
        }
        else{
            $slots = Slots::all()->where('user_id','=',Auth::user()->id);
        }

        foreach ($slots as $slot){
            $slot['place_id'] = Places::find($slot['place_id']);
            $user = \App\User::find($slot['user_id']);
            $slot['user_id'] = $user;
        }

        return view('park.index',compact('active','slots'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $active = 'Parking';
        $place = Places::all();
        $vehicle = Parking::all()->where('user_id','=',Auth::user()->id);

        return view('park.create',compact('active','place','vehicle'));
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
            'place_id' => 'required',
            'vehicle_id' => 'required',
        ]);
        $j=0;

        $slots = Slots::all()->where('place_id' , '=' , $data['place_id']);
        foreach ($slots as $slot){
            if($slot['user_id']==NULL){
                $slot = Slots::find($slot['id']);
                $slot->vehicle_id = (string)$data['vehicle_id'];
                $slot->user_id = (string)Auth::user()->id;
                $slot->save();

                $j=1;
                break;
            }
        }

        if($j==1){
            echo '<script>alert("No slots available")</script>';
            return redirect()->route('park.index');
        }
        else {
            return redirect()->route('park.index');
        }
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
        $slot = Slots::find($id);
        $slot->vehicle_id = NULL;
        $slot->user_id = NULL;
        $slot->save();

        return redirect()->route('park.index');
    }
}
