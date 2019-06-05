@extends('principal')
@section('content')

	<div class="container">
		<div class="card">
			<div class="card-header">
				<div class="row">
					<div class="col-sm-4">
						<h4 class="card-title">Pacientes:</h4>
					</div>
					<div class="col-sm-4 text-center">
						<a class="btn btn-primary btn-sm" href="{{ route('pacientes.index') }}">
							<i class="fa fa-list"></i><strong> Lista Pacientes</strong>
						</a>
					</div>
				</div>
			</div>
			<div class="card-body">
				<form action="">
					<h4 class="card-title">Datos Propietario:</h4>
					<div class="form-row">
						<div class="form-group col-md-2">
							<label for="inputEmail3">ID</label>
							<input type="email" class="form-control" id="inputEmail3" placeholder="Email" readonly="" value="100000">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-4">
							<label for="inputEmail4">✱ Nombre</label>
							<input type="email" class="form-control" id="inputEmail4" placeholder="nombre">
						</div>
						<div class="form-group col-md-4">
							<label for="inputPassword4">✱ Apellido Paterno</label>
							<input type="password" class="form-control" id="inputPassword4" placeholder="Ap paterno">
						</div>
						<div class="form-group col-md-4">
							<label for="inputAddress">Apellido Paterno</label>
							<input type="text" class="form-control" id="inputAddress" placeholder="Ap materno">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-4">
							<label for="inputEmail4">✱ RFC</label>
							<input type="email" class="form-control" id="inputEmail4" placeholder="nombre">
						</div>
						<div class="form-group col-md-4">
							<label for="inputPassword4">✱ Celular</label>
							<input type="password" class="form-control" id="inputPassword4" placeholder="Ap paterno">
						</div>
						<div class="form-group col-md-4">
							<label for="inputAddress">Telefono</label>
							<input type="text" class="form-control" id="inputAddress" placeholder="Ap materno">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-4">
							<label for="inputCity">Correo electrónico</label>
							<input type="text" class="form-control" id="inputCity">
						</div>
						<div class="form-group col-md-4">
							<label for="whatsapp">Whatsapp</label>
							<input type="text" class="form-control" id="whatsapp" name="whatsapp">
						</div>
					</div>
						<div class="form-row">
							<label for="staticEmail" class="col-sm-4 col-form-label">Desea Recibir Noticias por:</label>
							<div class="form-group col-md-4">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" id="gridCheck">
									<label class="form-check-label" for="gridCheck">
										Mensaje
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" id="gridCheck">
									<label class="form-check-label" for="gridCheck">
										Whats
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" id="gridCheck">
									<label class="form-check-label" for="gridCheck">
										No deseo
									</label>
								</div>
							</div>
						</div>
					<div class="text-center">
						<button type="submit" class="btn btn-success">Guardar</button>
					</div>
				</form>
			</div>
		</div>
	</div>

@endsection