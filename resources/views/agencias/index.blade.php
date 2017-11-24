@extends('layouts')

@section('contenido')
	<div class="w-100">
		<h2 class="float-left">Listado de agencias aduanales</h2> <a class="float-right btn btn-info" href="{{ route('agencias.create') }}">Nuevo Agencia Aduanal</a>
	</div>
	<table class="table table-striped mt-5">
		<thead>
			<tr>
				<th>Agencia Aduanal</th>
				<th>Patente</th>
				<th>Nombre del Agente Aduanal</th>
				<th>Telefono</th>
				<th>Accion</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($agencias as $agencia)
				<tr>
					<td><a class="text-success" href="{{ route('agencias.show', $agencia->id) }}">{{ $agencia->nombre_agencia }}</a></td>
					<td>{{ $agencia->agente->patente }}</td>
					<td>{{ $agencia->agente->nombreaa }}</td>
					<td>{{ $agencia->telefono }}</td>
					<td>
						<a class="btn btn-success btn-sm" href="{{ route('agencias.edit', $agencia->id) }}">Editar</a> |
						<form  method="POST" action="{{ route('agencias.destroy', $agencia->id) }}" style="display: inline;">
							{!! csrf_field() !!}
							{!! method_field('DELETE') !!}
							<button class="btn btn-danger btn-sm" type="submit">Borrar</button>
						</form> 
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection