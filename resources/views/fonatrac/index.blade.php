@extends('admin.layouts')

@push('style')
    <link rel="stylesheet" href="../admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
@endpush

@section('encabezado')
	<section class="content-header">
		<h1>
			Listado de fondeos y atraques de buques
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i>Inicio</a></li>
			<li class="active">Fonatrac</li>
		</ol>
	</section>
@endsection

@section('contenido')
	<section class="content">
		<a class="float-right btn btn-info btn-flat" href="{{ route('fonatrac.create') }}">Registrar nuevo movimiento</a>
		<div class="box-body">
			<table id="table" class="table table-bordered table-hover">
				<thead>
					<tr>
						<th>Fecha</th>
						<th>Nombre Buque</th>
						<th>Bandera</th>
						<th>Viaje</th>
						<th>Movimiento</th>
						<th>Accion</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($fonatrac as $registro)
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td>{{ date('d/M/Y',strtotime($fonatrac->fecha_inscripcion)) }}</td>
							<td></td>
							<td>
								<a class="btn btn-success btn-sm" href="{{ route('fonatrac.edit', $fonatrac->id) }}">Editar</a> |
								<form  method="POST" action="{{ route('fonatrac.destroy', $fonatrac->id) }}" style="display: inline;">
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

@endpush