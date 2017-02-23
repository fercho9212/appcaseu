<?php
use \App\Models\Role;
use \App\Models\User;
use App\Models\Funcionality;
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
    return view('admin.dashboard.index');
});
Route::get('user',function(){
  $user=new User();
  $user->name='ferney';
  $user->email='email';
  $user->password='dasdasd';
  $user->save();
});
Route::get('prueba',function(){
  $owner = new Role();
  $owner->name         = 'o';
  $owner->display_name = 'Project Owner'; // optional
  $owner->description  = 'User is the owner of a given project'; // optional
  $owner->save();

  $admin = new Role();
  $admin->name         = 'Pend';
  $admin->display_name = 'User Administrator'; // optional
  $admin->description  = 'User is allowed to manage and edit other users'; // optional
  $admin->save();

});

Route::group(['prefix'=>'admin'],function(){
  Route::get('requirements/list','Admin\RequirementsController@list');
  Route::resource('requirements', 'Admin\RequirementsController');
  Route::get('requirement','Admin\RequirementsController@list_requerimient');
  Route::get('requirements/load','Admin\RequirementsController@load');
  Route::get('requirement/{id}/assignfun',[
    'uses'=>'Admin\FunctionalitiesController@assi_funcionality',
    'as'=>'requirement.assignfun'
  ]);

 Route::resource('functionalities', 'Admin\FunctionalitiesController');

 Route::get('requirements/{id}/destroy',[
   'uses'=>'Admin\RequirementsController@destroy',
   'as'=>'requirements.destroy'
]);
Route::get('functionalities/{id}/destroy',[
  'uses'=>'Admin\FunctionalitiesController@destroy',
  'as'=>'functionalities.destroy'
]);
 Route::get('requerimients/getUpdate','Admin\RequirementsController@getUpdate');
});
