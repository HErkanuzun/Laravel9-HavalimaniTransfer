<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Parent_;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function category_getir()
    {
        $categories=Category::all();
        return view("admin.category.index", [
            'link'=>4,
            'categories'=>$categories
        ]);
    }

    public function category_deneme()
    {
        return view("admin.category.addlocation", ['link'=>5]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function category_create()
    {
        return view("admin.category.create", ['link'=>4]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function category_store(Request $request)
    {
        $data= new Category;
        $data->parent_id = 0;
        $data->title= $request->title;
        $data->status= $request->status;

        $data->keywords=$request->keywords;
        $data->description=$request->description;
        $data->image=$request->image;

        $data->save();
        return redirect(route('admin_category'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        $myshow=Category::find($id);
        return view('admin.category.show',['link'=>4]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $myedit=Category::find($id);
        return view("admin.category.edit", ['edit'=>$myedit, 'link'=>4]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category,$id)
    {
        $category=Category::find($id);
        $category->delete();
        return redirect(route('admin_category'));
    }
    
}
