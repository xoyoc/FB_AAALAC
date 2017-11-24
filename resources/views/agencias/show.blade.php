@extends('layouts')

@section('contenido')
	<div class="card mt-3">
		 <div class="card-header">
			{{ $agencia->nombre_agencia }}
  		</div>
		<div class="card-block">
			<h6 class="card-subtitle text-muted">{{ $agencia->patente_agencia }} - Nombre de Agente Aduanal</h6>
			<h5 class="my-2">{{ $agencia->patente_respaldo }} - Nombre de Agente Aduanal</h5>
			<h5 class="my-2">{{ $agencia->nombre_gerente }}</h5>
			<p class="card-text">Domicilio: {{ $agencia->domicilio }}</p>
			<p class="card-text">Telefono: {{ $agencia->telefono }}</p>
			<p class="card-text">Nombre del personal</p>
			<p class="card-text">Administrativo: {{ $agencia->nombre_admon }}</p>
			<p class="card-text">Trafico: {{ $agencia->nombre_trafico }}</p>
			<p class="card-text">Operaciones: {{ $agencia->nombre_operaciones }}</p>
			<a href="/agencias" class="btn btn-warning">Regersar</a>
		</div>
	</div>
@endsection