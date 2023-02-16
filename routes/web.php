<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\BlogController;
use App\Http\Controllers\Client\SitemapController;
use App\Http\Controllers\Client\MainController;
use App\Http\Controllers\Client\LocationController;
use App\Http\Controllers\Client\ServiceController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [MainController::class, 'index'])->name('index');

Route::get('test-mail', [MainController::class, 'test_mail'])->name('test-mail');

Route::get('/config-cache', function() {
    $exitCode = Artisan::call('config:cache');
    $exitCode = Artisan::call('cache:clear');
    return '<h1>Clear Config cleared</h1>';
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::group(['prefix' => 'sitemap'], function(){
    Route::get('/', [SitemapController::class, 'index'])->name('sitemap.index');
    Route::get('/services', [SitemapController::class, 'services'])->name('sitemap.services');
    Route::get('/blogs', [SitemapController::class, 'blogs'])->name('sitemap.blogs');
});

Route::get('blog', [BlogController::class, 'index'])->name('blog');
Route::get('blog/{slug}', [BlogController::class, 'details'])->name('blog.details');

Route::get('location', [LocationController::class, 'index'])->name('location');
Route::get('location/{slug}', [LocationController::class, 'details'])->name('location.details')->where('slug', '(.*)');

Route::get('service', [ServiceController::class, 'index'])->name('service');

Route::get('contact-us', [MainController::class, 'contact_us'])->name('contact-us');
Route::get('partners', [MainController::class, 'partners'])->name('partners');

Route::get('/thankyou', function () {
    return view('client.thankyou');
})->name('thankyou');

Route::post('contact/save', [MainController::class, 'contact_save'])->name('contact.save');
Route::post('partner/save', [MainController::class, 'partner_save'])->name('partner.save');

Route::get('company/{slug}', [MainController::class, 'view_page'])->name('view-page');

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';

Route::get('{slug?}', function(Illuminate\Http\Request $request, $slug){
    $from_url = str_replace(url('/').'/', '', $request->fullUrl());
    $check_redirect = \DB::table('redirects')->where('redirect_from', $from_url)->first();
    if($check_redirect)
    {
        if($check_redirect->redirect_to == '')
            return Redirect::to(url('/'), 301);
        else
            return Redirect::to(url($check_redirect->redirect_to), 301);
    }
    return abort('404');
})->where('slug', '(.*)')->name('redirects');
