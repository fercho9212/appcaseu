<?php

namespace App\Http\Controllers\admin\users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\User;
use App\Models\Role;
use Illuminate\Contracts\Auth\Guard;

class RolesPermissionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
 public function __construct(Role $role, Permission $permission, Guard $auth)
 	{
   		$this->role = $role;
   		$this->auth = $auth;
   		$this->permission = $permission;
 	}
    public function index()
    {
      $roles=Role::all();
      $permissions=Permission::all();
      return view('admin.roles_permissions.index')->with(['roles'=>$roles,'permissions'=>$permissions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        dd('entraa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $roles = $this->role->all();
        foreach ($roles as $role) {
          $permissions_sync=isset($input['roles'][$role->id]) ? $input['roles'][$role->id]['permissions'] : [];
          $role->perms()->sync($permissions_sync);
        }
        dd("Creado Con :DdDd");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
