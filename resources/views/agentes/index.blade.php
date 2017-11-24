@extends('layouts')

@section('contenido')
	<div class="w-100">
		<h2 class="float-left">Listado de agentes aduanales</h2> <a class="float-right btn btn-info" href="{{ route('agentes.create') }}">Nuevo Agente Aduanal</a>
	</div>
	<table class="table table-striped mt-5">
		<thead>
			<tr>
				<th>Patente</th>
				<th>Agente Aduanales</th>
				<th>Correo Electronico</th>
				<th>Fecha</th>
				<th>Estatus</th>
				<th>Accion</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($agentes as $agente)
				<tr>
					<td>{{ $agente->patente }}</td>
					<td><a class="text-success" href="{{ route('agentes.show', $agente->id) }}">{{ $agente->nombreaa }}</a></td>
					<td>{{ $agente->email }}</td>
					<td>{{ date('d/M/Y',strtotime($agente->fecha_inscripcion)) }}</td>
					<td>{{ $agente->estatus }}</td>
					<td>
						<a class="btn btn-success btn-sm" href="{{ route('agentes.edit', $agente->id) }}">Editar</a> |
						<form  method="POST" action="{{ route('agentes.destroy', $agente->id) }}" style="display: inline;">
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