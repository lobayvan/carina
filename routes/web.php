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

Route::get('/', 'mainController@index')->name('home');

// Routes Shell
Route::get('/shell', 'shellController@shellindex')->name('shell');
Route::get('/shell/new', 'shellController@shellinput');
Route::get('/shell/source', 'shellController@shellsource');
Route::post('/shell/new', 'shellController@shellinputpost');
Route::post('/shell/delete', 'shellController@shelldelete');
Route::get('/shell/detail/{id}', 'shellController@shellview');
Route::post('/shell/detail/{id}', 'shellController@shellupdate');
Route::post('/shell/check', 'shellController@shellcheckjq')->name('shell_cekjq');

// Routes VPS
Route::get('/vps', 'vpsController@vpsindex')->name('vps');
Route::get('/vps/new', 'vpsController@vpsinput');
Route::post('/vps/new', 'vpsController@vpsinputpost');
Route::post('/vps/delete', 'vpsController@vpsdelete');
Route::get('/vps/detail/{id}', 'vpsController@vpsview');
Route::post('/vps/detail/{id}', 'vpsController@vpsupdate');

// Routes cPanels
Route::get('/cpanel', 'cpanelController@cpanelindex')->name('cpanel');
Route::get('/cpanel/new', 'cpanelController@cpanelinput');
Route::post('/cpanel/new', 'cpanelController@cpanelinputpost');
Route::post('/cpanel/delete', 'cpanelController@cpaneldelete');
Route::get('/cpanel/detail/{id}', 'cpanelController@cpanelview');
Route::post('/cpanel/detail/{id}', 'cpanelController@cpanelupdate');

// Routes Websites
Route::get('/website', 'websiteController@websiteindex')->name('website');
Route::get('/website/new', 'websiteController@websiteinput');
Route::post('/website/new', 'websiteController@websiteinputpost');
Route::post('/website/delete', 'websiteController@websitedelete');
Route::get('/website/detail/{id}', 'websiteController@websiteview');
Route::post('/website/detail/{id}', 'websiteController@websiteupdate');

// Routes Mails
Route::get('/mail', 'websiteController@websiteindex')->name('mail');
Route::get('/mail/new', 'websiteController@websiteinput');
Route::post('/mail/new', 'websiteController@websiteinputpost');
Route::post('/mail/delete', 'websiteController@websitedelete');
Route::get('/mail/detail/{id}', 'websiteController@websiteview');
Route::post('/mail/detail/{id}', 'websiteController@websiteupdate');

// Routes Databases
Route::get('/database', 'websiteController@websiteindex')->name('database');
Route::get('/database/new', 'websiteController@websiteinput');
Route::post('/database/new', 'websiteController@websiteinputpost');
Route::post('/database/delete', 'websiteController@websitedelete');
Route::get('/database/detail/{id}', 'websiteController@websiteview');
Route::post('/database/detail/{id}', 'websiteController@websiteupdate');

// SQL INJECTIONS
Route::get('/sql-injection', 'websiteController@websiteindex')->name('sql-injection');
Route::get('/sql-injection/new', 'websiteController@websiteinput');
Route::post('/sql-injection/new', 'websiteController@websiteinputpost');
Route::post('/sql-injection/delete', 'websiteController@websitedelete');
Route::get('/sql-injection/detail/{id}', 'websiteController@websiteview');
Route::post('/sql-injection/detail/{id}', 'websiteController@websiteupdate');

// XSS
Route::get('/xss', 'websiteController@websiteindex')->name('xss');
Route::get('/xss/new', 'websiteController@websiteinput');
Route::post('/xss/new', 'websiteController@websiteinputpost');
Route::post('/xss/delete', 'websiteController@websitedelete');
Route::get('/xss/detail/{id}', 'websiteController@websiteview');
Route::post('/xss/detail/{id}', 'websiteController@websiteupdate');