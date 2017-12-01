@extends('admin.layouts')

@push('style')
    
@endpush

@section('encabezado')
	<section class="content-header">
		<h1>
			Agregar nuevo agente aduanal
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i>Inicio</a></li>
			<li>Agentes</li>
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
		<div class="row">
			<form role="form" method="POST" action="{{ route('agentes.store') }}">
				{!! csrf_field() !!}
				<div class="col-md-8">
					<div class="box box-primary">
						<div class="box-header with-border">
							<h3 class="box-title">Datos Generales</h3>
						</div>
						<div class="box-body">
							<div class="form-group">
								<input class="form-control" type="number" name="patente" placeholder="Numero de patente" value="{{ old('patente') }}"> {!! $errors->first('patente', '<span class="badge badge-pill badge-danger mb-3">:message</span>') !!}
							</div>
							<div class="form-group">
								<input class="form-control" type="text" name="nombreaa" placeholder="Nombre del Agente Aduanal" value="{{ old('nombreaa') }}"> {!! $errors->first('nombreaa', '<span class="badge badge-pill badge-danger mb-3">:message</span>') !!}
							</div>
							<div class="form-group">
								<input class="form-control" type="email" name="email" placeholder="Correo Electronico" value="{{ old('email') }}"> {!! $errors->first('email', '<span class="badge badge-pill badge-danger mb-3">:message</span>') !!}
							</div>
							<div class="form-group">
								<input class="form-control" type="date"  name="fecha_inscripcion" placeholder="Fecha de Inscripción" value="{{ old('fecha_inscripcion') }}"> {!! $errors->first('fecha_inscripcion', '<span class="badge badge-pill badge-danger mb-3">:message</span>') !!}
							</div>
							<div class="form-group">
								<input class="form-control" type="text" name="curp" placeholder="Clave Unica de Registro Población" value="{{ old('curp') }}"> {!! $errors->first('curp', '<span class="badge badge-pill badge-danger mb-3">:message</span>') !!}
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="box box-primary">
						<div class="box-header with-border">
							<h3 class="box-title">Expediente</h3>
						</div>
						<div class="box-body">
							<div class="form-group">
								<label for="carta_aaalac">Carta al Presidente de AAALAC</label> 
								<select class="form-control" id="carta_aaalac" name="carta_aaalac">
									<option value="No">No</option> 
									<option value="Si">Si</option> 
								</select>
							</div>
							<div class="form-group">
								<label for="carta_referencia">Carta de Referencia Bancaria o de Negocios</label> 
								<select class="form-control" id="carta_referencia" name="carta_referencia">
									<option value="No">No</option> 
									<option value="Si">Si</option> 
								</select>
							</div>
							<div class="form-group">
								<label for="copia_acta">Copia de Acta Constitutiva</label> 
								<select class="form-control" id="copia_acta" name="copia_acta">
									<option value="No">No</option> 
									<option value="Si">Si</option> 
								</select>
							</div>
							<div class="form-group">
								<label for="copia_publicacion">Copia de la Publicacion del DOF</label> 
								<select class="form-control" id="copia_publicacion" name="copia_publicacion">
									<option value="No">No</option> 
									<option value="Si">Si</option> 
								</select>
							</div>
							<div class="form-group mb-3">
								<label for="copia_no_ade">Copia de Carta de no Adeudo</label> 
								<select class="form-control w-25" id="copia_no_ade" name="copia_no_ade">
									<option value="No">No</option> 
									<option value="Si">Si</option> 
								</select>
							</div>
							<div class="form-group">
								<label for="copia_poder">Copia de Poder Notarial</label> 
								<select class="form-control" id="copia_poder" name="copia_poder">
									<option value="No">No</option> 
									<option value="Si">Si</option> 
								</select>
							</div>
							<div class="form-group">
								<label for="pago">Pago de la Inscripcion</label> 
								<select class="form-control" id="pago" name="pago">
									<option value="No">No</option> 
									<option value="Si">Si</option> 
								</select>
							</div>
							<div class="form-group">
								<input class="form-control" type="hidden" name="estatus" id="estatus"  value="Pendinte">
							</div>
						</div>
						<div class="box-footer">
							<input class="float-right btn btn-info" type="submit" value="Agregar al Agente Aduanal">
						</div>
					</div>
				</div>
			</form>			
		</div>
	</section>
@endsection

@push('scripts')
    <script src="{{ asset('js/app.js') }}" ></script>
@endpush