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

Route::get('competences', 'CompetencesController@index');
Route::get('formation', 'FormationController@index');
Route::get('index', 'IndexController@index');
Route::get('/', 'LoadingController@index');
Route::get('personnal', 'PersonnalController@index');
Route::get('projects-open', 'ProjectsOpenController@index');
Route::get('projects', 'ProjectsController@index');

Route::get('contact', 'ContactController@create');
Route::post('contact', 'ContactController@store');
