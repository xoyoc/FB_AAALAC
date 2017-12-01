@extends('admin.layouts')

@push('style')
    <link rel="stylesheet" href="../admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
@endpush

@section('encabezado')
	<section class="content-header">
		<h1>
			Listado de agencias aduanales
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i>Inicio</a></li>
			<li class="active">Agencias</li>
		</ol>
	</section>
@endsection

@section('contenido')
	<section class="content">
		<a class="float-right btn btn-info" href="{{ route('agencias.create') }}">Nuevo Agencia Aduanal</a>
		<div class="box-body">
			<table id="table" class="table table-bordered table-hover">
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