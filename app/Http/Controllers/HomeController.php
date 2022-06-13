<?php

namespace App\Http\Controllers;

use App\Models\Transfer;
use App\Models\Category;
use App\Models\image;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public static function maincategorylist()
    {
        return Category::where('parent_id','=', 0)->with('children')->get();
    }

    public function index ()
    {
        $sliderdata=image::limit(3)->get();
        $transferdata=Transfer::limit(6)->get();
        $categorydata=Category::limit(5)->get();

        $data=Category::all();
        return view('home.index', ['linkhome'=>1,'data'=>$data,
            'sliderdata'=>$sliderdata,
            'transferdata'=>$transferdata,
            'categorydata'=>$categorydata,
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
    public function home_search()
    {
        $sliderdata=image::limit(3)->get();
        $transferdata=Transfer::limit(6)->get();
        $categorydata=Category::limit(5)->get();

        $data=Category::all();
        return view('home.search', ['linkhome'=>1,'data'=>$data,
            'sliderdata'=>$sliderdata,
            'transferdata'=>$transferdata,
            'categorydata'=>$categorydata,
    ]);
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

}
