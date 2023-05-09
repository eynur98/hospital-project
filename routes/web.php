<?php

use App\Http\Controllers\back\AuthController;
use App\Http\Controllers\back\NewsController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\front\AuthController as FrontAuthController;
use App\Http\Controllers\front\CartController;
use App\Http\Controllers\front\HomeController;
use App\Http\Controllers\PaginationController;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

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
// Route::get('/', function () {
//     return redirect(app()->getLocale() . RouteServiceProvider::HOME);

// });
//Paginator
Route::get('pagination', [PaginationController::class, 'index']);


// Route::prefix('{locale}')
//     ->where(['locale' => '[a-zA-Z]{2}'])
//     ->middleware('setlocale')
//     ->group(function () {
//front
Route::get('/', [HomeController:: class, 'index'])->name('home');
Route::get('/news1/{slug}', [HomeController:: class, 'news'])->name('news');
Route::get('/doctors/{slug}', [HomeController:: class, 'doctor'])->name('doctors');
Route::get('/blogs', [HomeController:: class, 'blog'])->name('blog');
Route::get('/blogs/{slug}', [HomeController:: class, 'blog_detail'])->name('blog.detail');


Route::get('/news-detail/{slug}', [HomeController:: class, 'newsDetail'])->name('news.detail');
Route::get('/doctor-detail/{slug}', [HomeController:: class, 'doctor_detail'])->name('doctor.detail');
Route::get('/about1', [HomeController:: class, 'about'])->name('about');
Route::get('/elaqe', [HomeController:: class, 'elaqe'])->name('elaqe');
Route::get('/videos', [HomeController:: class, 'video_gallery'])->name('video.gallery');
Route::get('/images', [HomeController:: class, 'image_gallery'])->name('image.gallery');
Route::get('/service1/{slug}', [HomeController:: class, 'service_detail'])->name('service.detail');



//});
Route::post('/comment', [HomeController:: class, 'comment'])->name('comment');
Route::get('/search', [HomeController:: class, 'search'])->name('search');






/* }); */
Route::delete('delete-appointment/{id}', [App\Http\Controllers\back\AppointmentController::class, 'delete'])->name('appointment.destroy');
Route::post('create-appointment', [App\Http\Controllers\back\AppointmentController::class, 'store'])->name('appointment.add');
Route::get('appointment', [App\Http\Controllers\back\AppointmentController::class, 'index'])->name('appointment.index');
Route::get('/comment/{id}', [NewsController:: class, 'comment'])->name('news.comment');
Route::post('/comment-status/{id}', [NewsController:: class, 'comment_status'])->name('comment.status');
Route::delete('/comment-delete/{id}', [NewsController:: class, 'comment_destroy'])->name('comment.destroy');




Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();

 
});
