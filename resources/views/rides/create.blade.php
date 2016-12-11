
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Create Ride</title>
</head>
<body>
	@extends('layouts.app')

@section('content')
<?php

Global $partida;
Global $destino;

?>


<div class="container text-center">
     <div class="page-header subheader">
		<h1>
			RIDE<small class="subheader">[Agregar Ride]</small>
		</h1>		
	</div>
	<div class="row">
		<div>
			{!!Form::open(
				array(
					'route'=>'ride.store',
					'class'=>'form',
					'novalidate'=>'novalidate'
				))
			!!}

			<div class="form-group">
				<label class="subheader"><h2>Nombre Ride</h2></label>

				{!! Form::text(
					'name_ride',null,array(
					'class'=>'form-control',
					'placeholder'=> 'Ingresa el nombre del ride'
				))
				!!}
				
			</div>

			<div class="form-group">
			    <label class="subheader"><h2>Punto de Partida</h2></label>
              
				{!! Form::text(
					'start',null,array(
					'class'=>'form-control',
					'placeholder'=> 'Nombre de partida'
				))
				!!}
            </div>

               

			<div class="form-group">
            <div class="col-md-6" id="cont-start-location">
                  <label class="frm-label-style" for=""><h2>start location</h2></label>
                  <input class="frm-input-text-style rides-data" id="from" type="text" name="name" value="">
                  </div>
                  <div class="col-md-6" id="cont-end-location">
                  <label class="frm-label-style" for=""><h2>to</h2></label>
                  <input class="frm-input-text-style rides-data" id="to"type="text" name="name" value="">
                </div>
            </div>    
 
 

            </div>

			<div class="form-group">
				<label class="subheader"><h2>Destino</h2></label>

				{!! Form::text(
					'end',null,array(
					'class'=>'form-control',
					'placeholder'=> 'Nombre del Destino'
				))
				!!}

				
			</div>
			<div class="form-group">
				<label class="subheader"><h2>Hora de Inicio</h2></label>

				{!! Form::text(
					'hour_start',null,array(
					'class'=>'form-control',
					'placeholder'=> 'Hora de Inicio'
				))
				!!}
				
			</div>
			<div class="form-group">
				<label class="subheader"><h2>Hora en Finalizar</h2></label>

				{!! Form::text(
					'hour_end',null,array(
					'class'=>'form-control',
					'placeholder'=> 'Hora en que Finaliza'
				))
				!!}
				
			</div>
             <div class="form-group">
				<label class="subheader"><h2>Descripción</h2></label>

				{!! Form::text(
					'descripcion',null,array(
					'class'=>'form-control',
					'placeholder'=> 'Descripcion'
				))
				!!}
			</div>

				<div class="form-group">
				<label class="subheader"><h2>Estado de RIde (Activo~Desactivo)</h2></label>

				{!! Form::checkbox(
					'activo',null,true
		
				)
				!!}
				
			</div>
			<div class="form-group">
				

				{!! Form::submit(
					'Guardar',array('class'=>'btn btn-primary')	
				)
				!!}
				
			</div>
			
		{!!Form::close()!!}
			
	</div>
			
		
	</div>
</div>


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA0UKCuFpsnzvi5kPfHws5ctwQUbVinGRo&libraries=places&callback=initAutocomplete"
         async defer></script>

@stop

</body>
</html>

