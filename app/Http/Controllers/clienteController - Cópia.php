<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use Carbon\Carbon;
use Illuminate\Http\Request;


class clienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Clientes::all();        
        $mytime = Carbon::now();        
        $mytime->format('DD-MM-YYYY');
        $mytime->setTimezone('America/Sao_Paulo');       
        return view('cliente.index', ['clientes' => $clientes, 'dataatual' => $mytime->toDateTimeString()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cliente.novo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request);
        
        $cliente = new Clientes;
        
        $cliente->cli_nome = $request->inputNome;
        $cliente->cli_idade = $request->inputIdade;
        $cliente->cep = $request->inputCep;
        $cliente->cli_rua = $request->inputNome;
        $cliente->cli_numero = $request->inputNome;
        $cliente->cli_estado = $request->inputEstado;
        $cliente->cli_bairro = $request->inputBairro;
        $cliente->cli_cidade = $request->inputCidade;
        
        $cliente->save();
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
        $cliente = Clientes::find($id);
        
        return view('cliente.editar', ['clienteEditar' => $cliente]);
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
        $cliente = Clientes::find($id);
        $cliente->cli_nome = $request->inputNome;
        $cliente->cli_idade = $request->inputIdade;
        $cliente->cep = $request->inputCep;
        $cliente->cli_rua = $request->inputNome;
        $cliente->cli_numero = $request->inputNome;
        $cliente->cli_estado = $request->inputEstado;
        $cliente->cli_bairro = $request->inputBairro;
        $cliente->cli_cidade = $request->inputCidade;
        
        $cliente->save();
        
        return redirect()->route('cliente.index');
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
