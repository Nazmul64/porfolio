<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\Aboutmecontroller;
use App\Http\Controllers\Backend\AskqusitionController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Frontend\FrontentController;
use App\Http\Controllers\Backend\BackendController;
use App\Http\Controllers\Backend\BannerController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\ClientController;
use App\Http\Controllers\Backend\Contactcontroller;
use App\Http\Controllers\Backend\FaqController;
use App\Http\Controllers\Backend\GalleryController;
use App\Http\Controllers\Backend\HostingController;
use App\Http\Controllers\Backend\OurtechnologyController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\RecentworksController;
use App\Http\Controllers\Backend\Resumcontroller;
use App\Http\Controllers\Backend\ServicesController;
use App\Http\Controllers\Backend\SittingController;
use App\Http\Controllers\Backend\Skillcontroller;
use App\Http\Controllers\Backend\Successstory;
use App\Http\Controllers\Backend\TeamController;
use App\Http\Controllers\Backend\WhyspecilaController;
use App\Http\Controllers\Backend\Testmonailcontroller;
use App\Http\Controllers\Backend\VideogalleryController;

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes(['register' => false]);

Route::get('/', [FrontentController::class, 'frontent'])->name('home');
Route::get('home', [BackendController::class, 'admin'])->name('admin');
// Route::middleware(['admin'])->group(function () {
//     Route::get('admin', [BackendController::class, 'admin'])->name('admin');
// });

Route::prefix('Banner')->group(function () {
    Route::get('banner', [BannerController::class, 'create'])->name('create');
    Route::post('banner/store', [BannerController::class, 'bannerstore'])->name('banner.store');
    Route::get('banner/index', [BannerController::class, 'bannerindex'])->name('banner.index');
    Route::get('banner/edit/{id}', [BannerController::class, 'banneredit'])->name('banner.edit');
    Route::post('banner/update/{id}', [BannerController::class, 'bannerupdate'])->name('update.banner');
    Route::get('banner/delete/{id}', [BannerController::class, 'bannerdelete'])->name('banner.delete');
});


Route::prefix('Sitting')->group(function () {
    Route::get('sitting', [SittingController::class, 'settingcreate'])->name('settingcreate');
    Route::post('setting/store', [SittingController::class, 'settingstore'])->name('settingstore');
    Route::get('setting/index', [SittingController::class, 'settingindex'])->name('setting.index');
    Route::get('sitting/{id}', [SittingController::class, 'settingedit'])->name('settingedit');
    Route::post('sitting/update/{id}', [SittingController::class, 'settinupdate'])->name('settinupdate');
    Route::get('sitting/delete/{id}', [SittingController::class, 'sittingdelete'])->name('sitting.delete');
});


Route::prefix('Sitting')->group(function () {
    Route::get('services', [ServicesController::class, 'servicesgcreate'])->name('servicesgcreate');
    Route::post('services/store', [ServicesController::class, 'servicesstore'])->name('servicesstore');
    Route::get('services/index', [ServicesController::class, 'servicesindex'])->name('servicesindex');
    Route::get('services/edit/{id}', [ServicesController::class, 'servicesedit'])->name('servicesedit');
    Route::post('services/update/{id}', [ServicesController::class, 'servicesupdate'])->name('servicesupdate');
    Route::get('services/delete/{id}', [ServicesController::class, 'servicesdelete'])->name('servicesdelete');
});


Route::prefix('Hostings')->group(function () {
    Route::get('hostings/create', [HostingController::class, 'hostingsgcreate'])->name('hostingsgcreate');
    Route::post('hostings/store', [HostingController::class, 'hostingsstore'])->name('hostingsstore');
    Route::get('hostings/index', [HostingController::class, 'hostingsindex'])->name('hostingsindex');
    Route::get('hostings/edit/{id}', [HostingController::class, 'hostingsedit'])->name('hostingsedit');
    Route::post('hostings/update/{id}', [HostingController::class, 'hostingsupdate'])->name('hostingsupdate');
    Route::get('hostings/delete/{id}', [HostingController::class, 'hostingsdelete'])->name('hostingsdelete');
});


