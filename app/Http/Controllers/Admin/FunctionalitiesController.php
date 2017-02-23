<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Requirement;
use App\Models\Funcionality;
use Illuminate\Support\Facades\DB;
use Laracasts\Flash\Flash;

class FunctionalitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function assi_funcionality($id){

      $requirement=Requirement::find($id);
     $funcionalities=DB::table('funcionalities')->where('requirement_id',$id)->get(['id','description']);


     return view('admin/requi_func.index')->with([
                                                 'requirement'=>$requirement,
                                                 'funcionalities'=>$funcionalities
                                                ]);
     }

    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       $nfunction=count($request->description);
       if ($nfunction>0) {
         for ($i=0; $i <$nfunction ; $i++) {
            $functionalities=new Funcionality;
        //
              $functionalities->description=$request->description[$i];
              $functionalities->requirement_id=$request->requirement_id;
              $functionalities->save();
              //$funcionalities=DB::table('funcionalities')->where('requirement_id',$request->requirement_id)->get(['id','description','requirement_id']);
            //  return $funcionalities->toJson();
            }
            $funcionalities=DB::table('funcionalities')->where('requirement_id',$request->requirement_id)->get(['id','description','requirement_id']);
            return $funcionalities->toJson();
         }
         //$funcionalities=DB::table('funcionalities')->where('requirement_id',$request->requirement_id)->get(['id','description','requirement_id']);
         //return $funcionalities->toJson();
         //Flash::info('Los requerimientos han sido registrados');
         //
  //       return redirect()->route('requirement.assignfun',[$request->requirement_id]);
  //     }else {
  //       Flash::danger('Error al registrar');
  //       return view('admin.requi_func.index',$request->requirement_id);
       }


       //echo $nfunction;
      // foreach ($request->all() as $key => $value) {
    //     echo $key[$value];

       //foreach ($request->description as $key) {
      //   echo $key;
       //}



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
    public function destroy($id,Request $request)
    {
      if ($request->ajax()) {
         $functionalities=Funcionality::find($id);

         if ($functionalities->delete()) {
           return "ok";
         }else {
           return "string";
         }


      }else {
        echo "error";
      }


        return 'holaaa'.$id;
    }

}
