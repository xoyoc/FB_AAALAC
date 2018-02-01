@extends('admin.layouts')

@push('style')

@endpush

@section('encabezado')
	<section class="content-header">
		<h1>
			Editar fondeos y atraques de buques
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i>Inicio</a></li>
			<li class="active">Editar</li>
		</ol>
	</section>
@endsection

@section('contenido')
	<section class="content">
		<form role="form" method="POST" action="{{ route('fonatrac.update', $fonatrac->id) }}" enctype="multipart/form-data">
			{!! csrf_field() !!}
			{!! method_field('PUT') !!}
			<div class="row">
				<div class="col-md-10">
					<div class="box box-primary">
						<div class="box-header with-border">
							<h3 class="box-title">Registro de movimiento</h3>
						</div>
						<div class="box-body">
							<div class="form-group">
								<input name="fecha" type="text" class="form-control" id="datepicker" placeholder="Fecha de movimiento" value="{{ $fonatrac->fecha }}" required>
							</div>
							<div class="bootstrap-timepicker">
								<div class="form-group">
									<input name="hora" type="text" class="form-control timepicker" placeholder="Hora" value="{{ $fonatrac->hora }}" required>
								</div>
							</div>
							<div class="form-group">
								<input name="nombre_buque" type="text" class="form-control" placeholder="Nombre del buque" value="{{ $fonatrac->nombre_buque }}" required>
							</div>
							<div class="form-group">
								<input name="bandera" type="text" class="form-control" placeholder="Bandera" value="{{ $fonatrac->bandera }}">
							</div>
							<div class="form-group">
								<input name="viaje" type="text" class="form-control" placeholder="Viaje" value="{{ $fonatrac->viaje }}">
							</div>
							<div class="form-group">
								<input name="terminal" type="text" class="form-control" placeholder="Terminal de movimiento" value="{{ $fonatrac->terminal }}">
							</div>
							<div class="form-group">
								<select name="movimiento" id="movimiento" class="form-control select2" style="width: 100%;" required>
									<option value="{{ $fonatrac->movimiento }}" selected="selected">{{ $fonatrac->movimiento }}</option>
									<option value="Fondeo">Fondeo</option>
									<option value="Atraque">Atraque</option>
									<option value="Salida">Salida</option>
								</select>
							</div>
						</div>
						<div class="box-footer">
							<input class="float-right btn btn-info" type="submit" value="Guardar movimiento">
						</div>
					</div>
				</div>
			</div>
		</form>
	</section>
@endsection

@push('scripts')

@endpush