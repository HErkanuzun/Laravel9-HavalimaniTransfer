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
        $sosyaldata=Setting::limit(5)->get();

        $data=Category::all();
        return view('home.index', ['linkhome'=>1,
            'data'=>$data,
            'sliderdata'=>$sliderdata,
            'transferdata'=>$transferdata,
            'categorydata'=>$categorydata,
            'locationdata'=>$locationdata,
            'imagedata'=>$imagedata,
            'sosyaldata'=>$sosyaldata,

    ]);
    }

    public function aboutus()
    {
        $sliderdata=image::limit(3)->get();
        $transferdata=Transfer::limit(6)->get();
        $categorydata=Category::limit(5)->get();
        $locationdata=Location::limit(5)->get();
        $settingdata=Setting::limit(5)->get();
        $categorydata=Category::limit(5)->get();
        $data = Setting::first()->contact;
        $imagedata=image::limit(10)->get();
        $sosyaldata=Setting::limit(5)->get();
        

        $data=Category::all();
        return view('home.booking', ['linkhome'=>2,
            'sliderdata'=>$sliderdata,
            'transferdata'=>$transferdata,
            'categorydata'=>$categorydata,
            'locationdata'=>$locationdata,
            'imagedata'=>$imagedata,
            'sosyaldata'=>$sosyaldata,
            
    
    
    ]);
    }


    public function home_references(){
        $sliderdata=image::limit(3)->get();
        $transferdata=Transfer::limit(6)->get();
        $categorydata=Category::limit(5)->get();
        $locationdata=Location::limit(5)->get();
        $settingdata=Setting::limit(5)->get();
        $data = Setting::first()->references;
        $sosyaldata=Setting::limit(5)->get();

        return view('home.reference',[
            'data'=>$data,
            'linkhome'=>5,
            'sliderdata'=>$sliderdata,
            'transferdata'=>$transferdata,
            'categorydata'=>$categorydata,
            'locationdata'=>$locationdata,
            'settingdata'=>$settingdata,
            'sosyaldata'=>$sosyaldata,
    
        ]);
    }

    public function home_test()
    {
        return view('home.test', ['linkhome'=>1]);
    }
    public function home_konumhsp()
    {   
        $sliderdata=image::limit(3)->get();
        $transferdata=Transfer::limit(6)->get();
        $categorydata=Category::limit(5)->get();
        $locationdata=Location::limit(5)->get();
        $settingdata=Setting::limit(5)->get();
        $categorydata=Category::limit(5)->get();
        $data = Setting::first()->contact;
        $sosyaldata=Setting::limit(5)->get();

        return view('home.konumhsp', ['linkhome'=>1,
            'data'=>$data,
            'linkhome'=>3,
            'sliderdata'=>$sliderdata,
            'transferdata'=>$transferdata,
            'categorydata'=>$categorydata,
            'locationdata'=>$locationdata,
            'settingdata'=>$settingdata,
            'sosyaldata'=>$sosyaldata,
    
    ]);
    
    }
    public function single_page()
    {   

        $sliderdata=image::limit(3)->get();
        $transferdata=Transfer::limit(6)->get();
        $categorydata=Category::limit(5)->get();
        $locationdata=Location::limit(5)->get();
        $settingdata=Setting::limit(5)->get();
        $categorydata=Category::limit(5)->get();
        $data = Setting::first()->contact;
        $sosyaldata=Setting::limit(5)->get();

        return view('home.singlepage', ['linkhome'=>1,
            'data'=>$data,
            'linkhome'=>3,
            'sliderdata'=>$sliderdata,
            'transferdata'=>$transferdata,
            'categorydata'=>$categorydata,
            'locationdata'=>$locationdata,
            'settingdata'=>$settingdata,
            'sosyaldata'=>$sosyaldata,
    ]);
    }

    public function home_contact(){
        $sliderdata=image::limit(3)->get();
        $transferdata=Transfer::limit(6)->get();
        $categorydata=Category::limit(5)->get();
        $locationdata=Location::limit(5)->get();
        $settingdata=Setting::limit(5)->get();
        $data = Setting::first()->contact;
        $sosyaldata=Setting::limit(5)->get();
        
        return view('home.contact',[
            'data'=>$data,
            'linkhome'=>3,
            'sliderdata'=>$sliderdata,
            'transferdata'=>$transferdata,
            'categorydata'=>$categorydata,
            'locationdata'=>$locationdata,
            'settingdata'=>$settingdata,
            'sosyaldata'=>$sosyaldata,
        
        ]);
    }


    public function home_search($id)
    {
        
        $sliderdata=image::limit(3)->get();
        $transferdata=Transfer::limit(6)->get();
        $categorydata=Category::limit(5)->get();
        $locationdata=Location::limit(5)->get();
        $settingdata=Setting::limit(5)->get();
        $sosyaldata=Setting::limit(5)->get();

        $data=Category::all();

        return view('home.search', ['linkhome'=>4,
            'data'=>$data,
            'sliderdata'=>$sliderdata,
            'transferdata'=>$transferdata,
            'categorydata'=>$categorydata,
            'locationdata'=>$locationdata,
            'settingdata'=>$settingdata,
            'sosyaldata'=>$sosyaldata,
    ]);
    }



    public function home_transfer(transfer $transfer, $id)
    {

        $sliderdata=image::limit(3)->get();
        $transferdata=Transfer::limit(6)->get();
        $categorydata=Category::limit(5)->get();
        $locationdata=Location::limit(5)->get();
        $settingdata=Setting::limit(5)->get();
        $sosyaldata=Setting::limit(5)->get();
        $myshow=transfer::find($id);
        $data=Category::all();
        return view('home.cars', ['linkhome'=>2,
        'data'=>$data,
        'sliderdata'=>$sliderdata,
        'transferdata'=>$transferdata,
        'categorydata'=>$categorydata,
        'locationdata'=>$locationdata,
        'settingdata'=>$settingdata,
        'sosyaldata'=>$sosyaldata,
        'myshow'=>$myshow,

        
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
