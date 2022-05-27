<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Parent_;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin_location()
    {
        $locations=Location::all();
        return view("admin.location.index",[
            'link'=>5,
            'locations'=>$locations
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin_location_create()
    { 
        return view("admin.location.create", ['link'=>5]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function admin_location_store(Request $request)
    {
        $data= new Location;
        $data->id= $request->id;
        $data->type= $request->type;
        $data->name= $request->name;

        $data->lat=$request->lat;
        $data->long=$request->long;
        $data->status=$request->status;
        
        $data->save();
        return redirect(route('admin_location'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function admin_location_show(Location $location, $id)
    {
        $locationshow=Location::find($id);
        return view('admin.location.show',['link'=>5]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function admin_location_edit(Location $location, $id)
    {
        $mylocationedit=Location::find($id);
        return view("admin.location.edit",['edit'=>$mylocationedit, 'link'=>5]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function admin_location_update(Request $request, Location $location,$id)
    {
        $data=Location::find($id);

        $data->id= $request->id;
        $data->type= $request->type;
        $data->name= $request->name;
        $data->lat=$request->lat;
        $data->long=$request->long;
        $data->status=$request->status;
        
        $data->save();

        //return redirect(route('admin.location.update'));
        return redirect()->route('admin_location');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function admin_location_delete(Location $location, $id)
    {
        $location=Location::find($id);
        $location->delete();
        return redirect()->route('admin_location')->with(['message'=> 'Successfully deleted!!']);
    }
    
}
