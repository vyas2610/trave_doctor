<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(["prefix" => 'travel-admin'], function () {
    Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
    Route::post('/login', [LoginController::class, 'doLogin'])->name('login.post');

    Route::group(['middleware' => 'auth', 'as' => 'admin.'], function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        //Route::get('/', [CategoryController::class, 'index'])->name('category');
        Route::get('/logout', function () {
            Auth::logout();
            return redirect(route('login'))->with('success', 'Success! You\'ve logged out.');
        })->name('logout');

        Route::resources([
            'page'          => PageController::class,
            'slider'        => SliderController::class,
            'product'       => ProductController::class,
            'category'      => CategoryController::class,
            'gallery'       => GalleryController::class,


        ]);
        /* Route::get('/', function () {
            return view('resources.views.product.index');
        })->name('product.index');*/
        Route::delete('slider/{id}', [SliderController::class, 'delete'])->name('slider.delete');
    });
});

Route::get('/', function () {
    return view('web.pages.home.index');
})->name('home');

Route::get('/about-us', function () {
    return view('web.pages.about.index');
})->name('about.index');

Route::get('/faq', function () {
    return view('web.pages.faq.index');
})->name('faq.index');

Route::get('/contact-us', function () {
    return view('web.pages.contact.index');
})->name('contact.index');

Route::get('/visa', function () {
    return view('web.pages.visa.index');
})->name('visa.index');

Route::get('/visa-details', function () {
    return view('web.pages.visa.view');
})->name('visa.view');

Route::get('/blogs', function () {
    return view('web.pages.blogs.index');
})->name('blog.index');

Route::get('/single-blog', function () {
    return view('web.pages.blogs.view');
})->name('single-blog.view');

Route::get('/country-details', function () {
    return view('web.pages.country.index');
})->name('country.index');
