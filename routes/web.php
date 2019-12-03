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

Route::get('/', function () {
    return view('welcome');
});


//-----------------Room operations
Route::get('/room',function(){
    return view('room/index');
});
Route::get('/room/new',function(){
    return view('room/new');
});
Route::post('/room/new','RoomController@save');
Route::get('/room/list','RoomController@list');

Route::get('/room/show/{id}','RoomController@show');
Route::post ('/room/edit','RoomController@edit');
Route::get('/room/delete/{id}','RoomController@delete');



Route::post('test',function(Request $request){
    if($request->isMethod('post')){
      return $request;
    }
    elseif($request->isMethod('get')){
        return "get";
    }
});