Route::prefix('Whyspecil')->group(function () {
    Route::get('Whyspecil/create', [WhyspecilaController::class, 'whyspecilcreate'])->name('whyspecilcreate');
    Route::post('Whyspecil/store', [WhyspecilaController::class, 'whyspecilstore'])->name('whyspecilstore');
    Route::get('Whyspecil/idnex', [WhyspecilaController::class, 'whyspecilidnex'])->name('whyspecilidnex');
    Route::get('Whyspecil/edit/{id}', [WhyspecilaController::class, 'whyspeciledit'])->name('whyspeciledit');
    Route::post('Whyspecil/update/{id}', [WhyspecilaController::class, 'whyspecilupdate'])->name('whyspecilupdate');
    Route::get('Whyspecil/delete/{id}', [WhyspecilaController::class, 'whyspecildelete'])->name('whyspecildelete');
});

Route::prefix('Techonology')->group(function () {
    Route::get('Techonology/create', [OurtechnologyController::class, 'techonology'])->name('techonology.create');
    Route::post('Techonology/store', [OurtechnologyController::class, 'techonologystore'])->name('techonology.store');
    Route::get('Techonology/index', [OurtechnologyController::class, 'techonologyindex'])->name('techonology.techonologyindex');
    Route::get('Techonology/edit/{id}', [OurtechnologyController::class, 'techonologyedit'])->name('techonology.edit');
    Route::post('Techonology/update/{id}', [OurtechnologyController::class, 'techonologyupdate'])->name('techonology.techonologyupdate');
    Route::get('Techonology/delete/{id}', [OurtechnologyController::class, 'techonologydelete'])->name('techonology.techonologydelete');
});

Route::prefix('Team')->group(function () {
    Route::get('Team/create', [TeamController::class, 'Teamcrate'])->name('team.create');
    Route::post('Team/store', [TeamController::class, 'Teamcstore'])->name('team.store');
    Route::get('Team/Teamindex', [TeamController::class, 'Teamindex'])->name('team.index');
    Route::get('Team/edite/{id}', [TeamController::class, 'Teamedite'])->name('team.edite');
    Route::post('Team/update/{id}', [TeamController::class, 'Teamupdate'])->name('team.update');
    Route::get('Team/delete/{id}', [TeamController::class, 'Teamdelete'])->name('team.delete');
});


Route::prefix('Recentproject')->group(function () {
    Route::get('Recentproject/create', [RecentworksController::class, 'recentcrate'])->name('recent.create');
    Route::get('Recentproject/singepagedetails/{id}', [RecentworksController::class, 'recesingepagedetails'])->name('projectdetails');
    Route::post('Recentproject/store', [RecentworksController::class, 'recentstore'])->name('recent.store');
    Route::get('Recentproject/indexshow', [RecentworksController::class, 'recentprojectindex'])->name('recentproject.index');
    Route::get('Recentproject/edit/{id}', [RecentworksController::class, 'recentprojectedit'])->name('recentproject.edit');
    Route::post('Recentproject/update/{id}', [RecentworksController::class, 'recentprojectupdate'])->name('recentproject.update');
    Route::get('Recentproject/delete/{id}', [RecentworksController::class, 'recentprojectdelete'])->name('recentproject.delete');
});


Route::prefix('Successstory')->group(function () {
    Route::get('Successstory/create', [Successstory::class, 'Successstorycreate'])->name('successstorycreate.create');
    Route::post('Successstory/store', [Successstory::class, 'Successstorystore'])->name('successstory.store');
    Route::get('Successstory/index', [Successstory::class, 'Successstoryindex'])->name('success.index');
    Route::get('Successstory/edit/{id}', [Successstory::class, 'Successstoryedit'])->name('success.edit');
    Route::post('Successstory/update/{id}', [Successstory::class, 'Successstoryupdate'])->name('success.update');
    Route::get('Successstory/delete/{id}', [Successstory::class, 'Successstorydelete'])->name('success.delete');
});

