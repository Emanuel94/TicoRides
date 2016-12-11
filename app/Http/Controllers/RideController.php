<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Ride;
use Auth;

class RideController extends Controller
{
	public function index(){

	}
//LLama a la vista de crear
	public function create(){

		return view('rides.create');

	}
//Guarda 
	public function store(Request $request){

		//dd($request);
		$ride= New Ride();
		$ride->idUser = Auth::id();
		$ride->name_ride=$request->name_ride;
		$ride->start=$request->start;
		$ride->end=$request->end;
		$ride->hour_start=$request->hour_start;
        $ride->hour_end=$request->hour_end;
        $ride->descripcion=$request->descripcion;
        $ride->activo=$request->has('activo') ? 1 : 0;
        $ride->save();

   return view('rides.index');
     }

	public function show(){

		$rides= Ride::where('idUser',Auth::id())->get();
    	
    	return view('rides.index',compact('rides'));

	}
     
	// public function showDashboard(){

	// 	$allrides= Ride::where('idUser',Auth::all()->get();
 //    	return view('rides.Dashboard',compact('rides'));

	// }

	public function edit($id){

		$ride= Ride::findOrfail($id);
		return view('rides.edit',compact('ride'));

	}

	public function update($id){ 

        // $ride = new $ride(); 
		$ride->fill($request->all());
		$ride->save();

		dd('ema');

		return view('rides.edit');
}
    public function CargarRides(){

    	$rides= Ride::where('idUser',Auth::id())->get();
    	return view('rides.index',compact('rides'));
    	//dd($rides);
      
    }

   /* $(document).ready(function(){
    $('rides').DataTable();
});*/
}
