<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view("admin.index",
    ['link'=>1]);
    }

    public function getir()
    {
        return view("admin.index");
    }

    public function category_getir()
    {
        return view("admin.category");
    }

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
        return view('admin.profile',['link'=>6]);
    }

    public function singin_getir()
    {
        return view('admin.singin',['link'=>7]);
    }

    public function singup_getir()
    {
        return view('admin.singup',['link'=>8]);
    }
}
