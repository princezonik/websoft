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

//Route::get('/', function () {
  // return view('welcome');
//});



//Route::get('user/{name?}',function($name = 'Virat Gandhi'){
//	echo "Name: ".$name;
//});

//Route::get('role', [
//	'middleware' => 'Role:editor',
//	'uses'			=> 'TestController@index',
//]);

/* Route::get('ID/{id}',function($id){
	echo "ID: ".$id;
});*/

/*Route::get('terminate',[
	'middleware' => 'terminate',
	'uses'			=> 'ABCController@index',
])*/

/*Route::get('/usercontroller/path', ['middleware' => 'First',
	'uses'			=> 'UserController@showPath'

]);*/

Route::resource('my','MyController');

?>