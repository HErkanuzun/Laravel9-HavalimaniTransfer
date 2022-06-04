<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Storage;
use App\Models\Transfer;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Parent_;

class TransferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin_transfer()
    {
        $transfers=Transfer::all();
        return view("admin.transfer.index",[
            'link'=>6,
            'transfers'=>$transfers
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin_transfer_create()
    { 
        return view("admin.transfer.create", ['link'=>6]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function admin_transfer_store(Request $request)
    {
        $data= new Transfer;
        $data->id= $request->id;
        $data->category_id= $request->category_id;
        $data->title= $request->title;
        if($request->file('image'))
        {
            $data->image=$request->file('image')->store('images');
        }
        $data->km_price=$request->km_price;
        $data->detail=$request->detail;
        $data->base_price=$request->base_price;
        $data->capasity=$request->capasity;
        $data->car_detail=$request->car_detail;
        $data->keywords=$request->keywords;
        $data->description=$request->description;
        
        $data->save();
        return redirect(route('admin_transfer'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transfer  $transfer
     * @return \Illuminate\Http\Response
     */
    public function admin_transfer_show(Transfer $transfer, $id)
    {
        $transferhow=Transfer::find($id);
        return view('admin.transfer.show',['link'=>6]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transfer  $transfer
     * @return \Illuminate\Http\Response
     */
    public function admin_transfer_edit(Transfer $transfer, $id)
    {
        $mytransferedit=Transfer::find($id);
        return view("admin.transfer.edit",['edit'=>$mytransferedit, 'link'=>6]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transfer  $transfer
     * @return \Illuminate\Http\Response
     */
    public function admin_transfer_update(Request $request, Transfer $transfer, $id)
    {
        $data=Transfer::find($id);

        $data->id= $request->id;
        $data->type= $request->type;
        $data->name= $request->name;
        $data->lat=$request->lat;
        $data->long=$request->long;
        $data->status=$request->status;
        
        $data->save();

        //return redirect(route('admin.transfer.update'));
        return redirect()->route('admin_transfer')->with(['message'=> 'Successfully update!!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transfer  $transfer
     * @return \Illuminate\Http\Response
     */
    public function admin_transfer_delete(Transfer $transfer, $id)
    {
        $transfer=Transfer::find($id);
        $transfer->delete();
        return redirect()->route('admin_transfer')->with(['message'=> 'Successfully deleted!!']);
    }
    
}
