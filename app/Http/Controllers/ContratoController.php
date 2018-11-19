<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contrato;
use App\Plan;
use Illuminate\Support\Facades\DB;
class ContratoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $contratos = DB::select('SELECT contrato.id, cliente.nombre, cliente.apellido, contrato.fecha,
        // contrato.monto_inscripcion FROM contrato JOIN cliente ON (contrato.id_cliente=cliente.id)');
        $contratos = DB::select('SELECT contrato.id, cliente.nombre, cliente.apellido, cliente.id as "cliente_id",contrato.fecha,
        contrato.monto_inscripcion, plan.id as "plan_id", plan.nombre as "plan"
FROM contrato JOIN cliente ON (contrato.id_cliente=cliente.id) JOIN plan ON (contrato.id_plan = plan.id)');
        
        //dd($contratos);
        return view('contrato.index', [
            'contratos' => $contratos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        //dd($request);
        $id_cliente = $request->id_cliente;
        $planes = Plan::all();
        return view('contrato.create', [
            'id_cliente' => $id_cliente,
            'planes' => $planes
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Contrato::create($request->all());
        return redirect()->route('contrato.index');
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
        $contrato = Contrato::find($id);
        
        return view('contrato.show', [
            'contrato' => $contrato,           
        ]);
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
        $contrato = Contrato::find($id);
        $planes = Plan::all();
        return view('contrato.edit', [
            'contrato' => $contrato,
            'planes' => $planes
        ]);
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
        Contrato::find($id)->update($request->all());
        return redirect()->route('contrato.index');
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
        Contrato::find($id)->delete();
        return redirect()->route('contrato.index');
    }
}
