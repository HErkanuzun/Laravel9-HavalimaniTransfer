<?php

namespace App\Http\Controllers;

use App\Models\Transfer;
use App\Models\Category;
use App\Models\image;
use App\Models\Location;
use App\Models\Setting;
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
        $categorydata=Category::limit(7)->get();
        $locationdata=Location::limit(5)->get();
        $imagedata=image::limit(10)->get();

        $data=Category::all();
        return view('home.index', ['linkhome'=>1,
            'data'=>$data,
            'sliderdata'=>$sliderdata,
            'transferdata'=>$transferdata,
            'categorydata'=>$categorydata,
            'locationdata'=>$locationdata,
            'imagedata'=>$imagedata,

    ]);
    }

    public function aboutus()
    {
        $sliderdata=image::limit(3)->get();
        $transferdata=Transfer::limit(6)->get();
        $categorydata=Category::limit(5)->get();
        $locationdata=Location::limit(5)->get();
        $imagedata=image::limit(10)->get();
        

        $data=Category::all();
        return view('home.aboutus', ['linkhome'=>2,
            'sliderdata'=>$sliderdata,
            'transferdata'=>$transferdata,
            'categorydata'=>$categorydata,
            'locationdata'=>$locationdata,
            'imagedata'=>$imagedata,
    
    
    ]);
    }


    public function home_references(){
        $categorydata=Category::limit(5)->get();
        $data = Setting::first()->references;
        return view('home.reference',[
            'data'=>$data,
            'linkhome'=>5,
        ]);
    }

    public function home_test()
    {
        return view('home.test', ['linkhome'=>1]);
    }
    public function home_konumhsp()
    {   
        $categorydata=Category::limit(5)->get();
        return view('home.konumhsp', ['linkhome'=>1,
    
    ]);
    
    }
    public function single_page()
    {
        $categorydata=Category::limit(5)->get();
        return view('home.singlepage', ['linkhome'=>1,
    ]);
    }

    public function home_contact(){
        $categorydata=Category::limit(5)->get();
        $data = Setting::first()->contact;
        return view('home.contact',[
            'data'=>$data,
            'linkhome'=>3,
        
        ]);
    }


    public function home_search()
    {
        
        $sliderdata=image::limit(3)->get();
        $transferdata=Transfer::limit(6)->get();
        $categorydata=Category::limit(5)->get();
        $locationdata=Location::limit(5)->get();
        $settingdata=Setting::limit(5)->get();

        $data=Category::all();
        return view('home.search', ['linkhome'=>4,'data'=>$data,
            'sliderdata'=>$sliderdata,
            'transferdata'=>$transferdata,
            'categorydata'=>$categorydata,
            'locationdata'=>$locationdata,
            'settingdata'=>$settingdata,
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
