@extends('admin.layouts')

@push('style')
    
@endpush

@section('encabezado')
	<section class="content-header">
		<h1>
			Editar Agente Aduanal
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i>Inicio</a></li>
			<li>Agentes</li>
			<li class="active">Editar</li>
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
			<form method="POST" action="{{ route('agentes.update', $agente->id) }}" class="form-control mt-4 pl-4" >
				{!! csrf_field() !!}
				{!! method_field('PUT') !!}
				<div class="col-md-8">
					<div class="box box-primary">
						<div class="box-header with-border">
							<h3 class="box-title">Datos Generales</h3>
						</div>
						<div class="box-body">
							<div class="form-group">
								<input class="form-control" type="number" name="patente" placeholder="Numero de patente" value="{{ $agente->patente }}">
							</div>
							<div class="form-group">
								<input class="form-control" type="text" name="nombreaa" placeholder="Nombre del Agente Aduanal" value="{{ $agente->nombreaa }}">
							</div>
							<div class="form-group">
								<input class="form-control" type="email" name="email" placeholder="Correo Electronico" value="{{ $agente->email }}">
							</div>
							<div class="form-group">
								<input class="form-control" type="date"  name="fecha_inscripcion" placeholder="Fecha de Inscripción" value="{{ $agente->fecha_inscripcion }}">
							</div>
							<div class="form-group">
								<input class="form-control" type="text" name="curp" placeholder="Clave Unica de Registro Población" value="{{ $agente->curp }}">
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="box box-primary">
						<div class="box-header with-border">
							<h3 class="box-title">Expedinte</h3>
						</div>
						<div class="box-body">
							<div class="form-group">
								<label for="carta_aaalac">Carta al Presidente de AAALAC</label> 
								<select class="form-control" id="carta_aaalac" name="carta_aaalac">
									<option value="No" @if($agente->carta_aaalac=="No") {{ 'selected' }} @endif>No</option> 
									<option value="Si" @if($agente->carta_aaalac=="Si") {{ 'selected' }} @endif>Si</option> 
								</select>
							</div>
							<div class="form-group">
								<label for="carta_referencia">Carta de Referencia Bancaria o de Negocios</label> 
								<select class="form-control" id="carta_referencia" name="carta_referencia">
									<option value="No" @if($agente->carta_referencia=="No") {{ 'selected' }} @endif>No</option> 
									<option value="Si" @if($agente->carta_referencia=="Si") {{ 'selected' }} @endif>Si</option> 
								</select>
							</div>
							<div class="form-group">
								<label for="copia_acta">Copia de Acta Constitutiva</label> 
								<select class="form-control" id="copia_acta" name="copia_acta">
									<option value="No" @if($agente->copia_acta=="No") {{ 'selected' }} @endif>No</option> 
									<option value="Si" @if($agente->copia_acta=="Si") {{ 'selected' }} @endif>Si</option> 
								</select>
							</div>
							<div class="form-group">
								<label for="copia_publicacion">Copia de la Publicacion del DOF</label> 
								<select class="form-control" id="copia_publicacion" name="copia_publicacion">
									<option value="No" @if($agente->copia_publicacion=="No") {{ 'selected' }} @endif>No</option> 
									<option value="Si" @if($agente->copia_publicacion=="Si") {{ 'selected' }} @endif>Si</option> 
								</select>
							</div>
							<div class="form-group">
								<label for="copia_no_ade">Copia de Carta de no Adeudo</label> 
								<select class="form-control" id="copia_no_ade" name="copia_no_ade">
									<option value="No" @if($agente->copia_no_ade=="No") {{ 'selected' }} @endif>No</option> 
									<option value="Si" @if($agente->copia_no_ade=="Si") {{ 'selected' }} @endif>Si</option> 
								</select>
							</div>
							<div class="form-group">
								<label for="copia_poder">Copia de Poder Notarial</label> 
								<select class="form-control" id="copia_poder" name="copia_poder">
									<option value="No" @if($agente->copia_poder=="No") {{ 'selected' }} @endif>No</option> 
									<option value="Si" @if($agente->copia_poder=="Si") {{ 'selected' }} @endif>Si</option> 
								</select>
							</div>
							<div class="form-group">
								<label for="pago">Pago de la Inscripcion</label> 
								<select class="form-control" id="pago" name="pago">
									<option value="No" @if($agente->pago=="No") {{ 'selected' }} @endif>No</option> 
									<option value="Si" @if($agente->pago=="Si") {{ 'selected' }} @endif>Si</option> 
								</select>
							</div>
							<div class="form-group">
								<input class="form-control" type="hidden" name="estatus" value="{{ $agente->estatus }}" id="estatus">
							</div>
						</div>
						<div class="box-footer">
							<input class="float-right btn btn-info" type="submit" value="Guardar Agente Aduanal">
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