<?php

namespace App\Http\Controllers;

use App\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$personas = Persona::all();

        $personas = Persona::with('tipo_documento')->get();

        return $personas;
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
     * @return succes
     */
    public static function store(Request $request, $id = null)
    {
        if(is_null($id)){
            $persona = new Persona();
            $mensaje = 'Personsa agregada esitosamente!';
          }else{
            $persona = Persona::findOrFail($id);
            $mensaje = 'Personsa actualizada esitosamente!';
          }

          $persona->nombre = $request->nombre;
          $persona->apellido = $request->apellido;
          $persona->edad = $request->edad;
          $persona->correo = $request->correo;
          $persona->save();

          return $mensaje;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $persona = Persona::with('tipo_documento')->findOrFail($id);
        return $persona->tipo_documento->nombre;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function edit(Persona $persona)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed|null $id
     * @return succes
     */
    public function update(Request $request, $id)
    {
        return self::store($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Persona  $persona
     * @param  mixed|null $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $persona = Persona::findOrFail($id);
        $persona->delete();
        return 'se fue el hpta';
    }
}
