@extends('admin.layouts')

@push('style')
    
@endpush

@section('encabezado')
	<section class="content-header">
		<h1>
			Agregar nueva Agencia Aduanal
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i>Inicio</a></li>
			<li>Agencia</li>
			<li class="active">Crear</li>
		</ol>
	</section>
@endsection

@section('contenido')
	<section class="content">
		@if(session()->has('flash'))
			<div class="callout callout-info">
				<h4>Mensaje</h4>
				<p>{{ session()->get('flash') }}</p>
			</div>
		@endif
		<form role="form" method="POST" action="{{ route('agencias.store') }}" enctype="multipart/form-data">
			{!! csrf_field() !!}
			<div class="row">
				<div class="col-md-6">
					<div class="box box-primary">
						<div class="box-header with-border">
							<h3 class="box-title">Datos de la Agencia Aduanal</h3>
						</div>
						<div class="box-body">
							<div class="form-group">
								<input class="form-control" type="text" name="rfc" placeholder="Registro Federal de Contribuyentes" value="{{ old('rfc') }}"> {!! $errors->first('rfc', '<span class="badge badge-pill badge-danger mb-3">:message</span>') !!}
							</div>
							<div class="form-group">
								<input class="form-control" type="text" name="nombre_agencia" placeholder="Nombre de la Agencia Aduanal" value="{{ old('nombre_agencia') }}"> {!! $errors->first('nombre_agencia', '<span class="badge badge-pill badge-danger mb-3">:message</span>') !!}
							</div>
							<div class="form-group">
								<select name="agente_id" id="agente_id" class="form-control">
									<option value="">Selecionar</option>
									@foreach ($agentes as $agente)
										<option value="{{ $agente->id }}">{{ $agente->nombreaa }}</option>
									@endforeach
								</select>
							</div>
							<div class="form-group">
								<input class="form-control" type="number" name="patente_respaldo" placeholder="Numero de patente respaldo" value="{{ old('patente_respaldo') }}"> {!! $errors->first('patente_respaldo', '<span class="badge badge-pill badge-danger mb-3">:message</span>') !!}
							</div>
							<div class="form-group">
								<input class="form-control" type="text" name="domicilio" placeholder="Domicilio" value="{{ old('domicilio') }}"> {!! $errors->first('domicilio', '<span class="badge badge-pill badge-danger mb-3">:message</span>') !!}
							</div>
							<div class="form-group">
								<input class="form-control" type="tel"  name="telefono" placeholder="(753) 535 3535" value="{{ old('telefono') }}"> {!! $errors->first('telefono', '<span class="badge badge-pill badge-danger mb-3">:message</span>') !!}
							</div>
							<div class="form-group">
								<input class="form-control" type="url" name="web" placeholder="http://www.mipaginaweb.com" value="{{ old('web') }}"> {!! $errors->first('web', '<span class="badge badge-pill badge-danger mb-3">:message</span>') !!}
							</div>
							<div class="form-group">
								<label for="logotipo">Logotipo</label>
								<input type="file" name="logotipo" id="logotipo" class="form-control">
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="box box-primary">
						<div class="box-header with-border">
							<h3 class="box-title">Personal de Agencia</h3>
						</div>
						<div class="box-body">
							<div class="form-group">
								<input class="form-control" type="text" name="nombre_gerente" placeholder="Nombre del Gerente o Encargado" value="{{ old('nombre_gerente') }}"> {!! $errors->first('nombre_gerente', '<span class="badge badge-pill badge-danger mb-3">:message</span>') !!}
	        				</div>
							<div class="form-group">
								<input class="form-control" type="tel"  name="gerente_movil" placeholder="(753) 535 3535" value="{{ old('gerente_movil') }}"> {!! $errors->first('gerente_movil', '<span class="badge badge-pill badge-danger mb-3">:message</span>') !!}	
							</div>
							<div class="form-group">
								<input class="form-control" type="email"  name="gerente_correo" placeholder="Correo Electronico" value="{{ old('gerente_correo') }}"> {!! $errors->first('gerente_correo', '<span class="badge badge-pill badge-danger mb-3">:message</span>') !!}
							</div>
							<div class="form-group">
								<input class="form-control" type="text" name="nombre_admon" placeholder="Nombre personal administrativo" value="{{ old('nombre_admon') }}"> {!! $errors->first('nombre_admon', '<span class="badge badge-pill badge-danger mb-3">:message</span>') !!}
							</div>
							<div class="form-group">
								<input class="form-control" type="email"  name="admon_correo" placeholder="Correo Electronico" value="{{ old('admon_correo') }}"> {!! $errors->first('admon_correo', '<span class="badge badge-pill badge-danger mb-3">:message</span>') !!}
							</div>
							<div class="form-group">
								<input class="form-control" type="text" name="nombre_trafico" placeholder="Nombre personal trafico o encargado" value="{{ old('nombre_trafico') }}"> {!! $errors->first('nombre_trafico', '<span class="badge badge-pill badge-danger mb-3">:message</span>') !!}
							</div>
							<div class="form-group">
								<input class="form-control" type="email"  name="trafico_correo" placeholder="Correo Electronico" value="{{ old('trafico_correo') }}"> {!! $errors->first('trafico_correo', '<span class="badge badge-pill badge-danger mb-3">:message</span>') !!}
							</div>
							<div class="form-group">
								<input class="form-control" type="text" name="nombre_operaciones" placeholder="Nombre personal operativo o encargado" value="{{ old('nombre_operaciones') }}"> {!! $errors->first('nombre_operaciones', '<span class="badge badge-pill badge-danger mb-3">:message</span>') !!}
							</div>
							<div class="form-group">
								<input class="form-control" type="tel"  name="operaciones_movil" placeholder="(753) 535 3535" value="{{ old('operaciones_movil') }}"> {!! $errors->first('operaciones_movil', '<span class="badge badge-pill badge-danger mb-3">:message</span>') !!}
							</div>
							<div class="form-group">
								<input class="form-control" type="email"  name="operaciones_correo" placeholder="Correo Electronico" value="{{ old('operaciones_correo') }}"> {!! $errors->first('operaciones_correo', '<span class="badge badge-pill badge-danger mb-3">:message</span>') !!}
							</div>
							<div class="box-footer">
								<input class="btn btn-info float-right" type="submit" value="Agregar al Agente Aduanal">
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</section>
@endsection