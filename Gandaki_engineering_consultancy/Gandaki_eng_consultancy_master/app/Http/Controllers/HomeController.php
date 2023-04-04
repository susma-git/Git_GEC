<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Service;
use App\Models\Gallery;
use Illuminate\Support\Facades\Route;


class HomeController extends Controller
{
    public function getAboutManage(){
        $data = [
            'abouts' => About::all(),
        ];
        return view('admin.about.managea',$data);
    }
    public function getServiceManage(){
        $data = [
            'services' => Service::all(),
        ];
        return view('admin.service.manages',$data);
    }
    public function getGalleryManage(){
        $data = [
            'galleries'=> Gallery::all(),
        ];
        return view('admin.gallery.galleryg',$data);
    }
    public function postGalleryAdd(Request $request){
        $gallery_image = $request -> file('gallery_image');
        $time = time();
        $uniquename = md5(time());
        $extension = $gallery_image -> getClientOriginalExtension();
        $image_name = $uniquename . '.' . $extension;
        $gallery_image -> move('site/uploads/gallery/',$image_name);
        $gallery = new Gallery;
        $gallery -> gallery_image = $image_name;
        $gallery -> save();
        return redirect()->route('getGalleryManage')->with('message','You have added image in gallery successfully');


    }
    public function getEditGallery(Gallery $gallery){
        $data = [
            'gallery' => $gallery,
        ];
        return view('admin.gallery.edit',$data);
    
    
        return redirect('/galleryg')->with('message','You have edited successfully');
    }
    public function postGalleryEdit(Request $request ,Gallery $gallery){
        $gallery_image = $request ->file('gallery_image');

        $time = time();
        $uniquename = md5(time());
        $extension = $gallery_image -> getClientOriginalExtension();
        $image_name = $uniquename . '.'. $extension;
        $gallery_image->move('site/uploads/gallery/',$image_name);

        $gallery->gallery_image = $image_name;
        $gallery -> save();
        return redirect('/galleryg')->with('message','You have edited successfully');

    }
    public function getDeleteGallery(Gallery $gallery)
   {
      $data = [
         'gallery' => $gallery,
      ];
      $gallery->delete();
      return redirect('/galleryg')->with('message','You have deleted successfully');
    }
    public function postAboutAdd(Request $request){
        $about_description = $request -> input('about_description');
        $about_image = $request -> file('about_image');
        $time =time();
        $uniquename = md5(time());
        $extension = $about_image -> getClientOriginalExtension();
        $image_name = $uniquename .'.'.$extension;
        $about_image -> move('site/uploads/about/',$image_name);
        $about = new About;
        $about -> about_description  = $about_description;
        $about -> about_image = $image_name;
        $about -> save();
        return redirect()->route('getGalleryManage')->with('message','You have added about successfully');

    }
    public function  getEditAbout(About $about){
        $data = [
            'about' => $about,
        ];
        return view('admin.about.edit',$data);
        return redirect('/managea')->with('message','You have edited successfully');

    }
    public function postAboutEdit(Request $request , About $about){
        $about_description = $request -> input('about_description');
        $about_image = $request ->file('about_image');

        $time = time();
        $uniquename = md5(time());
        $extension = $about_image -> getClientOriginalExtension();
        $image_name = $uniquename . '.'. $extension;
        $about_image->move('site/uploads/about/',$image_name);
    
        $about->about_image = $image_name;
        $about ->about_description = $about_description;

        $about -> save();
        return redirect('/managea')->with('message','You have edited successfully');
}
public function getDeleteAbout(About $about){
$data = [
    'about' => $about,
];
$about -> delete();
return redirect('/managea')-> with('message','You have deleted successfully');
}
public function postServiceAdd(Request $request){
    $service_title = $request -> input('service_title');
    $service_description = $request -> input('service_description');
    $service_logo = $request -> file('service_logo');
    $time = time();
    $uniquename = md5(time());
    $extension = $service_logo -> getClientOriginalExtension();
    $logo_name = $uniquename .'.'.$extension;
    $service_logo -> move('site/uploads/service',$logo_name);
    $service = new Service;
    $service -> service_title = $service_title;
    $service -> service_description = $service_description;
    $service -> service_logo = $logo_name;
    $service -> save();
    return redirect('/manages')->with('message','You have added services successfully');
}

public function getServiceEdit(Service $service){
    $data = [
        'service'=> $service,
    ];
    return view('admin.service.edit',$data);
    return redirect('/manages')->with('message','You have edited services successfully');
}
public function postServiceEdit(Request $request, Service $service){
$service_logo = $request -> file('service_logo');
$service_title = $request -> input('service_title');
$service_description = $request -> input('service_description');
$time = time();
$uniquename = md5(time());
$extension = $service_logo -> getClientOriginalExtension();
$logo_name = $uniquename. '.'. $extension;
$service_logo -> move('site/uploads/service',$logo_name);
$service -> service_logo = $logo_name;
$service -> service_title = $service_title;
$service -> service_description = $service_description;
$service -> save();
return redirect('/manages')->with('message','You have edited services successsfully');
}
public function getServiceDelete(Service $service){
    $data = [
        'service' => $service,
    ];
    $service -> delete();
    return redirect('/manages')->with('message','You have deleted successfully');
}

}
?>