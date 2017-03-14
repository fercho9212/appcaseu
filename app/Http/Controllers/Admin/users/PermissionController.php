<?php

namespace App\Http\Controllers\admin\users;
use Auth;
use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\RolesPermission;
use App\Models\Permission;
use App\Models\Role;


class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
      $permissions=Permission::all();
      $this->permissions = $permissions;
    }
    public function index($id)
    {
        echo "heloo".$id;
    }
    public function role_permission($id){

        return response()->json($this->getPermission($id));
           }
    private function getPermission($id){
      $permissions=array();
      $permissions['permissionsAssigned']=$this->getPermissionsAssigned($id);
      return $permissions;
    }
    private function getPermissionsAssigned($id){
      $permissionsOfRole=RolesPermission::where('role_id','=',$id)->get();
      $assigned=array();
      foreach ($permissionsOfRole as $p) {
        foreach ($this->permissions as $key => $value) {
            if ($value->id==$p->permission_id) {
                $assigned[]=$value;
            }
        }
      }
      return $assigned;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
  $my_checkbox_value = $request['permision'];
  echo "no";
  if ($my_checkbox_value==='yes') {
    echo "string";
  }
        /*$rol=Role::find($request->rol_id);
        $permition=$this->getPermission($request->rol_id);
       foreach ($request->permision  as $v) {
        $rpt=true;
        foreach ($permition as $key) {
            foreach ($key as $value) {
              if ($v==$value->id) {
                $rpt=false;
              }
            }
        }
        if ($rpt==false) {
          if( $value->id==NULL ){
            echo "desaigna".$v;
          }else {
          echo "<br>Repetidos no inserta ".$v;
          }
        }else {
          $rol->attachPermission($v);
        }*/
    }

/*
           if($request->permision!=NULL){
           foreach ($request->permision as $key) {
             $rpt=true;
             foreach ($permision as $value) {
               foreach ($value as $perm) {
                 if($perm->id==$key){
                   $rpt=false;
                 }
               }
             }
             if ($rpt==true) {
               $rol->attachPermission($key);
             }elseif ($rpt==false) {
               if( $request->get('permision', false)) {
                      dd('DESASGINA');
                  }
             }



           }
         }else {
           dd('sale');
         }

*/



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
