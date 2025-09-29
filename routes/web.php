<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return "Hello world";
});

Route::get('/valami', function () {
    return view('valami');
});
Route::view(uri: '/contact', view: 'contact');

Route::get('/tomb-visszaad',function (): array{
   $tomb = ["kulcs" => "érték"];
   return $tomb;
});

Route::get("/udvozles",  function () {
    $nev = "Gábor";
    $kor = 18;
    return view("udvozollek", [
        "nev" => $nev,
        "kor" => $kor
    ]);

});

Route::get("/bevasarlolista", function (){
$lista = [
    "tejföl",
    "tej",
    "liszt",
    "csoki",
    "dinnye"
    ];
    return view("sajatbevasarlas", [
        "bevasarlolista" => $lista
    ]);
});

Route::get("/felhasznaloiadat", function (){
    return view("userinput",[
        "input" => request("felhasznalonev"),
        "vnev" => request("vezeteknev"),
        "knev" => request("keresztnev"),
    ]);
});

Route::get('posts/{post}', function ($post) {

    $posts = [
        "first" =>'Első blog',
        "second" =>'Második blog',
    ];

    return view('postnezet',[
        'posttartalma' => $posts[$post] ?? "Nincs ilyen blogbejegyzés"
    ]);
});

Route::get('/vezerlo/{post}', [
    'App\Http\Controllers\PostController',
    'show'
]);




