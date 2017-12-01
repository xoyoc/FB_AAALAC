@extends('admin.layouts')

@push('style')
    
@endpush

@section('encabezado')
	<section class="content-header">
		<h1>
			Editar Agencia Aduanal
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i>Inicio</a></li>
			<li>Agencia</li>
			<li class="active">Editar</li>
		</ol>
	</section>
@endsection

@section('contenido')
	<section class="content">
		<div class="row">
			<form method="POST" action="{{ route('agencias.store') }}" class="form-control" enctype="multipart/form-data">
				{!! csrf_field() !!}
				{!! method_field('PUT') !!}
				<div class="col-md-6">
					<div class="box box-primary">
						<div class="box-header with-border">
							<h3 class="box-title">Datos de la Agencia Aduanal</h3>
						</div>
						<div class="box-body">
							<div class="form-group">
								<input class="form-control" type="text" name="rfc" placeholder="Registro Federal de Contribuyentes" value="{{ $agencia->rfc }}">
							</div>
							<div class="form-group">
								<input class="form-control" type="text" name="nombre_agencia" placeholder="Nombre de la Agencia Aduanal" value="{{ $agencia->nombre_agencia }}"> 
							</div>
							<div class="form-group">
								<input class="form-control" type="number" name="patente_agencia" placeholder="Numero de patente" value="{{ $agencia->patente_agencia }}">
							</div>
							<div class="form-group">
								<input class="form-control" type="number" name="patente_respaldo" placeholder="Numero de patente respaldo" value="{{ $agencia->patente_respaldo }}">
							</div>
							<div class="form-group">
								<input class="form-control w-75 mb-2" type="text" name="domicilio" placeholder="Domicilio" value="{{ $agencia->domicilio }}"> 
							</div>
							<div class="form-group">
								<input class="form-control" type="tel"  name="telefono" placeholder="(753) 535 3535" value="{{ $agencia->telefono }}"> 
							</div>
							<div class="form-group">
								<input class="form-control" type="url" name="web" placeholder="http://www.mipaginaweb.com" value="{{ $agencia->web }}"> 
							</div>
							<div class="form-group">
								<input type="file" name="logotipo" id="logotipo">
								<figure>
									<img class="img-thumbnail" src="{{ Storage::url($agencia->logotipo) }}" alt="logopito de la agencia">
								</figure>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="box box-primary">
						<div class="box-header with-border">
							<h3 class="box-title">Datos del personal</h3>
						</div>
						<div class="box-body">
							<div class="form-group">
								<input class="form-control" type="text" name="nombre_gerente" placeholder="Nombre del Gerente o Encargado" value="{{ $agencia->nombre_gerente }}"> 
							</div>
							<div class="form-group">
								<input class="form-control" type="tel"  name="gerente_movil" placeholder="(753) 535 3535" value="{{ $agencia->gerente_movil }}"> 
							</div>
							<div class="form-group">
								<input class="form-control" type="email"  name="gerente_correo" placeholder="Correo Electronico" value="{{ $agencia->gerente_correo }}"> 
							</div>
							<div class="form-group">
								<input class="form-control" type="text" name="nombre_admon" placeholder="Nombre personal administrativo" value="{{ $agencia->nombre_admon }}"> 
							</div>
							<div class="form-group">
								<input class="form-control" type="email"  name="admon_correo" placeholder="Correo Electronico" value="{{ $agencia->admon_correo }}"> 
							</div>
							<div class="form-group">
								<input class="form-control" type="text" name="nombre_trafico" placeholder="Nombre personal trafico o encargado" value="{{ old('nombre_trafico') }}"> 
							</div>
							<div class="form-group">
								<input class="form-control" type="email"  name="trafico_correo" placeholder="Correo Electronico" value="{{ $agencia->trafico_correo }}"> 
							</div>
							<div class="form-group">
								<input class="form-control" type="text" name="nombre_operaciones" placeholder="Nombre personal operativo o encargado" value="{{ $agencia->nombre_operaciones }}"> 
							</div>
							<div class="form-group">
								<input class="form-control" type="tel"  name="operaciones_movil" placeholder="(753) 535 3535" value="{{ $agencia->operaciones_movil }}"> 
							</div>
							<div class="form-group">
								<input class="form-control" type="email"  name="operaciones_correo" placeholder="Correo Electronico" value="{{ $agencia->operaciones_correo }}"> 
							</div>
						</div>
						<div class="box-footer">
							<input class="float-right btn btn-info" type="submit" value="Guardar Agecia Aduanal">
						</div>
					</div>
				</div>
			</form>
		</div>
	</section>
@endsection