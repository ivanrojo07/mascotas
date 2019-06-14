@extends('principal')
@section('content')

	<div class="container">
		<div class="card mb-4">
			@include('paciente.head')
			<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="pills-duenio-tab" data-toggle="pill" href="#pills-duenio" role="tab" aria-controls="pills-duenio" aria-selected="true">Otros Dueños</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="pills-dirfisica-tab" data-toggle="pill" href="#pills-dirfisica" role="tab" aria-controls="pills-dirfisica" aria-selected="false">Dirección Física</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="pills-dirfiscal-tab" data-toggle="pill" href="#pills-dirfiscal" role="tab" aria-controls="pills-dirfiscal" aria-selected="false">Dirección Fiscal</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="pills-histmedico-tab" data-toggle="pill" href="#pills-histmedico" role="tab" aria-controls="pills-histmedico" aria-selected="false">Historial Médico</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="pills-altamascota-tab" data-toggle="pill" href="#pills-altamascota" role="tab" aria-controls="pills-altamascota" aria-selected="false">Alta Mascotas</a>
				</li>
				{{-- <li class="nav-item">
					<a class="nav-link" id="pills-histmascota-tab" data-toggle="pill" href="#pills-histmascota" role="tab" aria-controls="pills-histmascota" aria-selected="false">Historial</a>
				</li> --}}
			</ul>
			<div class="tab-content" id="pills-tabContent">

				<!-- EMPIEZA OTROS DUEÑOS -->
				<div class="tab-pane fade show active" id="pills-duenio" role="tabpanel" aria-labelledby="pills-duenio">
					<div class="card-header">
						<div class="row">
							<div class="col-sm-4">
								<h4 class="card-title">Dueños:</h4>
							</div>
							<div class="col-sm-4 text-center">
								<a class="btn btn-success btn-sm" href="{{ route('pacientes.create') }}">
									<i class="fa fa-plus"></i><strong> Agregar Dueño</strong>
								</a>
							</div>
						</div>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-12">
								<table class="table table-striped table-hover">
								  <thead class="thead-default">
								    <tr>
								      <th scope="col">Nombre</th>
								      <th scope="col">Apellido Paterno</th>
								      <th scope="col">Apellido Materno</th>
								      <th scope="col">Acción</th>
								    </tr>
								  </thead>
								  <tbody>
								    <tr>
								      <td>Marcos</td>
								      <td>Resendiz</td>
								      <td>Nuñez</td>
								      <td>
								      	<a class="btn btn-warning btn-sm" href="#">
											<i class="fa fa-pencil"></i><strong> editar</strong>
										</a>
										<a class="btn btn-danger btn-sm" href="#">
											<i class="fa fa-pencil"></i><strong> eliminar</strong>
										</a>
								      </td>
								    </tr>
								  </tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<!-- TERMINA OTROS DUEÑOS -->

				<!-- EMPIEZA DIRECCIÓN FÍSICA -->
				<div class="tab-pane fade" id="pills-dirfisica" role="tabpanel" aria-labelledby="pills-dirfisica-tab">
					<div class="card-header">
						<div class="row">
							<div class="col-sm-4">
								<h4 class="card-title">Dirección Física:</h4>
							</div>
							@if(isset($paciente->direccion) )
							<div class="col-sm-4 text-center">
								<a class="btn btn-warning btn-sm" href="{{ route('pacientes.direccion.edit', ['paciente' => $paciente, 'direccion' => $paciente->direccion]) }}">
									<i class="fa fa-pencil"></i><strong> Editar Dirección</strong>
								</a>
							</div>
							@else
							<div class="col-sm-4 text-center">
								<a class="btn btn-success btn-sm" href="{{ route('pacientes.direccion.create', ['paciente' => $paciente]) }}">
									<i class="fa fa-plus"></i><strong> Agregar Dirección</strong>
								</a>
							</div>
							@endif
						</div>
					</div>
					<div class="card-body fondo-azul">
						@if(isset($paciente->direccion) )
							<div class="row text-center">
								<div class="col-md-3">
									<div class="rounded border my-2 bg-white">
										<label class="form-control-label">Calle</label>
										<dd><strong>{{ $paciente->direccion->calle }}</strong></dd>
									</div>
								</div>
								<div class="col-md-3">
									<div class="rounded border my-2 bg-white">
										<label class="form-control-label">Número exterior</label>
										<dd><strong>{{ $paciente->direccion->num_ext }}</strong></dd>
									</div>
								</div>
								<div class="col-md-3">
									<div class="rounded border my-2 bg-white">
										<label class="form-control-label">Número interior</label>
										<dd><strong>{{ $paciente->direccion->num_int != '' ? $paciente->direccion->num_int : "--" }}</strong></dd>
									</div>
								</div>
								<div class="col-md-3">
									<div class="rounded border my-2 bg-white">
										<label class="form-control-label">Código Postal</label>
										<dd><strong>{{ $paciente->direccion->cp }}</strong></dd>
									</div>
								</div>
							</div>
							<div class="row text-center">
								<div class="col-md-3">
									<div class="rounded border my-2 bg-white">
										<label class="form-control-label">Colonia</label>
										<dd><strong>{{ $paciente->direccion->colonia }}</strong></dd>
									</div>
								</div>
								<div class="col-md-3">
									<div class="rounded border my-2 bg-white">
										<label class="form-control-label">Delegación</label>
										<dd><strong>{{ $paciente->direccion->delegacion }}</strong></dd>
									</div>
								</div>
								<div class="col-md-3">
									<div class="rounded border my-2 bg-white">
										<label class="form-control-label">Ciudad</label>
										<dd><strong>{{ $paciente->direccion->ciudad }}</strong></dd>
									</div>
								</div>
								<div class="col-md-3">
									<div class="rounded border my-2 bg-white">
										<label class="form-control-label">Estado</label>
										<dd><strong>{{ $paciente->direccion->estado }}</strong></dd>
									</div>
								</div>
							</div>
						@else
							<h4>No hay dirección física</h4>
						@endif
					</div>

				</div>
				<!-- TERMINA OTROS DIRECCIÓN FÍSICA -->
				
				<!-- EMPIEZA OTROS DIRECCIÓN FISCAL -->
				<div class="tab-pane fade" id="pills-dirfiscal" role="tabpanel" aria-labelledby="pills-dirfiscal-tab">
					<div class="card-header">
						<div class="row">
							<div class="col-sm-4">
								<h4 class="card-title">Dirección Fiscal:</h4>
							</div>
							@if(isset($paciente->direccion) )
							<div class="col-sm-4 text-center">
								<a class="btn btn-warning btn-sm" href="{{ route('pacientes.direccion.edit', ['paciente' => $paciente, 'direccion' => $paciente->direccion]) }}">
									<i class="fa fa-pencil"></i><strong> Editar Dirección</strong>
								</a>
							</div>
							@else
							<div class="col-sm-4 text-center">
								<a class="btn btn-success btn-sm" href="{{ route('pacientes.direccion.create', ['paciente' => $paciente]) }}">
									<i class="fa fa-plus"></i><strong> Agregar Dirección</strong>
								</a>
							</div>
							@endif
						</div>
					</div>
					<div class="card-body fondo-azul">
						@if(isset($paciente->direccion) )
							<div class="row text-center">
								<div class="col-md-3">
									<div class="rounded border my-2 bg-white ">
										<label class="form-control-label">Calle</label>
										<dd><strong>{{ $paciente->direccion->fis_calle }}</strong></dd>
									</div>
								</div>
								<div class="col-md-3">
									<div class="rounded border my-2 bg-white">
										<label class="form-control-label">Número exterior</label>
										<dd><strong>{{ $paciente->direccion->fis_num_ext }}</strong></dd>
									</div>
								</div>
								<div class="col-md-3">
									<div class="rounded border my-2 bg-white">
										<label class="form-control-label">Número interior</label>
										<dd><strong>{{ $paciente->direccion->fis_num_int != '' ? $paciente->direccion->fis_num_int : "--" }}</strong></dd>
									</div>
								</div>
								<div class="col-md-3">
									<div class="rounded border my-2 bg-white">
										<label class="form-control-label">Código Postal</label>
										<dd><strong>{{ $paciente->direccion->fis_cp }}</strong></dd>
									</div>
								</div>
							</div>
							<div class="row text-center">
								<div class="col-md-3">
									<div class="rounded border my-2 bg-white">
										<label class="form-control-label">Colonia</label>
										<dd><strong>{{ $paciente->direccion->fis_colonia }}</strong></dd>
									</div>
								</div>
								<div class="col-md-3">
									<div class="rounded border my-2 bg-white">
										<label class="form-control-label">Delegación</label>
										<dd><strong>{{ $paciente->direccion->fis_delegacion }}</strong></dd>
									</div>
								</div>
								<div class="col-md-3">
									<div class="rounded border my-2 bg-white">
										<label class="form-control-label">Ciudad</label>
										<dd><strong>{{ $paciente->direccion->fis_ciudad }}</strong></dd>
									</div>
								</div>
								<div class="col-md-3 my-2">
									<div class="rounded border my-2 bg-white">
										<label class="form-control-label">Estado</label>
										<dd><strong>{{ $paciente->direccion->fis_estado }}</strong></dd>
									</div>
								</div>
							</div>
						@else
							<h4>No hay dirección fiscal</h4>
						@endif
					</div>
				</div>
				<!-- TERMINA OTROS DIRECCIÓN FISCAL -->

				<!-- EMPIEZA HISTORIAL MEDICO -->
				<div class="tab-pane fade" id="pills-histmedico" role="tabpanel" aria-labelledby="pills-histmedico-tab">
					<div class="card-header">
						<div class="row">
							<div class="col-sm-4">
								<h4 class="card-title">Historial Médico:</h4>
							</div>
							<div class="col-sm-4 text-center">
								{{-- <a class="btn btn-success btn-sm" href="{{ route('pacientes.create') }}">
									<i class="fa fa-plus"></i><strong> Agregar Dueño</strong>
								</a> --}}
							</div>
						</div>
					</div>
					<div class="card-body">
						<div class="row">
							{{-- <div class="col-md-12">
								<table class="table table-striped table-hover">
								  <thead class="thead-default">
								    <tr>
								      <th scope="col">Nombre</th>
								      <th scope="col">Apellido Paterno</th>
								      <th scope="col">Apellido Materno</th>
								      <th scope="col">Acción</th>
								    </tr>
								  </thead>
								  <tbody>
								    <tr>
								      <td>Marcos</td>
								      <td>Resendiz</td>
								      <td>Nuñez</td>
								      <td>
								      	<a class="btn btn-warning btn-sm" href="{{ route('pacientes.edit', ['paciente' => $paciente]) }}">
											<i class="fa fa-pencil"></i><strong> editar</strong>
										</a>
										<a class="btn btn-danger btn-sm" href="{{ route('pacientes.destroy', ['paciente' => $paciente]) }}">
											<i class="fa fa-pencil"></i><strong> eliminar</strong>
										</a>
								      </td>
								    </tr>
								  </tbody>
								</table>
							</div> --}}
						</div>
					</div>
				</div>
				<!-- TERMINA HISTORIAL MEDICO -->
				<div class="tab-pane fade" id="pills-altamascota" role="tabpanel" aria-labelledby="pills-altamascota-tab">
					<div class="card-header">
						<div class="row">
							<div class="col-sm-4">
								<h4 class="card-title">Mascotas:</h4>
							</div>
							<div class="col-sm-4 text-center">
								<a class="btn btn-success btn-sm" href="{{ route('pacientes.mascotas.create', ['paciente' => $paciente]) }}">
									<i class="fa fa-plus"></i><strong> Agregar Mascota</strong>
								</a>
							</div>
						</div>
					</div>
					<div class="card-body text-center">
						<div class="row rounded border p-4 m-3 justify-content-md-center">
							<div class="col-md-6">
								@if($paciente->mascotas->count() > 0)
								<table class="table table-striped table-hover table-responsive">
								  <thead class="thead-light">
								    <tr>
								      <th scope="col">Nombre</th>
								      <th scope="col">Raza</th>
								      <th scope="col">Acción</th>
								    </tr>
								  </thead>
								  <tbody>
								  @foreach($paciente->mascotas as $mascota)
								    <tr>
								      <td>{{ $mascota->nombre }}</td>
								      <td>{{ $mascota->raza }}</td>
								      <td>
								      	<a class="btn btn-primary btn-sm" href="{{ route('mascotas.historial.index', ['mascota' =>$mascota]) }}">
											<i class="fa fa-pencil"></i><strong> Ver Historial</strong>
										</a>
										<a class="btn btn-success btn-sm" href="{{ route('mascotas.historial.create', ['mascota' =>$mascota]) }}">
											<i class="fa fa-pencil"></i><strong> Nuevo Historial</strong>
										</a>
								      </td>
								    </tr>
								   @endforeach
								  </tbody>
								</table>
								@else
									<h4>No se han agregado mascotas</h4>
								@endif
							</div>
						</div>
						{{-- <div class="cardd 1">
						  <div class="card_image"> <img src="https://image.freepik.com/vector-gratis/fondo-patron-huesos-huellas_1374-18.jpg" /> </div>
						  <div class="card_title title-white">
						    <p>Agregar Mascota</p>
						  </div>
						</div> --}}
					</div>
				</div>
				<div class="tab-pane fade" id="pills-histmascota" role="tabpanel" aria-labelledby="pills-histmascota-tab">...</div>
			</div>
		</div>
	</div>

@endsection