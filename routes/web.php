<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('about', function () {
    return view('about') ;
})->name('about');
Route::get('/home', function () {

    $blogs = [
        [
            'Title' => 'Title One',
            "Body" => 'This Section Body One'
        ],
        [
            'Title' => 'Title Two',
            "Body" => 'This Section Body Two'
        ],
        [
            "Title" => "Title Three",
            "Body" => "This Section Body Three"
        ],
        [
            "Title" => "Title For",
            "Body" => "This Section Body For"
        ]
    ];

    return view('home', compact('blogs'));

});
Route::get('nama', function () {
    return '<h1>nama Page</h1>';
});
