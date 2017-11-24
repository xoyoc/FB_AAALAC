@extends('layouts')

@section('contenido')
	<div class="card mt-3">
		 <div class="card-header">
			{{ $agente->patente }}
  		</div>
		<div class="card-block">
			<h6 class="card-subtitle text-muted">{{ $agente->nombreaa }}</h6>
			<h5 class="my-2"><a class="text-primary" href="mailto:{{ $agente->email }}">{{ $agente->email }}</a></h5>
			<p class="card-text pt-2">Fecha de Inscripcion: {{ date('d M Y', strtotime($agente->fecha_inscripcion)) }}</p>
			<p class="card-text">Curp: {{ $agente->curp }}</p>
			<p class="card-text">Espediente: {{ $agente->estatus }}</p>
			<a href="/agentes" class="btn btn-warning">Regersar</a>
		</div>
	</div>
@endsection