<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plan;
use App\Servicio;
use App\Plan_servicios;
use Illuminate\Support\Facades\DB;
class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $planes = Plan::all();
        
        return view('plan.index', [
            'planes' => $planes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $servicios = Servicio::all();
        return view('plan.create', [
            'servicios' => $servicios
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
        Plan::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
        ]);    
       
        foreach ($request->servicios as $servicio) {
            # code...
            Plan_servicios::create([
                'id_plan' => Plan::all()->first()->id,
                'id_servicio' => $servicio
            ]);
        }

        return redirect()->route('plan.index');
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
        $plan = Plan::find($id);
        $servicios =  DB::table('plan_servicios')
        ->join('plan', 'plan_servicios.id_plan', '=', 'plan.id')
        ->join('servicio', 'plan_servicios.id_servicio', '=', 'servicio.id')
        ->select('servicio.*')
        ->where('plan_servicios.id_plan',$id)
        ->get();
        return view('plan.show', [
            'plan' => $plan,    
            'servicios' => $servicios       
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
        $plan = Plan::find($id);
        $servicios = Servicio::all();
        return view('plan.edit', [
            'plan' => $plan,
            'servicios' => $servicios

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

        
        $plan = Plan::find($id);
        $plan->nombre = $request->nombre;
        $plan->descripcion = $request->descripcion;
        $plan->save();
        
        DB::table('plan_servicios')->where('id_plan',  $id)->delete();

        foreach ($request->servicios as $servicio) {
        # code...
        Plan_servicios::create([
            'id_plan' => $id,
            'id_servicio' => $servicio
            ]);
        }

        // $consulta = DB::select('SELECT servicio.id as "servicio_id", servicio.nombre as "servicio_nombre", plan.id as "plan_id", plan.nombre as "plan_nombre"
        // FROM servicio JOIN plan_servicios ON (servicio.id = plan_servicios.id_servicio) JOIN plan ON (plan.id = plan_servicios.id_plan)
        // WHERE plan.id = "$id"');

        // $consulta =  DB::table('plan_servicios')
        // ->join('plan', 'plan_servicios.id_plan', '=', 'plan.id')
        // ->join('servicio', 'plan_servicios.id_servicio', '=', 'servicio.id')
        // ->select('servicio.*')
        // ->where('plan_servicios.id_plan',$id)
        // ->get();
        // dd($consulta);
        
        return redirect()->route('plan.index');
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
        Plan::find($id)->delete();
        return redirect()->route('plan.index');
    }
}
