<?php

Route::get('/', function()
{
    return View::make('pages.home');
});
Route::get('about', function()
{
    return View::make('pages.about');
});
Route::get('projects', function()
{
    return View::make('pages.projects');
});
Route::get('connect', function()
{
    return View::make('pages.connect');
});
Route::get('connect', function () {
    return view('pages.connect');
});