Route::prefix('Testmonail')->group(function () {
    Route::get('testmonail/create', [Testmonailcontroller::class, 'testmonailcreate'])->name('testmonailcreate.create');
    Route::post('/testmonail/store', [Testmonailcontroller::class, 'testmonailStore'])->name('testmonail.store');
    Route::get('testmonail/index', [Testmonailcontroller::class, 'testmonailindex'])->name('testmonail.index');
    Route::get('testmonail/edit/{id}', [Testmonailcontroller::class, 'testmonailedit'])->name('testmonail.edit');
    Route::post('testmonail/update/{id}', [Testmonailcontroller::class, 'testmonailupdate'])->name('testmonailupdate.update');
    Route::get('testmonail/delete/{id}', [Testmonailcontroller::class, 'testmonaildelete'])->name('testmonaildelete.delete');

});

Route::prefix('Blog')->group(function () {
    Route::get('/blog/show', [BlogController::class, 'blogshow'])->name('blogindex');
    Route::get('Blog/create', [BlogController::class, 'blogcreate'])->name('blogcreate.create');
    Route::post('Blog/store', [BlogController::class, 'blogstore'])->name('blog.store');
    Route::get('/blog/{id}', [BlogController::class, 'showBlogDetails'])->name('blogdetails');
    Route::get('/blog/edit/{id}', [BlogController::class, 'Blogedit'])->name('blogd.edit');
    Route::post('/blog/update/{id}', [BlogController::class, 'Blogupdate'])->name('blogd.update');
    Route::get('/blog/delete/{id}', [BlogController::class, 'Blogdelete'])->name('blog.delete');
});

Route::prefix('Our Client')->group(function () {
    Route::get('/Client/create', [ClientController::class, 'clientcreate'])->name('clinet.create');
    Route::post('/Client/store', [ClientController::class, 'clientstore'])->name('clinet.store');
    Route::get('/Client/dahatashow', [ClientController::class, 'clientindex'])->name('clinet.index');
    Route::get('/Client/clientedit/{id}', [ClientController::class, 'clientedit'])->name('clinet.clientedit');
    Route::post('/Client/update/{id}', [ClientController::class, 'clientupdate'])->name('clinet.update');
    Route::get('OurClient/Client/delete/{id}', [ClientController::class, 'delete'])->name('client.delete');
});
Route::prefix('Contact')->group(function () {
    Route::get('/Contact/create', [Contactcontroller::class, 'contactcreate'])->name('contact.create');
    Route::post('/Contact/store', [Contactcontroller::class, 'contactstore'])->name('contact.store');
    Route::get('/Contact/index', [Contactcontroller::class, 'contactindex'])->name('contact.index');
    Route::get('/Contact/edit/{id}', [Contactcontroller::class, 'contactedit'])->name('contact.edit');
    Route::post('/Contact/update/{id}', [Contactcontroller::class, 'contactupdate'])->name('contact.update');
    Route::get('/Contact/delete/{id}', [Contactcontroller::class, 'contactdelete'])->name('contact.delete');
    Route::get('/Contact/contact', [FrontentController::class, 'contact'])->name('contactpage');

});

Route::prefix('About')->group(function () {
    Route::get('/about/create', [AboutController::class, 'contactcreate'])->name('about.create');
    Route::post('/about/store', [AboutController::class, 'contactstore'])->name('about.store');
    Route::get('/about/index', [AboutController::class, 'aboutindex'])->name('about.index');
    Route::get('/about/edit/{id}', [AboutController::class, 'aboutedit'])->name('about.edit');
    Route::post('/about/update/{id}', [AboutController::class, 'aboutupdate'])->name('about.update');
    Route::get('/about/delete/{id}', [AboutController::class, 'contactdelete'])->name('about.delete');
    Route::get('/aboutdetails', [FrontentController::class, 'aboutdetails'])->name('aboutdetails');
});

