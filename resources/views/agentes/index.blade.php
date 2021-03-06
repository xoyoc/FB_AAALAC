@extends('admin.layouts')

@push('style')
    <link rel="stylesheet" href="../admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
@endpush

@section('encabezado')
	<section class="content-header">
		<h1>
			Listado de agentes aduanales
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i>Inicio</a></li>
			<li class="active">Agentes</li>
		</ol>
	</section>
@endsection

@section('contenido')
	<section class="content">
		<a class="float-right btn btn-info btn-flat" href="{{ route('agentes.create') }}">Nuevo Agente Aduanal</a>
		<div class="box-body">
			<table id="table" class="table table-bordered table-hover">
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
		</div>
	</section>
@endsection

@push('scripts')
    <script src="../admin/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="../admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
	<script>
	  $(function () {
        $('#table').DataTable({
	      'paging'      : true,
	      'lengthChange': false,
	      'searching'   : false,
	      'ordering'    : true,
	      'info'        : true,
	      'autoWidth'   : false
		})
	  })
	</script>
@endpush