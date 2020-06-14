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
Route::get('/mail', 'mailController@websiteindex')->name('mail');
Route::get('/mail/new', 'mailController@websiteinput');
Route::post('/mail/new', 'mailController@websiteinputpost');
Route::post('/mail/delete', 'mailController@websitedelete');
Route::get('/mail/detail/{id}', 'mailController@websiteview');
Route::post('/mail/detail/{id}', 'mailController@websiteupdate');

// Routes Databases
Route::get('/database', 'databaseController@websiteindex')->name('database');
Route::get('/database/new', 'databaseController@websiteinput');
Route::post('/database/new', 'databaseController@websiteinputpost');
Route::post('/database/delete', 'databaseController@websitedelete');
Route::get('/database/detail/{id}', 'databaseController@websiteview');
Route::post('/database/detail/{id}', 'databaseController@websiteupdate');

// SQL INJECTIONS
Route::get('/sql-injection', 'sqlInjectionController@websiteindex')->name('sql-injection');
Route::get('/sql-injection/new', 'sqlInjectionController@websiteinput');
Route::post('/sql-injection/new', 'sqlInjectionController@websiteinputpost');
Route::post('/sql-injection/delete', 'sqlInjectionController@websitedelete');
Route::get('/sql-injection/detail/{id}', 'sqlInjectionController@websiteview');
Route::post('/sql-injection/detail/{id}', 'sqlInjectionController@websiteupdate');

// XSS
Route::get('/xss', 'xssController@websiteindex')->name('xss');
Route::get('/xss/new', 'xssController@websiteinput');
Route::post('/xss/new', 'xssController@websiteinputpost');
Route::post('/xss/delete', 'xssController@websitedelete');
Route::get('/xss/detail/{id}', 'xssController@websiteview');
Route::post('/xss/detail/{id}', 'xssController@websiteupdate');
