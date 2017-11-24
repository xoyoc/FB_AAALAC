@extends('layouts')

@section('contenido')
	<h2 class="my-3">Editar agencia aduanal</h2>
	<form method="POST" action="{{ route('agencias.store') }}" class="form-inline mt-4 pl-4" enctype="multipart/form-data">
		{!! csrf_field() !!}
		{!! method_field('PUT') !!}
		<div class="card w-100">
			<div class="card-header w-100">
				Datos de la Agencia Aduanal
			</div>
			<div class="card-block w-100 form-inline input-group">
				<input class="form-control w-25 mb-2" type="text" name="rfc" placeholder="Registro Federal de Contribuyentes" value="{{ old('rfc') }}"> {!! $errors->first('rfc', '<span class="badge badge-pill badge-danger mb-3">:message</span>') !!}
				<input class="form-control w-50 mb-2" type="text" name="nombre_agencia" placeholder="Nombre de la Agencia Aduanal" value="{{ old('nombre_agencia') }}"> {!! $errors->first('nombre_agencia', '<span class="badge badge-pill badge-danger mb-3">:message</span>') !!}
				<input class="form-control w-25 mb-2" type="number" name="patente_agencia" placeholder="Numero de patente" value="{{ old('patente_agencia') }}"> {!! $errors->first('patente_agencia', '<span class="badge badge-pill badge-danger mb-3">:message</span>') !!}
				<input class="form-control w-25 mb-2" type="number" name="patente_respaldo" placeholder="Numero de patente respaldo" value="{{ old('patente_respaldo') }}"> {!! $errors->first('patente_respaldo', '<span class="badge badge-pill badge-danger mb-3">:message</span>') !!}
				<input class="form-control w-75 mb-2" type="text" name="domicilio" placeholder="Domicilio" value="{{ old('domicilio') }}"> {!! $errors->first('domicilio', '<span class="badge badge-pill badge-danger mb-3">:message</span>') !!}
				<input class="form-control w-25 mb-2" type="tel"  name="telefono" placeholder="(753) 535 3535" value="{{ old('telefono') }}"> {!! $errors->first('telefono', '<span class="badge badge-pill badge-danger mb-3">:message</span>') !!}
				<input class="form-control w-25 mb-2" type="url" name="web" placeholder="http://www.mipaginaweb.com" value="{{ old('web') }}"> {!! $errors->first('web', '<span class="badge badge-pill badge-danger mb-3">:message</span>') !!}
				<input type="file" name="logotipo" id="logotipo">
				<img class="img-thumbnail" src="{{ Storage::url($agencia->logotipo) }}" alt="logopito de la agencia">
			</div>
		</div>
		<div class="card w-100">
			<div class="card-header w-100">
				Datos del personal
			</div>
			<div class="card-block w-100 form-inline input-group ">
				<input class="form-control w-50 mb-2" type="text" name="nombre_gerente" placeholder="Nombre del Gerente o Encargado" value="{{ old('nombre_gerente') }}"> {!! $errors->first('nombre_gerente', '<span class="badge badge-pill badge-danger mb-3">:message</span>') !!}
				<input class="form-control w-25 mb-2" type="tel"  name="gerente_movil" placeholder="(753) 535 3535" value="{{ old('gerente_movil') }}"> {!! $errors->first('gerente_movil', '<span class="badge badge-pill badge-danger mb-3">:message</span>') !!}
				<input class="form-control w-25 mb-2" type="email"  name="gerente_correo" placeholder="Correo Electronico" value="{{ old('gerente_correo') }}"> {!! $errors->first('gerente_correo', '<span class="badge badge-pill badge-danger mb-3">:message</span>') !!}
				<input class="form-control w-50 mb-2" type="text" name="nombre_admon" placeholder="Nombre personal administrativo" value="{{ old('nombre_admon') }}"> {!! $errors->first('nombre_admon', '<span class="badge badge-pill badge-danger mb-3">:message</span>') !!}
				<input class="form-control w-25 mb-2" type="email"  name="admon_correo" placeholder="Correo Electronico" value="{{ old('admon_correo') }}"> {!! $errors->first('admon_correo', '<span class="badge badge-pill badge-danger mb-3">:message</span>') !!}
				<input class="form-control w-50 mb-2" type="text" name="nombre_trafico" placeholder="Nombre personal trafico o encargado" value="{{ old('nombre_trafico') }}"> {!! $errors->first('nombre_trafico', '<span class="badge badge-pill badge-danger mb-3">:message</span>') !!}
				<input class="form-control w-25 mb-2" type="email"  name="trafico_correo" placeholder="Correo Electronico" value="{{ old('trafico_correo') }}"> {!! $errors->first('trafico_correo', '<span class="badge badge-pill badge-danger mb-3">:message</span>') !!}
				<input class="form-control w-50 mb-2" type="text" name="nombre_operaciones" placeholder="Nombre personal operativo o encargado" value="{{ old('nombre_operaciones') }}"> {!! $errors->first('nombre_operaciones', '<span class="badge badge-pill badge-danger mb-3">:message</span>') !!}
				<input class="form-control w-25 mb-2" type="tel"  name="operaciones_movil" placeholder="(753) 535 3535" value="{{ old('operaciones_movil') }}"> {!! $errors->first('operaciones_movil', '<span class="badge badge-pill badge-danger mb-3">:message</span>') !!}
				<input class="form-control w-25 mb-2" type="email"  name="operaciones_correo" placeholder="Correo Electronico" value="{{ old('operaciones_correo') }}"> {!! $errors->first('operaciones_correo', '<span class="badge badge-pill badge-danger mb-3">:message</span>') !!}
			</div>
		</div>
		<input class="btn btn-info float-right" type="submit" value="Agregar al Agente Aduanal">
	</form>
@endsection