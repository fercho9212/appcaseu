<?php
use \App\Models\Role;
use \App\Models\User;
use \App\Models\Permission;
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
/**
 * Route of test
 * @var User
 */
Route::get('user',function(){
  $user=new User();
  $user->name='fabian ';
  $user->email='el';
  $user->password='asd';
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
Route::get('asig',function(){
  $admin = new Role();
  $admin->name         = 'ssss';
  $admin->display_name = 'sss'; // optional
  $admin->description  = 'sss'; // optional
  $admin->save();

  $user = User::where('name', '=', 'ferney')->first();
  $user->roles()->attach($admin->id);

});
Route::get('permi',function(){
  $admin = new Role();
  $admin->name         = 'juanja';
  $admin->display_name = 'juanja'; // optional
  $admin->description  = 'juanja'; // optional
  $admin->save();

  $permi=new Permission();
  $permi->name='other';
  $permi->display_name='other';
  $permi->description='other';
  $permi->save();

  $permi2=new Permission();
  $permi2->name='persion';
  $permi2->display_name='persion';
  $permi2->description='persion';
  $permi2->save();


  $admin->perms()->sync(array($permi->id, $permi2->id));

});
Route::get('run',function(){
  $role= Role::where('name', '=', 'Test')->first();
  $permi=Permission::where('name','=','je')->first();
  $permi2=Permission::where('name','=','Tow')->first();
  $permi3=Permission::where('name','=','persion')->first();
   $role->perms()->sync(array($permi->id,$permi2->id,$permi3->id));


});
Route::get('prueba',function(){
  $user = User::where('name', '=', 'ferney')->first();


  if ($user->can('Toaw')) {

  }
  if ($user->hasRole(['ppp','ssss'])) {
    $usesr=Auth::user();
    echo $usesr.'rfer';
  }
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
