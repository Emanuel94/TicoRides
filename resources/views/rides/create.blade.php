@extends('layouts.app')

@section('content')
<div class="container text-center">
	<div class="page-header">
		<h1>
			RIDE<small>[Agregar Ride]</small>
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
				<label>Nombre Ride</label>

				{!! Form::text(
					'name_ride',null,array(
					'class'=>'form-control',
					'placeholder'=> 'Ingresa el nombre del ride'
				))
				!!}
				
			</div>

			<div class="form-group">
				<label>Punto de Partida</label>

				{!! Form::text(
					'start',null,array(
					'class'=>'form-control',
					'placeholder'=> 'Nombre de partida'
				))
				!!}
				
			</div>

			<div class="form-group">
				<label>Destino</label>

				{!! Form::text(
					'end',null,array(
					'class'=>'form-control',
					'placeholder'=> 'Nombre del Destino'
				))
				!!}
				
			</div>
			<div class="form-group">
				<label>Hora de Inicio</label>

				{!! Form::text(
					'hour_start',null,array(
					'class'=>'form-control',
					'placeholder'=> 'Hora de Inicio'
				))
				!!}
				
			</div>
			<div class="form-group">
				<label>Hora en Finalizar</label>

				{!! Form::text(
					'hour_end',null,array(
					'class'=>'form-control',
					'placeholder'=> 'Hora en que Finaliza'
				))
				!!}
				
			</div>
             <div class="form-group">
				<label>Descripción</label>

				{!! Form::text(
					'descripcion',null,array(
					'class'=>'form-control',
					'placeholder'=> 'Descripcion'
				))
				!!}
			</div>

				<div class="form-group">
				<label>Estado de RIde (Activo~Desactivo)</label>

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



@stop

