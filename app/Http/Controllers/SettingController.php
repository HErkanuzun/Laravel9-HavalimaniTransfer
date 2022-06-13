<?php

namespace App\Http\Controllers;

use App\Models\setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index(){
        return view('admin.setting.index');
    }

    public function admin_setting(){

        $data = Setting::first();
        if($data==null){
            $data=new Setting();
            $data->title='project title';
            $data->save();
            $data = Setting::first();
        }

        return view('admin.setting.index',[
            'data'=>$data,
            'link'=>9
        ]);
    }

    public function admin_setting_edit (){
        $data = Setting::first();
        return view('admin.setting.edit',[
            'data'=>$data,
            'link'=>9,
        ]);

    }

   public function admin_setting_update(Request $request, Setting $Setting){
        $data = Setting::first();

        
        $data->title = $request->title;  

        $data->keywords = $request->keywords;

        $data->description = $request->description;
        
        $data->company = $request->company;
        $data->address = $request->address;
        $data->phone = $request->phone;
        $data->fax = $request->fax;
        $data->email = $request->email;
        $data->smtpserver = $request->smtpserver;
        $data->smtpemail = $request->smtpemail;
        $data->smtppassword = $request->smtppassword;
        $data->smtpport = $request->smtpport;
        $data->facebook = $request->facebook;
        $data->instagram = $request->instagram;
        $data->twitter = $request->twitter;
        $data->aboutus = $request->aboutus;
        $data->contact = $request->contact;
        $data->references = $request->references;
        $data->status = $request->status;
        $data->save();
        
       return redirect(route('admin_setting'));
    }

   

}
