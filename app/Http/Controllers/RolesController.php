<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Http\Response;
use App\Models\Roles;
use App\Http\Requests\RolRequest;
use Illuminate\Support\Facades\DB;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function listing(){
        $rol = Roles::all();
        return view('list',compact('rol'));
    }

    public function index()
    {
        return view('roles');
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
    public function store(RolRequest $request)
    {
      if ($request->ajax()) {
        $rol = new Roles();
        $rol->Nombre = $request->nombre;
        $rol->save();
        return response()->json([
        "mensaje" => "Rol creado correctamente"
         ]);
      }
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
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RolRequest $request)
    {
      if ($request->ajax()) {
        
        $rol = Roles::Find($request->id_rol);        
        $rol->Nombre = $request->nombre;
        $rol->save();

        return response()->json([
        "mensaje" => "Rol editado correctamente."
         ]);
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $id)
    {
        $rol = Roles::Find($id->id_rol);
        $rol->delete();

        return response()->json([
        "mensaje" => "Rol eliminado correctamente."
         ]);
    }

}
