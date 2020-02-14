<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\socios;

class PagesController extends Controller
{
    public function socios(){
    	$socios = App\Socios::all();
    	$socios = App\Socios::paginate(5);
      return view('socios', compact('socios'));
    }

    public function fotos(){
    	return view('fotos');
    }

    public function blog(){
    	return view('blog');
    }

    public function institucion($nombre= null){
    	$equipo = ['presidente', 'comision' , 'jugadores'];
	//return view('institucion',['equipo'=>$equipo]);//
	return view('institucion', compact('equipo' , 'nombre'));
    }

    public function login(){
    	return view('login');
    }

    public function jugadores(){
    	$jugadores = App\jugadores::all();
    	$jugadores = App\jugadores::paginate(5);
      return view('jugadores', compact('jugadores'));
    	
    }
   
   //public function detalles($id){
   	//$detalles = App\Socios::FindOrFail($id);
   	//return view('socios.detalles', compact('notas.detalles'));
   //}

    public function crear(Request $request){
    	$request->validate([
    		'nombre'=>'required',
    		'apellido'=>'required',
    		'correo'=>'required'

    	]);
    	$socioNuevo= new App\Socios;
    	$socioNuevo->nombre = $request->nombre;
    	$socioNuevo->apellido = $request->apellido;
    	$socioNuevo->correo = $request->correo;
    	$socioNuevo->save();
    	return back()->with('mensaje', 'Socio agregado!');
    	
    }
    public function krear(Request $request){
    	$request->validate([
    		'nombre'=>'required',
    		'apellido'=>'required',
    		'correo'=>'required',
    		'telefono'=>'required'
    		
    	]);
    	$jugadorNuevo= new App\Jugadores;
    	$jugadorNuevo->nombre = $request->nombre;
    	$jugadorNuevo->apellido = $request->apellido;
    	$jugadorNuevo->correo = $request->correo;
    	$jugadorNuevo->telefono = $request->telefono;
    	$jugadorNuevo->save();
    	return back()->with('mensaje', 'Jugador agregado!');
    	
    }

    //public function editar($id_socio){
    	//$socios = App\socios::FindOrFail($id_socio);
    	//return view('editar', compact('socios'));
    //}


    public function eliminar($id_socios){

        $sociosEliminar = App\Socios::findOrFail($id_socios);
        $sociosEliminar->delete();

        return back()->with('mensaje', 'Nota Eliminada');
    }
}




