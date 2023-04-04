<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function getHome(){
        return view('home');
}
    public function getAbout(){
        return view('about');
    }
    public function getGallery(){
        $data = [
            'galleries' =>Gallery::orderby('id','desc')->get(),
        ];
        return view('gallery',$data);
    }
    public function getService(){
        return view('services');
    }
    public function getContact(){
        return view('contact');
    }
}