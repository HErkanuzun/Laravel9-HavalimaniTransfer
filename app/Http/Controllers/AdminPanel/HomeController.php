<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
           return view("admin.index");
    }
    public function getir()
    {
        return view("admin.index");
    }
    public function category_getir()
    {
        return view("admin.category");
    }
}
