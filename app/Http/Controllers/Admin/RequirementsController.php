<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Requirement;
use Laracasts\Flash\Flash;

class RequirementsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $requirements=Requirement::all();
        return view('admin.requirements.index')->with('requirements',$requirements);
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
        //if ($request->ajax()) {
          //$requirement=new Requirement($request->all());
          //$requirement->save();
          //return response()->json(['message'=>'ok','name'=>$request->description]);
        //}

        $requirement=new Requirement($request->all());
        $requirement->save();
        Flash::info('The requirement'.$requirement->name. ' is register');
        return redirect()->route('requirements.index');

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
    public function edit(Request $request)
    {
      if ($request->ajax()) {
        $requerimient=Requirement::find($request->id);
        return response()->json($requerimient);
      }else {
        dd("Acceso no autorizado");
      }

    }

   public function getUpdate(Request $request)
   {
       if ($request->ajax()) {
          $requerimient=Requirement::find($request->id);
          return $requerimient;
          //return response()->json($requerimient);
       }else {
         return  "dasda";
       }
       return  "string".$request->id;
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
       if ($request->ajax()){
         $requerimient=Requirement::find($id);
         $requerimient->fill($request->all());
         $requerimient->save();
         return response()->json(["mensaje"=>'Listo']);
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,Request $request)
    {

      if ($request->ajax()) {
         $requirement=Requirement::find($id);

         if ($requirement->delete()) {
           return "ok";
         }else {
           return "string";
         }


      }else {
        echo "error";
      }


    }

    public function list_requerimient(Request $request){
      $requirements=Requirement::all();
      if ($request->ajax()) {
         return $requirements;
      }else {

      }
        //return view('admin.requirements.list')->with('requirements',$requirements);
    }
    //Funcíon que asigna una funcionalidad



}