Route::prefix('Gallery')->group(function () {
    Route::get('/gallery/create', [GalleryController::class, 'gallerycreate'])->name('gallery.create');
    Route::post('/gallery/store', [GalleryController::class, 'gallerystore'])->name('gallery.store');
    Route::get('/gallery/gallery', [FrontentController::class, 'gallerydetails'])->name('gallerydetails');
    Route::get('/gallery/index', [GalleryController::class, 'galleryindex'])->name('gallery.index');
    Route::get('/gallery/edit/{id}', [GalleryController::class, 'galleryedit'])->name('gallery.edit');
    Route::post('/gallery/update/{id}', [GalleryController::class, 'galleryupdate'])->name('gallery.update');
    Route::get('/gallery/delete/{id}', [GalleryController::class, 'gallerydelete'])->name('gallery.delete');
});


Route::prefix('Faq')->group(function () {
    Route::get('/Faq/create', [FaqController::class, 'faqcreate'])->name('faq.create');
    Route::post('/Faq/store', [FaqController::class, 'faqstore'])->name('faq.store');
    Route::get('/Faq/idnex', [FaqController::class, 'faqidnex'])->name('faq.idnex');
    Route::get('/Faq/edit/{id}', [FaqController::class, 'faqedit'])->name('faq.edit');
    Route::post('/Faq/update/{id}', [FaqController::class, 'faqupdate'])->name('faq.update');
    Route::get('/Faq/delete/{id}', [FaqController::class, 'faqdelete'])->name('faq.delete');
    Route::get('/Faq/faqdetails', [FrontentController::class, 'faqdetails'])->name('faqdetails');
});

Route::prefix('askquestion')->group(function () {
    Route::post('/askquestion/store', [AskqusitionController::class, 'askquestionstore'])->name('askquestion.store');
    Route::get('/askquestion/index', [AskqusitionController::class, 'askquestionindex'])->name('askquestion.index');
    Route::get('/askquestion/delete/{id}', [AskqusitionController::class, 'askquestiondelete'])->name('askquestion.delete');

});

Route::prefix('Videogallery')->group(function () {
    Route::get('/videogallery/create', [VideogalleryController::class, 'videogallerycreate'])->name('videogallerycreate');
    Route::post('/videogallery/store', [VideogalleryController::class, 'videoGalleryStore'])->name('videogallerystore');
    Route::get('/videogallery/index', [VideogalleryController::class, 'videoGalleryindex'])->name('videogallery.index');
    Route::get('/videogallery/edit/{id}', [VideogalleryController::class, 'videoGalleryedit'])->name('videogallery.edit');
    Route::get('/videogaller/update/{id}', [VideogalleryController::class, 'videoGalleryupdate'])->name('videogallery.update');
    Route::get('/videogaller/delete/{id}', [VideogalleryController::class, 'videoGallerydelete'])->name('videogallery.delete');
    Route::get('/videogaller/videogallerydetails', [FrontentController::class, 'videogallerydetails'])->name('videogallerydetails');
});

Route::prefix('Profile')->group(function () {
    Route::get('/Profile/create', [ProfileController::class, 'Profilecreate'])->name('profile.create');
    Route::post('/profile/changes', [ProfileController::class, 'Profilechanes'])->name('profile.namechanes');
    Route::post('/password/changes', [ProfileController::class, 'passwordechanes'])->name('password.chanes');
    Route::post('/profile/changes', [ProfileController::class, 'Profilechanes'])->name('profile.namechanes');

});

Route::get('portfolio', [FrontentController::class, 'portfolio'])->name('portfolio');
Route::get('blogdetails', [FrontentController::class, 'blogdetails'])->name('blogdetails');
Route::resource('aboutme', Aboutmecontroller::class);
Route::resource('resum', Resumcontroller::class);
Route::resource('skill', Skillcontroller::class);

