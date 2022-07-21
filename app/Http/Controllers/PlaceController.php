<?php

namespace App\Http\Controllers;

use App\Places;
use App\Slots;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $places = Places::all();

        foreach ($places as $place){
            $slots = Slots::all()->where('place_id', '=', $place->id);
            $count = 0;
            foreach ($slots as $slot){
                if($slot->user_id == NULL)
                    $count++;
            }
            $place->avai_slot = $count;
        }

        $active = "Place";
        return view('place.index',compact('active','places'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::user()->id == 1){
            $active = "Place";
            return view('place.create',compact('active'));
        }else{
            return redirect()->route('place.index');
        }
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
            'Place_name' => 'required',
            'location' => 'required',
            'total_slot' => 'required|min:1|max:10000'
        ]);

        $place = Places::create($data);

        $i = 1;

        for ($j=0 ; $j<$data['total_slot'] ; $j++) {
            $slot['slot_name'] = $place->id.'slot'.$i;
            $i = $i+1;

            $park = new Slots;
            $park->slot_name = $slot['slot_name'];
            $park->place_id = $place->id;
            $park->save();
        }

        return redirect()->route('place.index');
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
