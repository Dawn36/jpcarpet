<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', function () {
    return view('website/home');
});

Route::resource('contact_us', ContactUsController::class);
Route::Get('blog.html', [WebsiteController::class, 'index'])->name('blog.html');
Route::Get('blogs-detail/{name}', [WebsiteController::class, 'blogDetails'])->name('blogs-detail');

Route::middleware(['auth'])->group(function () {
Route::Get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('categories', CategoriesController::class);
Route::resource('user', UserController::class);
Route::resource('blogs', BlogController::class);
Route::Get('blog_accept/{id}', [BlogController::class, 'blogAccept'])->name('blog_accept');
Route::Get('blog_reject/{id}', [BlogController::class, 'blogReject'])->name('blog_reject');
Route::Get('blog_pending', [BlogController::class, 'blogPending'])->name('blog_pending');

Route::resource('settings', SettingsController::class);
Route::post('/settings/{id}/updateEmail', [SettingsController::class, 'updateEmail'])->name('updateEmail');
Route::post('/settings/{id}/updatePassword', [SettingsController::class, 'updatePassword'])->name('updatePassword');
});



Route::get('regrout.html', function () {
    return view('website/regrout');
})->name('regrout.html');

Route::get('tile-and-grout-cleaning.html', function () {
    return view('website/tile_and_grout_cleaning');
})->name('tile-and-grout-cleaning.html');

Route::get('carpet-cleaning.html', function () {
    return view('website/carpet_cleaning');
})->name('carpet-cleaning.html');

Route::get('upholstery-cleaning.html', function () {
    return view('website/upholstery_cleaning');
})->name('upholstery-cleaning.html');

Route::get('area-rug-cleaning.html', function () {
    return view('website/area_rug_cleaning');
})->name('area-rug-cleaning.html');

Route::get('stone-restoration-and-repair.html', function () {
    return view('website/stone_restoration_and_repair');
})->name('stone-restoration-and-repair.html');

Route::get('wood-floor-cleaning.html', function () {
    return view('website/wood_floor_cleaning');
})->name('wood-floor-cleaning.html');

Route::get('water-damage-restoration.html', function () {
    return view('website/water_damage_restoration');
})->name('water-damage-restoration.html');

Route::get('floor-maintenance-services.html', function () {
    return view('website/floor_maintenance_services');
})->name('floor-maintenance-services.html');

Route::get('encino-upholstery-cleaning.html', function () {
    return view('website/encino_upholstery_cleaning');
})->name('encino-upholstery-cleaning.html');

Route::get('carpet-cleaning-studio-city.html', function () {
    return view('website/carpet_cleaning_studio_city');
})->name('carpet-cleaning-studio-city.html');

Route::get('woodland-hills-carpet-cleaning.html', function () {
    return view('website/woodland_hills_carpet_cleaning');
})->name('woodland-hills-carpet-cleaning.html');

Route::get('brentwood-area-rug-cleaning.html', function () {
    return view('website/brentwood_area_rug_cleaning');
})->name('brentwood-area-rug-cleaning.html');

Route::get('beverly-hills-floor-restoration.html', function () {
    return view('website/beverly_hills_floor_restoration');
})->name('beverly-hills-floor-restoration.html');

Route::get('culver-city-tile-cleaning.html', function () {
    return view('website/culver_city_tile_cleaning');
})->name('culver-city-tile-cleaning.html');

Route::get('santa-monica-floor-cleaning.html', function () {
    return view('website/santa_monica_floor_cleaning');
})->name('santa-monica-floor-cleaning.html');

Route::get('los-angeles-carpet-floor-care.html', function () {
    return view('website/los_angeles_carpet_floor_care');
})->name('los-angeles-carpet-floor-care.html');

Route::get('hollywood-floor-cleaning.html', function () {
    return view('website/hollywood_floor_cleaning');
})->name('hollywood-floor-cleaning.html');

Route::get('carpet-cleaning-burbank.html', function () {
    return view('website/carpet_cleaning_burbank');
})->name('carpet-cleaning-burbank.html');

Route::get('glendale-carpet-cleaning.html', function () {
    return view('website/glendale_carpet_cleaning');
})->name('glendale-carpet-cleaning.html');

Route::get('pasadena-floor-cleaning.html', function () {
    return view('website/pasadena_floor_cleaning');
})->name('pasadena-floor-cleaning.html');

Route::get('northridge-floor-restoration.html', function () {
    return view('website/northridge_floor_restoration');
})->name('northridge-floor-restoration.html');

Route::get('granada-hills-carpet-cleaning.html', function () {
    return view('website/granada_hills_carpet_cleaning');
})->name('granada-hills-carpet-cleaning.html');

Route::get('porter-ranch-floor-restoration.html', function () {
    return view('website/porter_ranch_floor_restoration');
})->name('porter-ranch-floor-restoration.html');

Route::get('testimonials.html', function () {
    return view('website/testimonials');
})->name('testimonials.html');

Route::get('about.html', function () {
    return view('website/about');
})->name('about.html');

Route::get('contact.html', function () {
    return view('website/contact');
})->name('contact.html');

Route::get('service-areas.html', function () {
    return view('website/service_areas');
})->name('service-areas.html');

Route::get('faq.html', function () {
    return view('website/faq');
})->name('faq.html');

Route::get('services.html', function () {
    return view('website/services');
})->name('services.html');

Route::get('specials.html', function () {
    return view('website/specials');
})->name('specials.html');

Route::get('gallery.html', function () {
    return view('website/gallery');
})->name('gallery.html');


Route::get('amp/index.html', function () {
    return view('amp/index');
})->name('amp/index.html');

Route::get('amp/area-rug-cleaning.html', function () {
    return view('amp/area-rug-cleaning');
})->name('amp/area-rug-cleaning.html');

Route::get('amp/carpet-cleaning.html', function () {
    return view('amp/carpet-cleaning');
})->name('amp/carpet-cleaning.html');

Route::get('amp/upholstery-cleaning.html', function () {
    return view('amp/upholstery-cleaning');
})->name('amp/upholstery-cleaning.html');

Route::get('amp/tile-and-grout-cleaning.html', function () {
    return view('amp/tile-and-grout-cleaning');
})->name('amp/tile-and-grout-cleaning.html');

Route::get('amp/stone-restoration-and-repair.html', function () {
    return view('amp/stone-restoration-and-repair');
})->name('amp/stone-restoration-and-repair.html');

Route::get('amp/regrout.html', function () {
    return view('amp/regrout');
})->name('amp/regrout.html');

Route::get('amp/wood-floor-cleaning.html', function () {
    return view('amp/wood-floor-cleaning');
})->name('amp/wood-floor-cleaning.html');

Route::get('amp/water-damage-restoration.html', function () {
    return view('amp/water-damage-restoration');
})->name('amp/water-damage-restoration.html');

Route::get('amp/floor-maintenance-services.html', function () {
    return view('amp/floor-maintenance-services');
})->name('amp/floor-maintenance-services.html');



require __DIR__.'/auth.php';
