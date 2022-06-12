<?php

namespace App\Http\Controllers;

use App\Models\Transfer;
use App\Models\Category;
use App\Models\image;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index ()
    {
        $sliderdata=image::limit(3)->get();
        $transferdata=Transfer::limit(6)->get();
        $data=Category::all();
        return view('home.index', ['linkhome'=>1,'data'=>$data,
            'sliderdata'=>$sliderdata,
            'transferdata'=>$transferdata,
    ]);
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
