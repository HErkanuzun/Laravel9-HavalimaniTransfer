<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Parent_;

class CategoryController extends Controller
{
    protected $appends = [
        'getParentsTree'
    ];

    public static function getParentsTree($category, $title)
    {
        if($category->parent_id==0)
        {
            return $title;
        }
        $parent = Category::find($category->parent_id);
        $title = $parent->title . ' > ' . $title;
        return CategoryController::getParentsTree($parent,$title);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin_category_getir()
    {
        $categories=Category::all();
        return view("admin.category.index", [
            'link'=>4,
            'categories'=>$categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin_category_create()
    {
        return view("admin.category.create", ['link'=>4]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function admin_category_store(Request $request)
    {
        $data= new Category;
        $data->parent_id = 0;
        $data->title= $request->title;
        $data->status= $request->status;

        $data->keywords=$request->keywords;
        $data->description=$request->description;
        if($request->file('image'))
        {
            $data->image=$request->file('image')->store('images');
        }

        $data->save();
        return redirect(route('admin_category'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category,$id)
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

    public function edit(Category $category,$id)
    
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
    public function update(Request $request,Category $category,$id)
    {

        $data=Category::find($id);

        $data->parent_id = 0;
        $data->title= $request->title;
        $data->status= $request->status;
        $data->keywords=$request->keywords;
        $data->description=$request->description;
        $data->image=$request->image;
        if($request->file('image'))
        {
            $data->image=$request->file('image')->store('images');
        }

        $data->save();

        return redirect(route('admin_category'));
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
