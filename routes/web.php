<?php

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
Route::get('/home', function () {
    return view('/forms/home');
});

Route::get('/entry', function () {
    return view('/forms/entry');
});
Route::get('/forms/aboutme', function () {
    return view('/forms/aboutme');
});

Route::get('/aboutme', function () {
    return view('/forms/aboutme');
});
Route::get('/skills', function () {
    return view('/forms/skills');
});
Route::get('/resumes', function () {
    return view('/forms/resumes');
});
Route::get('/portfolio', function () {
    return view('/forms/portfolio');
});
Route::get('/contactme', function () {
    return view('/forms/contactme');
});
Route::get('/hireme', function () {
    return view('/forms/hireme');
});
Route::get('/reference', function () {
    return view('/forms/reference');
});
Route::get('/websites', function () {
    return view('/forms/websites');
});
Route::get('/apps', function () {
    return view('/forms/apps');
});
Route::get('/design', function () {
    return view('/forms/design');
});
Route::get('/photography', function () {
    return view('/forms/photography');
});
Route::get('/blog', function () {
    return view('/forms/blog');
});

Route::get('/aboutme', function () {

    $name = DB::table('checkin')->get()->where('IDGenerated', '=', 1);

    return view('/forms/aboutme', ['name' => $name]);
});
Route::get('/AdminAbout', function () {

    $name = DB::table('checkin')->get()->where('IDGenerated', '=', 1);

    return view('/forms/AdminAbout', ['name' => $name]);
});

Route::get('/Adminlogin', function () {

    $name = DB::table('checkin')->get()->where('IDGenerated', '=', 1);

    return view('/forms/Adminlogin', ['name' => $name]);
});

Route::get('/Adminresume', function () {
    return view('/forms/Adminresume');
});
Route::get('/Adminhireme', function () {
    return view('/forms/Adminhireme');
});
Route::get('/Adminreference', function () {
    return view('/forms/Adminreference');
});
Route::get('/Adminskills', function () {
    return view('/forms/Adminskills');
});
Route::get('/DownloadCVportfolio', function () {
    return view('/forms/DownloadCVportfolio');
});
Route::post('/AdminAboutExternal', function () {
    return view('/forms/AdminAboutExternal');
});

Route::get('index', 'FormController@index');
Route::resource('forms','FormController');

Route::post('AdminAbout', 'FormController@adminabout');
Route::post('/send/contactme', 'FormController@sendemail');
Route::post('entry', 'FormController@login');
Route::post('Adminhireme', 'FormController@adminhiremeinsert');
Route::post('Adminlogin', 'FormController@adminadminresume');
Route::post('Adminresume', 'FormController@logindetails');
Route::post('Adminreference', 'FormController@adminref');
Route::post('Adminskills', 'FormController@skills');
Route::post('DownloadCVportfolio', 'FormController@adminportfolio');
Route::post('/contactme', function(Request $request) {
   Mail::send(new ContactMail($request));
   return redirect('/contactme');
});