<?php
use Illuminate\Http\Request;
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

Route::get('/','PostsController@Login');
Route::get('/new','PostsController@New');
Route::post('/next','PostsController@Next');
Route::post('/main','PostsController@Main');

//何か機能を追加した場合Pagingを読ませないとページング機能が動かないくなる。
Route::get('/next','MainController@Paging');
Route::get('/main','MainController@Paging');
Route::get('/main_input','MainController@Paging');


Route::post('/main_input','MainController@Main_input');
Route::get('/user/history','MainController@User_history');
Route::get('{word?}','MainController@Serch_Paging');


Route::post('/answer','SlatsController@Switch');

Route::post('/reply','SlatsController@Reply');

Route::get('/Q&A/{id?}','SlatsController@Slat');


 Route::get('/test/test','MainController@S');

