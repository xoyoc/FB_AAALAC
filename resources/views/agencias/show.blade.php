@extends('admin.layouts')

@push('style')
    
@endpush

@section('encabezado')
	<section class="content-header">
		<h1>
			{{ $agencia->nombre_agencia }}
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i>Inicio</a></li>
			<li>Agencia</li>
			<li class="active">Ver</li>
		</ol>
	</section>
@endsection

@section('contenido')
	<section class="content">
		<div class="box box-default">
			<div class="box-header with-border">
				<h3 class="box-title">{{ $agencia->agente->patente }} - {{ $agencia->agente->nombreaa }}</h3>
				<div class="pull-right">
					<img class="img-thumbnail " src="{{ Storage::url($agencia->logotipo) }}" alt="logo agencia">
				</div>
			</div>
			<div class="box-body">
				<h4>Patente de Respaldo: {{ $agencia->patente_respaldo }}</h4>
				<h4>Gerente o encargado: {{ $agencia->nombre_gerente }}</h4>
				<h4>Domicilio: {{ $agencia->domicilio }}</h4>
				<h4>Telefono: {{ $agencia->telefono }}</h4>
				<h4>Nombre del personal</h4>
				<h4>Administrativo: {{ $agencia->nombre_admon }}</h4>
				<h4>Trafico: {{ $agencia->nombre_trafico }}</h4>
				<h4>Operaciones: {{ $agencia->nombre_operaciones }}</h4>
			</div>
			<div class="box-footer">
				<a href="/agencias" class="btn btn-warning">Regersar</a>
			</div>
		</div>
	</section>
@endsection