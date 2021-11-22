<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\LinksController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

Route::get('salut', function (){
    return 'Salut les gens';
});

Route::get('salut/{name}', function ($name){
    return "salut $name";
});

Route::get('article/{slug}-{id}', ['as' => 'article',function ($slug,$id){
    //return "Slug: $name,Id: $id";
    return "Lien: " . route("article", ["slug" => "diff", "id" => $id]);
}])->where('name','[a-zA-Z0-9\-]+')->where('id','[0-9]+');


/*Route::group(['prefix' => 'admin', 'middleware' => 'ip'], function(){
    Route::get('bonjour', function(){
        return 'Bonjour';
    });
});*/

Route::get('a-propos',[PagesController::class,'about']);
Route::get('contact',[PagesController::class,'contact']);




Route::get('links/create', 'App\Http\Controllers\LinksController@create');
Route::post('links/create',[LinksController::class,'store']);
Route::get('r/{id}',[LinksController::class,'show'])->where('id','[0-9]+');


route::resource('news','App\Http\Controllers\PostsController');


#\Illuminate\Support\Facades\Auth::routes();

route::group(['namespace' => '\App\Http\Controllers\Admin', 'prefix' => 'admin'], function(){
    route::resource('posts',PostsController::class);
});


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

route::resource('postsadmin',\App\Http\Controllers\Admin\PostsController::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
