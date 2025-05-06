<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Banner;
use App\Models\Client;
use App\Models\Contact;
use App\Models\Faq;
use App\Models\Gallery;
use App\Models\Hosting;
use App\Models\Omsblog;
use App\Models\Ourteam;
use App\Models\Ourtechnology;
use App\Models\Recentworks;
use App\Models\Service;
use App\Models\Sitting;
use App\Models\Success;
use App\Models\Testmonaill;
use App\Models\Videogallery;
use App\Models\Whyspecil;
use Illuminate\Http\Request;

class FrontentController extends Controller
{
    public function frontent(){
        $banner=Banner::all();
        $services=Service::all();
        $setting=Sitting::all();
        $hoting=Hosting::all();
        $whyspecil=Whyspecil::all();
        $ourtechnology=Ourtechnology::all();
        $ourteam=Ourteam::all();
        $recentworks=Recentworks::all();
        $success=Success::all();
        $testmonail=Testmonaill::all();
        $Omsblog=Omsblog::all();
        $Client=Client::all();
        return view('Frontent.index'
        ,compact('banner'
        ,'setting'
        ,'services'
        ,'hoting'
        ,'whyspecil'
        ,'ourtechnology'
        ,'ourteam'
        ,'recentworks'
        ,'success'
        ,'testmonail'
        ,'Omsblog'
        ,'Client'
));
    }
    public function contact()
    {
        $contact = Contact::first();
        return view('Frontent.contact', compact('contact'));
    }
    public function aboutdetails(){
        $about=About::first();
        return view('Frontent.aboutus',compact('about'));
    }
    public function gallerydetails(){
        $galleryshow=Gallery::all();
        return view('Frontent.gallery',compact('galleryshow'));
    }
    public function  faqdetails(){
        $faqdetails=Faq::first();
        return view('Frontent.faq',compact('faqdetails'));
    }
    public function videogallerydetails()
    {
        // Retrieve all records from the database
        $data_show = Videogallery::first(); // You can also use 'get()' if you need to use a query builder, but 'all()' works for fetching all records.

        return view('Frontent.videogallery', compact('data_show'));
    }

}
