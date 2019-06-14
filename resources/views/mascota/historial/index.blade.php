@extends('principal')
@section('content')
<div class="container">
<div class="card mb-4">
<div class="card-header">
	<div class="row">
		<div class="col-sm-4">
			<h4 class="card-title">Historial: {{ $mascota->nombre }}</h4>
		</div>
		{{-- <div class="col-sm-4 text-center">
			<a class="btn btn-success btn-sm" href="{{ route('pacientes.create') }}">
				<i class="fa fa-plus"></i><strong> Agregar Dueño</strong>
			</a>
		</div> --}}
	</div>
</div>
<div class="card-body">
	<div class="row">
		<div class="col-md-12">
			<table class="table table-striped table-hover">
			  <thead class="thead-default">
			    <tr>
			      <th scope="col">Fecha</th>
			      <th scope="col">Motivo</th>
			      <th scope="col">Acción</th>
			    </tr>
			  </thead>
			  <tbody>
			  	@foreach($mascota->historial as $historial)
			    <tr>
			      <td>{{ $historial->fecha }}</td>
			      <td>{{ $historial->motivo }}</td>
			      <td>
			      	<a class="btn btn-primary btn-sm" href="{{ route('mascotas.historial.show', ['mascota' => $mascota,'historial' => $historial]) }}">
						<i class="fa fa-pencil"></i><strong> ver</strong>
					</a>
					{{-- <a class="btn btn-danger btn-sm" href="{{ route('pacientes.destroy', ['paciente' => $paciente]) }}">
						<i class="fa fa-pencil"></i><strong> eliminar</strong>
					</a> --}}
			      </td>
			    </tr>
			    @endforeach
			  </tbody>
			</table>
		</div>
	</div>
</div>
</div>
@endsection