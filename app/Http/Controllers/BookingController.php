<?php

namespace App\Http\Controllers;

use App\Models\Transfer;
use App\Models\Category;
use App\Models\image;
use App\Models\Location;
use App\Models\Setting;
use Illuminate\Http\Request;;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliderdata=image::limit(3)->get();
        $transferdata=Transfer::limit(6)->get();
        $categorydata=Category::limit(5)->get();
        $locationdata=Location::limit(5)->get();
        $settingdata=Setting::limit(5)->get();
        $categorydata=Category::limit(5)->get();
        $data = Setting::first()->contact;
        $imagedata=image::limit(10)->get();
        $sosyaldata=Setting::limit(5)->get();
        
        return view('home.booking',['linkhome'=>5,
        'sliderdata'=>$sliderdata,
        'transferdata'=>$transferdata,
        'categorydata'=>$categorydata,
        'locationdata'=>$locationdata,
        'imagedata'=>$imagedata,
        'sosyaldata'=>$sosyaldata,

    ]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking, $id)
    {
        $sliderdata=image::limit(3)->get();
        $transferdata=Transfer::limit(6)->get();
        $categorydata=Category::limit(7)->get();
        $locationdata=Location::limit(5)->get();
        $imagedata=image::limit(10)->get();
        $sosyaldata=Setting::limit(5)->get();
        $bookingshow=Transfer::find($id);

        $data=Category::all();
        return view('home.booking.show', ['linkhome'=>1,
            'data'=>$data,
            'sliderdata'=>$sliderdata,
            'transferdata'=>$transferdata,
            'categorydata'=>$categorydata,
            'locationdata'=>$locationdata,
            'imagedata'=>$imagedata,
            'sosyaldata'=>$sosyaldata,

    ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        //
    }
}
