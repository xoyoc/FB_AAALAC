@extends('layouts')

@section('contenido')
	<h2 class="my-3">Editar Agente Aduanal</h2>
	<form method="POST" action="{{ route('agentes.update', $agente->id) }}" class="form-control mt-4 pl-4" >
		{!! csrf_field() !!}
		{!! method_field('PUT') !!}
		<input class="form-control w-50 mb-2" type="number" name="patente" placeholder="Numero de patente" value="{{ $agente->patente }}">
		<input class="form-control w-50 mb-2" type="text" name="nombreaa" placeholder="Nombre del Agente Aduanal" value="{{ $agente->nombreaa }}">
		<input class="form-control w-50 mb-2" type="email" name="email" placeholder="Correo Electronico" value="{{ $agente->email }}">
		<input class="form-control w-50 mb-2" type="date"  name="fecha_inscripcion" placeholder="Fecha de Inscripción" value="{{ $agente->fecha_inscripcion }}">
		<input class="form-control w-50 mb-2" type="text" name="curp" placeholder="Clave Unica de Registro Población" value="{{ $agente->curp }}">
		<div class="form-group mb-3">
			<label for="carta_aaalac">Carta al Presidente de AAALAC</label> 
			<select class="form-control w-25" id="carta_aaalac" name="carta_aaalac">
				<option value="No" @if($agente->carta_aaalac=="No") {{ 'selected' }} @endif>No</option> 
				<option value="Si" @if($agente->carta_aaalac=="Si") {{ 'selected' }} @endif>Si</option> 
			</select>
		</div>
		<div class="form-group mb-3">
			<label for="carta_referencia">Carta de Referencia Bancaria o de Negocios</label> 
			<select class="form-control w-25" id="carta_referencia" name="carta_referencia">
				<option value="No" @if($agente->carta_referencia=="No") {{ 'selected' }} @endif>No</option> 
				<option value="Si" @if($agente->carta_referencia=="Si") {{ 'selected' }} @endif>Si</option> 
			</select>
		</div>
		<div class="form-group mb-3">
			<label for="copia_acta">Copia de Acta Constitutiva</label> 
			<select class="form-control w-25" id="copia_acta" name="copia_acta">
				<option value="No" @if($agente->copia_acta=="No") {{ 'selected' }} @endif>No</option> 
				<option value="Si" @if($agente->copia_acta=="Si") {{ 'selected' }} @endif>Si</option> 
			</select>
		</div>
		<div class="form-group mb-3">
			<label for="copia_publicacion">Copia de la Publicacion del DOF</label> 
			<select class="form-control w-25" id="copia_publicacion" name="copia_publicacion">
				<option value="No" @if($agente->copia_publicacion=="No") {{ 'selected' }} @endif>No</option> 
				<option value="Si" @if($agente->copia_publicacion=="Si") {{ 'selected' }} @endif>Si</option> 
			</select>
		</div>
		<div class="form-group mb-3">
			<label for="copia_no_ade">Copia de Carta de no Adeudo</label> 
			<select class="form-control w-25" id="copia_no_ade" name="copia_no_ade">
				<option value="No" @if($agente->copia_no_ade=="No") {{ 'selected' }} @endif>No</option> 
				<option value="Si" @if($agente->copia_no_ade=="Si") {{ 'selected' }} @endif>Si</option> 
			</select>
		</div>
		<div class="form-group mb-3">
			<label for="copia_poder">Copia de Poder Notarial</label> 
			<select class="form-control w-25" id="copia_poder" name="copia_poder">
				<option value="No" @if($agente->copia_poder=="No") {{ 'selected' }} @endif>No</option> 
				<option value="Si" @if($agente->copia_poder=="Si") {{ 'selected' }} @endif>Si</option> 
			</select>
		</div>
		<div class="form-group mb-3">
			<label for="pago">Pago de la Inscripcion</label> 
			<select class="form-control w-25" id="pago" name="pago">
				<option value="No" @if($agente->pago=="No") {{ 'selected' }} @endif>No</option> 
				<option value="Si" @if($agente->pago=="Si") {{ 'selected' }} @endif>Si</option> 
			</select>
		</div>
		<input class="form-control w-25 mb-3" type="text" name="estatus" value="{{ $agente->estatus }}" id="estatus" hidden="true">
		<input class="float-right btn btn-info" type="submit" value="Guardar Agente Aduanal">
	</form>
@endsection