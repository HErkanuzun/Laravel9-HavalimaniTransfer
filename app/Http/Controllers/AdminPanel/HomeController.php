<?php

namespace App\Http\Controllers\AdminPanel;

use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\image;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view("admin.index", ['link'=>1]);
    }

    public function getir()
    {
        return view("admin.index");
    }
    //************  category  ************

    //************  category end ************

    public function tables_getir()
    {
        return view('admin.tables', ['link'=>2]);
    }

    public function billing_getir()
    {
        return view('admin.billing',['link'=>3]);
    }

    public function profile_getir()
    {
        $profiledata=User::limit(1)->get();
        $image=image::limit(10)->get();
        return view('admin.profile',['link'=>8,
        'profiledata'=>$profiledata,
        'image'=>$image,
    ]);
    }

    public function singin_getir()
    {
        return redirect(route('admin'));
    }

    public function singup_getir()
    {
        return view('admin.singup',['link'=>9]);
    }
    public function test_getir()
    {
        return view('admin.admintest',['link'=>9]);
    }


}
