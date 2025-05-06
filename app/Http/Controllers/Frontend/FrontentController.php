<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Aboutme;
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
use App\Models\Resum;
use App\Models\Service;
use App\Models\Sitting;
use App\Models\Skill;
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
        $aboutme=Aboutme::all();
        $Resum=Resum::all();
        $skill=Skill::all();
        $Contact=Contact::all();
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
        ,'Client',
        'aboutme',
        'Resum',
        'skill',
        'Contact',
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
        $data_show = Videogallery::first(); 

        return view('Frontent.videogallery', compact('data_show'));
    }
    public function portfolio()
    {
        $portfolio = Recentworks::first(); 
        return view('Frontent.body.portfoliodetails', compact('portfolio'));
    }

    public function blogdetails()
    {
        $blogdetails = Omsblog::first(); 
        return view('Frontent.body.blogdetails', compact('blogdetails'));
    }


    

}
