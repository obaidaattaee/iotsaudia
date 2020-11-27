<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GovermentController;

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


Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
], function () {
    // start settings routes
	Route::get("settings", "SettingController@index")->name("settings.index");
	Route::post("settings", "SettingController@save")->name("settings.save");
    // end settings routes
    Route::get("about", [\App\Http\Controllers\Frontend\AboutController::class , 'index'])->name("about.index");
    Route::post("about", [\App\Http\Controllers\Frontend\AboutController::class , 'save'])->name("about.save");


    Route::get('contacts' , [\App\Http\Controllers\Frontend\HomePageController::class , 'contacts'])->name('contacts.index') ;

    // start advantage routes
    Route::get('advantages' , [\App\Http\Controllers\AdvantageController::class , 'index'])->name('advantages.index') ;
    Route::get('advantages/create' , [\App\Http\Controllers\AdvantageController::class , 'create'])->name('advantages.create') ;
    Route::post('advantages/save' , [\App\Http\Controllers\AdvantageController::class , 'store'])->name('advantages.save') ;
    Route::post('advantages/{advantage}' , [\App\Http\Controllers\AdvantageController::class , 'update'])->name('advantages.update') ;
    Route::get('advantages/{advantage}' , [\App\Http\Controllers\AdvantageController::class , 'edit'])->name('advantages.edit') ;
    Route::get('advantages/{advantage}/delete' , [\App\Http\Controllers\AdvantageController::class , 'delete'])->name('advantages.delete') ;
    // end advantage routes
    // start chances routes
    Route::get('chances' , [\App\Http\Controllers\ChanceController::class , 'index'])->name('chances.index') ;
    Route::get('chances/create' ,  [\App\Http\Controllers\ChanceController::class , 'create'])->name('chances.create') ;
    Route::post('chances/save' ,  [\App\Http\Controllers\ChanceController::class, 'store'])->name('chances.save') ;
    Route::post('chances/{chance}' , [\App\Http\Controllers\ChanceController::class, 'update'])->name('chances.update') ;
    Route::get('chances/{chance}' , [\App\Http\Controllers\ChanceController::class, 'edit'])->name('chances.edit') ;
    Route::get('chances/{chance}/delete' ,  [\App\Http\Controllers\ChanceController::class , 'delete'])->name('chances.delete') ;
    // end chances route
    // end advantage routes
    // start chances routes
    Route::get('goverment' , [\App\Http\Controllers\GovermentController::class , 'index'])->name('goverment.index') ;
    Route::get('goverment/create' ,  [\App\Http\Controllers\GovermentController::class , 'create'])->name('goverment.create') ;
    Route::post('goverment/save' ,  [\App\Http\Controllers\GovermentController::class, 'store'])->name('goverment.save') ;
    Route::post('goverment/{chance}' , [\App\Http\Controllers\GovermentController::class, 'update'])->name('goverment.update') ;
    Route::get('goverment/{chance}' , [\App\Http\Controllers\GovermentController::class, 'edit'])->name('goverment.edit') ;
    Route::get('goverment/{chance}/delete' ,  [\App\Http\Controllers\GovermentController::class , 'delete'])->name('goverment.delete') ;
    // end chances route
    // // start statistics routes
    Route::get('statistics' , [\App\Http\Controllers\StatistacController::class , 'index'])->name('statistics.index') ;
    Route::get('statistics/create' ,  [\App\Http\Controllers\StatistacController::class , 'create'])->name('statistics.create') ;
    Route::post('statistics/save' ,  [\App\Http\Controllers\StatistacController::class, 'store'])->name('statistics.save') ;
    Route::post('statistics/{statistac}' , [\App\Http\Controllers\StatistacController::class, 'update'])->name('statistics.update') ;
    Route::get('statistics/{statistac}' , [\App\Http\Controllers\StatistacController::class, 'edit'])->name('statistics.edit') ;
    Route::get('statistics/{statistac}/delete' ,  [\App\Http\Controllers\StatistacController::class , 'delete'])->name('statistics.delete') ;
    // end statistics routes //
    // // start statistics routes
    Route::get('usage' , [\App\Http\Controllers\Iot_usageController::class , 'index'])->name('usage.index') ;
    Route::get('usage/create' ,  [\App\Http\Controllers\Iot_usageController::class , 'create'])->name('usage.create') ;
    Route::post('usage/save' ,  [\App\Http\Controllers\Iot_usageController::class, 'store'])->name('usage.save') ;
    Route::post('usage/{usage}' , [\App\Http\Controllers\Iot_usageController::class, 'update'])->name('usage.update') ;
    Route::get('usage/{usage}' , [\App\Http\Controllers\Iot_usageController::class, 'edit'])->name('usage.edit') ;
    Route::get('usage/{usage}/delete' ,  [\App\Http\Controllers\Iot_usageController::class , 'delete'])->name('usage.delete') ;
    // end statistics routes //
    // // start images routes
    Route::get('images' , [\App\Http\Controllers\ImageController::class , 'index'])->name('images.index') ;
    Route::get('images/create' ,  [\App\Http\Controllers\ImageController::class , 'create'])->name('images.create') ;
    Route::post('images/save' ,  [\App\Http\Controllers\ImageController::class, 'store'])->name('images.save') ;
    Route::post('images/{image}' , [\App\Http\Controllers\ImageController::class, 'update'])->name('images.update') ;
    Route::get('images/{image}' , [\App\Http\Controllers\ImageController::class, 'edit'])->name('images.edit') ;
    Route::get('images/{image}/delete' ,  [\App\Http\Controllers\ImageController::class , 'delete'])->name('images.delete') ;
    // end images routes
});
Route::get("/", [\App\Http\Controllers\Frontend\HomePageController::class , 'index'])->name('home');
Route::get("contact", [\App\Http\Controllers\Frontend\HomePageController::class , 'contact'])->name('contact');
Route::get("about", [\App\Http\Controllers\Frontend\HomePageController::class , 'about'])->name('about');
Route::post("contact", [\App\Http\Controllers\Frontend\HomePageController::class , 'contactSave'])->name('contact.save');
Route::get("advantage", [\App\Http\Controllers\Frontend\HomePageController::class , 'advantage'])->name('advantage');
Route::get("usages", [\App\Http\Controllers\Frontend\HomePageController::class , 'usage'])->name('usages');
Route::get("advantage/{advantage}", [\App\Http\Controllers\Frontend\HomePageController::class , 'singleAdvantage'])->name('advantage.single');
Route::get("chance/{chance}", [\App\Http\Controllers\Frontend\HomePageController::class , 'singleChance'])->name('chance.single');
Route::get('home' , function(){
return redirect(route("home"));
});