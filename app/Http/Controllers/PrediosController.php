<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\predios;
use App\Http\Requests\PrediosRequest;
use Illuminate\Support\Facades\View;

class PrediosController extends Controller
{
    public function index(){
    	$pre=predios::orderBy('id','DESC')->paginate();
    	return view('pred.preindex', compact('pre'));
    }

 	 public function create(){
    	
    	return view('pred.create');
    }

    public function store(PrediosRequest $request){

    	$pre = new predios;
    	$pre->idFin = $request->idFin;
    	$pre->nombrePredio = $request->nombrePredio;
        $pre->numLote = $request->numLote;
    	$pre->superficie = $request->superficie;
    	$pre->tipIrrigacion = $request->tipIrrigacion;
    	$pre->tipRiego = $request->tipRiego;
    	$pre->observaciones = $request->observaciones;
        
    	$pre->save();

    	return redirect()->route('predio.index')
    					 ->with('info', 'creado con exito');
    }

    public function update(PrediosRequest $request, $id){

    	$pre=predios::find($id);
    	$pre->idFin = $request->idFin;
    	$pre->nombrePredio = $request->nombrePredio;
        $pre->numLote = $request->numLote;
    	$pre->superficie = $request->superficie;
    	$pre->tipIrrigacion = $request->tipIrrigacion;
    	$pre->tipRiego = $request->tipRiego;
    	$pre->observaciones = $request->observaciones;
        $pre->save();

    	return redirect()->route('predio.index')
    					 ->with('info', 'Actualizado correctamente');
    }

 	public function edit($id){
    	
    	$pre=predios::find($id);
    	return view('pred.edit', compact('pre'));
    }

    public function show($id){
    	$pre=predios::find($id);
    	return view('pred.show', compact('pre'));
    }

    public function destroy($id){
    	$pre=predios::find($id);
    	$pre->delete();

    	return back()->with('info', 'Eliminado correctamente');
    }
}
