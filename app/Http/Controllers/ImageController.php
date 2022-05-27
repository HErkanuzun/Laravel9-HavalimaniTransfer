<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin_image()
    {
        $images=Image::all();
        return view('admin.image.index', [
            'link'=>7,
            'images'=>$images
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin_image_create()
    {
        return view('admin.image.create', ['link'=>7]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function admin_image_store(Request $request, $id)
    {
        $data= new Image;
        $data->transfer_id = 0;
        $data->title= $request->title;
        $data->image=$request->image;
        if($request->file('image'))
        {
            $data->image=$request->file('image')->store('images');
        }

        $data->save();
        return redirect(route('admin_image'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function admin_image_show(Image $image, $id)
    {
        $myshow=Image::find($id);
        return view('admin.image.show',['link'=>7]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function admin_image_edit(Image $image, $id)
    {
        $myedit=Image::find($id);
        $myeditlist=Image::all();
        return view("admin.Image.edit", ['edit'=>$myedit, 'myeditlist'=>$myeditlist, 'link'=>7]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function admin_image_update(Request $request, Image $image, $id)
    {
        /**$data->transfer_id = 0;
        $data->title= $request->title;
        $data->image=$request->image;
        if($request->file('image'))
        {
            $data->image=$request->file('image')->store('images');
        }

        $data1->save();
        return redirect(route('admin_image'));
    */
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function admin_image_delete(Image $image, $id)
    {
        $image=Image::find($id);
        $image->delete();
        return view(route('admin_image'));
    }
}
