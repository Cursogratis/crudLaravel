<?php

namespace App\Http\Controllers;
//use Illuminate\Support\Facades\DB; 
use Illuminate\Http\Request;
use App\avicola;
class cliente extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$users = DB::select('select * from avicola.cliente, avicola.detalle where tipo_documento = detalle.id AND estado = 1');
        $cliente = avicola::all();
        return view('index', compact('cliente'));
       // return view('index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formulario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*DB::insert('insert into cliente (nombre,tipo_documento,identificacion,telefono,direccion,correo,estado) values (?,?,?,?,?,?,?)', 
        [ $request->txtnombre, $request->txttipo,$request->txtdocumento,$request->txttelefono,$request->txtdireccion,$request->txtcorreo,'estado'=>1]);
        */
        /*
        $persona->nombre = $request->txtnombre;
        $persona->apellidos = $request->txtapellido;
        $persona->documento = $request->txtdocumento;
        $persona->save();

        return view('index');
        */
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
