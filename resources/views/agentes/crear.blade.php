@extends('layouts')

@section('contenido')
	<h2 class="my-3">Agregar nuevo agente aduanal</h2>
	<form method="POST" action="{{ route('agentes.store') }}" class="form-control mt-4 pl-4" >
		{!! csrf_field() !!}
		<input class="form-control w-50 mb-2" type="number" name="patente" placeholder="Numero de patente" value="{{ old('patente') }}"> {!! $errors->first('patente', '<span class="badge badge-pill badge-danger mb-3">:message</span>') !!}
		<input class="form-control w-50 mb-2" type="text" name="nombreaa" placeholder="Nombre del Agente Aduanal" value="{{ old('nombreaa') }}"> {!! $errors->first('nombreaa', '<span class="badge badge-pill badge-danger mb-3">:message</span>') !!}
		<input class="form-control w-50 mb-2" type="email" name="email" placeholder="Correo Electronico" value="{{ old('email') }}"> {!! $errors->first('email', '<span class="badge badge-pill badge-danger mb-3">:message</span>') !!}
		<input class="form-control w-50 mb-2" type="date"  name="fecha_inscripcion" placeholder="Fecha de Inscripción" value="{{ old('fecha_inscripcion') }}"> {!! $errors->first('fecha_inscripcion', '<span class="badge badge-pill badge-danger mb-3">:message</span>') !!}
		<input class="form-control w-50 mb-2" type="text" name="curp" placeholder="Clave Unica de Registro Población" value="{{ old('curp') }}"> {!! $errors->first('curp', '<span class="badge badge-pill badge-danger mb-3">:message</span>') !!}
		<div class="form-group mb-3">
			<label for="carta_aaalac">Carta al Presidente de AAALAC</label> 
			<select class="form-control w-25" id="carta_aaalac" name="carta_aaalac">
				<option value="No">No</option> 
				<option value="Si">Si</option> 
			</select>
		</div>
		<div class="form-group mb-3">
			<label for="carta_referencia">Carta de Referencia Bancaria o de Negocios</label> 
			<select class="form-control w-25" id="carta_referencia" name="carta_referencia">
				<option value="No">No</option> 
				<option value="Si">Si</option> 
			</select>
		</div>
		<div class="form-group mb-3">
			<label for="copia_acta">Copia de Acta Constitutiva</label> 
			<select class="form-control w-25" id="copia_acta" name="copia_acta">
				<option value="No">No</option> 
				<option value="Si">Si</option> 
			</select>
		</div>
		<div class="form-group mb-3">
			<label for="copia_publicacion">Copia de la Publicacion del DOF</label> 
			<select class="form-control w-25" id="copia_publicacion" name="copia_publicacion">
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
		<div class="form-group mb-3">
			<label for="copia_poder">Copia de Poder Notarial</label> 
			<select class="form-control w-25" id="copia_poder" name="copia_poder">
				<option value="No">No</option> 
				<option value="Si">Si</option> 
			</select>
		</div>
		<div class="form-group mb-3">
			<label for="pago">Pago de la Inscripcion</label> 
			<select class="form-control w-25" id="pago" name="pago">
				<option value="No">No</option> 
				<option value="Si">Si</option> 
			</select>
		</div>
		<input class="form-control w-25 mb-3" type="text" name="estatus" id="estatus" hidden="true" value="Pendinte">
		<input class="float-right btn btn-info" type="submit" value="Agregar al Agente Aduanal">
	</form>
@endsection