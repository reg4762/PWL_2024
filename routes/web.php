<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PhotoController;

Route::resource('photos', PhotoController::class);  

Route::resource('photos', PhotoController::class)->only([ 'index', 'show'
]);

Route::resource('photos', PhotoController::class)->except([ 'create', 'store', 'update', 'destroy'
]);

Route::get('/', [HomeController::class,'index']);

Route::get('/about', [AboutController::class,'about']);

Route::get('/articles/{id}', [ArticleController::class,'articles']);

// Route::get('/', [PageController::class,'index']);

// Route::get('/about', [PageController::class,'about']);

// Route::get('/articles/{id}', [PageController::class,'articles']);

Route::get('/hello', [WelcomeController::class,'hello']);

Route::get('/user/{name?}', function ($name='John') { 
    return 'Nama saya '.$name;
});

// Route::get('/user/{name?}', function ($name=null) {
//     return 'Nama saya '.$name;
// });

// Route::get('/articles/{id} ', function ($id) { 
//     return 'Halaman Artikel dengan ID '.$id;
// });

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
    });
    
Route::get('/user/{name}', function ($name) { 
    return 'Nama Saya '.$name;
});

// Route::get('/', function () { 
//     return 'Selamat Datang';
// });

// Route::get('/about', function () { 
//     return 'NIM: 2241720137, Nama:Regita Delya Putri';
// });

Route::get('/world', function () { 
    return 'World';
});

// Route::get('/hello', function () {
//  return 'Hello World';
// });

