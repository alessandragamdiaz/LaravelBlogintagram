<?php
use App\Mail\NewUSerWelcomeMail;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\controllers\PostsController;
use App\Http\controllers\FollowsController;

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



Auth::routes();
Route::get('/email', function () {

    return new NewUSerWelcomeMail();
});
 
Route::post('follow/{user}', 'App\Http\controllers\FollowsController@store');
Route::get('/','App\Http\controllers\PostsController@index');
Route::get('p/create', 'App\Http\controllers\PostsController@create');
Route::post('p', 'App\Http\controllers\PostsController@store');
Route::get('/p/{post}', 'App\Http\controllers\PostsController@show');
Route::get('/profile/{user}', 'App\Http\controllers\ProfilesController@index')->name('profile.index');
Route::get('/profile/{user}/edit', 'App\Http\controllers\ProfilesController@edit')->name('profile.edit');
Route::patch('/profile/{user}', 'App\Http\controllers\ProfilesController@update')->name('profile.update');

