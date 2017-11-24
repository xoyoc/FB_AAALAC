@extends('layouts')

@section('contenido')
	<div class="w-100">
		<h2 class="float-left">Listado de Agentes Aduanales Asociados</h2>
	</div>
	<table class="table table-striped mt-5">
		<thead>
			<tr>
				<th>Patente</th>
				<th>Agente Aduanales</th>
				<th>Agencia Aduanal</th>
				<th>Telefono</th>
			</tr>
		</thead>
		{{ dd($agentes) }}
		<tbody>
			@foreach ($agentes as $agente)
				<tr>
					<td>{{ $agente }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection