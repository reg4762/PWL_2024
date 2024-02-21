<?php

use Illuminate\Support\Facades\Route;

Route::get('/user/{name?}', function ($name='John') { 
    return 'Nama saya '.$name;
});

// Route::get('/user/{name?}', function ($name=null) {
//     return 'Nama saya '.$name;
// });

Route::get('/articles/{id} ', function ($id) { 
    return 'Halaman Artikel dengan ID '.$id;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
    });
    
Route::get('/user/{name}', function ($name) { 
    return 'Nama Saya '.$name;
});

Route::get('/', function () { 
    return 'Selamat Datang';
});

Route::get('/about', function () { 
    return 'NIM: 2241720137, Nama:Regita Delya Putri';
});

Route::get('/world', function () { 
    return 'World';
});

Route::get('/hello', function () {
 return 'Hello World';
});

