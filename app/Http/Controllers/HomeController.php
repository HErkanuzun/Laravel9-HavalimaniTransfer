<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index ()
    {
        $data=Category::all();
        return view('home.index', ['linkhome'=>1,'data'=>$data]);
    }

    public function aboutus()
    {
        return view('home.aboutus', ['linkhome'=>2]);
    }

    public function contacts()
    {
        return view('home.contact', ['linkhome'=>3]);
    }


    public function home_test()
    {
        return view('home.test', ['linkhome'=>1]);
    }
    public function home_konumhsp()
    {
        return view('home.konumhsp', ['linkhome'=>1]);
    }
    public function single_page()
    {
        return view('home.singlepage', ['linkhome'=>1]);
    }

    public function param($id,$number)
    {
        //echo "Parameter 1:", $id;
        //echo "<br>Paramater 2:", $number;
        //echo "Sum Paramters:", $id+$number;
        return view('home.test2',
            [
                'id' =>$id,
                'number' =>$number
            ]);
    }
    public function save()
    {
        echo "Save Function<br>";
        echo "<br>First Name:", $_REQUEST["fname"];
        echo "<br>Last Name:", $_REQUEST["lname"];
        //return view('home.test',
        [
            'fname' =>$_REQUEST["fname"],
            'lname' =>$_REQUEST["lname"]
        ];
    }

}
