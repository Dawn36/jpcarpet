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
Route::Get('blogs', [WebsiteController::class, 'index'])->name('blogs');
Route::Get('blogs-detail/{id}', [WebsiteController::class, 'blogDetails'])->name('blogs-detail');

Route::middleware(['auth'])->group(function () {
Route::Get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('categories', CategoriesController::class);
Route::resource('user', UserController::class);
Route::resource('blog', BlogController::class);
Route::Get('blog_accept/{id}', [BlogController::class, 'blogAccept'])->name('blog_accept');
Route::Get('blog_reject/{id}', [BlogController::class, 'blogReject'])->name('blog_reject');
Route::Get('blog_pending', [BlogController::class, 'blogPending'])->name('blog_pending');

Route::resource('settings', SettingsController::class);
Route::post('/settings/{id}/updateEmail', [SettingsController::class, 'updateEmail'])->name('updateEmail');
Route::post('/settings/{id}/updatePassword', [SettingsController::class, 'updatePassword'])->name('updatePassword');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');


Route::get('regrout', function () {
    return view('website/regrout');
})->name('regrout');
Route::get('tile-and-grout-cleaning', function () {
    return view('website/tile_and_grout_cleaning');
})->name('tile-and-grout-cleaning');

Route::get('carpet-cleaning', function () {
    return view('website/carpet_cleaning');
})->name('carpet-cleaning');

Route::get('upholstery-cleaning', function () {
    return view('website/upholstery_cleaning');
})->name('upholstery-cleaning');

Route::get('area-rug-cleaning', function () {
    return view('website/area_rug_cleaning');
})->name('area-rug-cleaning');

Route::get('stone-restoration-and-repair', function () {
    return view('website/stone_restoration_and_repair');
})->name('stone-restoration-and-repair');

Route::get('wood-floor-cleaning', function () {
    return view('website/wood_floor_cleaning');
})->name('wood-floor-cleaning');

Route::get('water-damage-restoration', function () {
    return view('website/water_damage_restoration');
})->name('water-damage-restoration');

Route::get('floor-maintenance-services', function () {
    return view('website/floor_maintenance_services');
})->name('floor-maintenance-services');

Route::get('encino-upholstery-cleaning', function () {
    return view('website/encino_upholstery_cleaning');
})->name('encino-upholstery-cleaning');

Route::get('carpet-cleaning-studio-city', function () {
    return view('website/carpet_cleaning_studio_city');
})->name('carpet-cleaning-studio-city');

Route::get('woodland-hills-carpet-cleaning', function () {
    return view('website/woodland_hills_carpet_cleaning');
})->name('woodland-hills-carpet-cleaning');

Route::get('brentwood-area-rug-cleaning', function () {
    return view('website/brentwood_area_rug_cleaning');
})->name('brentwood-area-rug-cleaning');

Route::get('beverly-hills-floor-restoration', function () {
    return view('website/beverly_hills_floor_restoration');
})->name('beverly-hills-floor-restoration');

Route::get('culver-city-tile-cleaning', function () {
    return view('website/culver_city_tile_cleaning');
})->name('culver-city-tile-cleaning');

Route::get('santa-monica-floor-cleaning', function () {
    return view('website/santa_monica_floor_cleaning');
})->name('santa-monica-floor-cleaning');

Route::get('los-angeles-carpet-floor-care', function () {
    return view('website/los_angeles_carpet_floor_care');
})->name('los-angeles-carpet-floor-care');

Route::get('hollywood-floor-cleaning', function () {
    return view('website/hollywood_floor_cleaning');
})->name('hollywood-floor-cleaning');

Route::get('carpet-cleaning-burbank', function () {
    return view('website/carpet_cleaning_burbank');
})->name('carpet-cleaning-burbank');

Route::get('glendale-carpet-cleaning', function () {
    return view('website/glendale_carpet_cleaning');
})->name('glendale-carpet-cleaning');

Route::get('pasadena-floor-cleaning', function () {
    return view('website/pasadena_floor_cleaning');
})->name('pasadena-floor-cleaning');

Route::get('northridge-floor-restoration', function () {
    return view('website/northridge_floor_restoration');
})->name('northridge-floor-restoration');

Route::get('granada-hills-carpet-cleaning', function () {
    return view('website/granada_hills_carpet_cleaning');
})->name('granada-hills-carpet-cleaning');

Route::get('porter-ranch-floor-restoration', function () {
    return view('website/porter_ranch_floor_restoration');
})->name('porter-ranch-floor-restoration');

Route::get('testimonials', function () {
    return view('website/testimonials');
})->name('testimonials');

Route::get('about', function () {
    return view('website/about');
})->name('about');

Route::get('contact', function () {
    return view('website/contact');
})->name('contact');

Route::get('service-areas', function () {
    return view('website/service_areas');
})->name('service-areas');

Route::get('faq', function () {
    return view('website/faq');
})->name('faq');

Route::get('services', function () {
    return view('website/services');
})->name('services');

Route::get('specials', function () {
    return view('website/specials');
})->name('specials');

Route::get('gallery', function () {
    return view('website/gallery');
})->name('gallery');




require __DIR__.'/auth.php';
