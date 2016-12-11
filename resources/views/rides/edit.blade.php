@extends('layouts.app')

@section('content')
<div class="container text-center">
     <div class="page-header subheader">
		<h1>
			RIDE<small class="subheader">[Agregar Ride]</small>
		</h1>		
	</div>
	<div class="row">
		<div>
			{!! Form::model($ride, array('route'=> array('ride.update ', $ride->id)))!!}

			<div class="form-group">
				<label class="subheader">Nombre Ride</label>

				{!! Form::text(
					'name_ride',null,array(
					'class'=>'form-control',
					'placeholder'=> 'Ingresa el nombre del ride'
				))
				!!}
				
			</div>

			<div class="form-group">
				<label class="subheader">Punto de Partida</label>

				{!! Form::text(
					'start',null,array(
					'class'=>'form-control',
					'placeholder'=> 'Nombre de partida'
				))
				!!}
				
			</div>
			
            <div class="form-group">
				<label class="subheader">Destino</label>

				{!! Form::text(
					'end',null,array(
					'class'=>'form-control',
					'placeholder'=> 'Nombre del Destino'
				))
				!!}

				
			</div>
			<div class="form-group">
				<label class="subheader">Hora de Inicio</label>

				{!! Form::text(
					'hour_start',null,array(
					'class'=>'form-control',
					'placeholder'=> 'Hora de Inicio'
				))
				!!}
				
			</div>
			<div class="form-group">
				<label class="subheader">Hora en Finalizar</label>

				{!! Form::text(
					'hour_end',null,array(
					'class'=>'form-control',
					'placeholder'=> 'Hora en que Finaliza'
				))
				!!}
				
			</div>
             <div class="form-group">
				<label class="subheader">Descripción</label>

				{!! Form::text(
					'descripcion',null,array(
					'class'=>'form-control',
					'placeholder'=> 'Descripcion'
				))
				!!}
			</div>

				<div class="form-group">
				<label class="subheader">Estado de RIde (Activo~Desactivo)</label>

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

</body>
</html>

