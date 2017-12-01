@extends('admin.layouts')

@push('style')
    
@endpush

@section('encabezado')
	<section class="content-header">
		<h1>
			{{ $agente->nombreaa }}
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i>Inicio</a></li>
			<li>Agentes</li>
			<li class="active">Ver</li>
		</ol>
	</section>
@endsection

@section('contenido')
	<section class="content">
		<div class="box box-default">
			<div class="box-header with-border">
				<h3 class="box-title">Patente: {{ $agente->patente }}</h3>
			</div>
			<div class="box-body">
				<h3><a class="text-primary" href="mailto:{{ $agente->email }}">{{ $agente->email }}</a></h3>
				<h3>Fecha de Inscripcion: {{ date('d M Y', strtotime($agente->fecha_inscripcion)) }}</h3>
				<h3>Curp: {{ $agente->curp }}</h3>
				<h3>Espediente: {{ $agente->estatus }}</h3>
			</div>
			<div class="box-footer">
				<a href="/agentes" class="btn btn-warning">Regersar</a>
			</div>
		</div>
	</section>
@endsection