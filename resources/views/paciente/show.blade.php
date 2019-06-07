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
				<li class="nav-item">
					<a class="nav-link" id="pills-histmascota-tab" data-toggle="pill" href="#pills-histmascota" role="tab" aria-controls="pills-histmascota" aria-selected="false">Historial</a>
				</li>
			</ul>
			<div class="tab-content" id="pills-tabContent">
				<div class="tab-pane fade show active" id="pills-duenio" role="tabpanel" aria-labelledby="pills-duenio">
					{{-- <div class="card-header">
					<div class="row">
							<div class="col-sm-4">
								<h4 class="card-title">Datos Paciente:</h4>
							</div>
							<div class="col-sm-4 text-center">
								<a class="btn btn-primary btn-sm" href="{{ route('pacientes.index') }}">
									<i class="fa fa-list"></i><strong> Lista Pacientes</strong>
								</a>
							</div>
						</div>
					</div> --}}
					<div class="card-body">
						<h4>Hola</h4>
						<h4>Hola</h4>
						<h4>Hola</h4>
						<h4>Hola</h4>
						<h4>Hola</h4>
					</div>
				</div>
				<div class="tab-pane fade" id="pills-dirfisica" role="tabpanel" aria-labelledby="pills-dirfisica-tab">...</div>
				<div class="tab-pane fade" id="pills-dirfiscal" role="tabpanel" aria-labelledby="pills-dirfiscal-tab">...</div>
				<div class="tab-pane fade" id="pills-histmedico" role="tabpanel" aria-labelledby="pills-histmedico-tab">...</div>
				<div class="tab-pane fade" id="pills-altamascota" role="tabpanel" aria-labelledby="pills-altamascota-tab">...</div>
				<div class="tab-pane fade" id="pills-histmascota" role="tabpanel" aria-labelledby="pills-histmascota-tab">...</div>
			</div>
		</div>
	</div>

@endsection