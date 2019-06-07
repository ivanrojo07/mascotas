@extends('principal')
@section('content')

	<div class="container">
		<div class="card">
			<div class="card-header">
				<div class="row">
					<div class="col-sm-4">
						<h4 class="card-title">Paciente:</h4>
					</div>
					<div class="col-sm-4 text-center">
						<a class="btn btn-primary btn-sm" href="{{ route('pacientes.index') }}">
							<i class="fa fa-list"></i><strong> Lista Pacientes</strong>
						</a>
					</div>
				</div>
			</div>
			<div class="card-body">
				@if ($errors->any())
				    <div class="alert alert-danger">
				    	<h5>Por favor corrija los errores</h5>
				    </div>
				@endif
				<form action="{{ route('pacientes.update', ['paciente' => $paciente]) }}" method="POST" class="needs-validated">
					@csrf
					@method('PUT')
					<h4 class="card-title">Datos Propietario:</h4>
					<div class="form-row">
						<div class="form-group col-md-2">
							<label for="inputEmail3">ID</label>
							<input type="text" class="form-control" readonly="" value="{{ $paciente->id}}">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-4">
							<label for="inputEmail4">✱ Nombre</label>
							<input type="text"@if($errors->has('nombre_dueño'))class="form-control is-invalid"@else class="form-control"@endif name="nombre_dueño" placeholder="nombre" value="{{ $paciente->nombre_dueño }}" required="">
							<div class="invalid-feedback">
								{{ $errors->first('nombre_dueño') }}
							</div>
						</div>
						<div class="form-group col-md-4">
							<label for="inputPassword4">✱ Apellido Paterno</label>
							<input type="text" @if($errors->has('appaterno_dueño'))class="form-control is-invalid"@else class="form-control"@endif name="appaterno_dueño" placeholder="Ap paterno" value="{{ $paciente->appaterno_dueño }}" required="">
							<div class="invalid-feedback">
								{{ $errors->first('appaterno_dueño') }}
							</div>
						</div>
						<div class="form-group col-md-4">
							<label for="inputAddress">Apellido Materno</label>
							<input type="text" name="apmaterno_dueño"  @if($errors->has('apmaterno_dueño'))class="form-control is-invalid"@else class="form-control"@endif placeholder="Ap materno" value="{{ $paciente->apmaterno_dueño }}">
							<div class="invalid-feedback">
								{{ $errors->first('apmaterno_dueño') }}
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-4">
							<label for="inputEmail4">✱ RFC</label>
							<input type="text" name="rfc" @if($errors->has('rfc'))class="form-control is-invalid"@else class="form-control"@endif value="{{ $paciente->rfc }}">
							<div class="invalid-feedback">
								{{ $errors->first('rfc') }}
							</div>
						</div>
						<div class="form-group col-md-4">
							<label for="inputPassword4" class="control-label">✱ Celular</label>
							<input type="tel" name="celular" @if($errors->has('celular'))class="form-control is-invalid"@else class="form-control"@endif value="{{ $paciente->celular }}" required="">
							<div class="invalid-feedback">
								{{ $errors->first('celular') }}
							</div>
						</div>
						<div class="form-group col-md-4">
							<label for="inputAddress">Telefono</label>
							<input type="tel" name="telefono" @if($errors->has('telefono'))class="form-control is-invalid"@else class="form-control"@endif value="{{ $paciente->telefono }}">
							<div class="invalid-feedback">
								{{ $errors->first('telefono') }}
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-4">
							<label for="inputCity">✱ Correo electrónico</label>
							<input type="email"  name="correo" @if($errors->has('correo'))class="form-control is-invalid"@else class="form-control"@endif placeholder="user@email.com" required="" value="{{ $paciente->correo }}">
							<div class="invalid-feedback">
								{{ $errors->first('correo') }}
							</div>
						</div>
						<div class="form-group col-md-4">
							<label for="whatsapp">✱ Whatsapp</label>
							<input type="text" name="whatsapp" @if($errors->has('whatsapp'))class="form-control is-invalid"@else class="form-control"@endif id="whatsapp" required="" value="{{ $paciente->whatsapp }}">
							<div class="invalid-feedback">
								{{ $errors->first('whatsapp') }}
							</div>
						</div>
					</div>
					<div class="form-row">
						<label for="staticEmail" class="col-sm-4 col-form-label">Desea Recibir Noticias por:</label>
						<div class="form-group col-md-4">
							<div class="form-check">
								<input class="form-check-input" type="radio" name="noticias" value="mensaje" @if($paciente->noticias=="mensaje") checked="" @endif>
								<label class="form-check-label"  for="gridCheck">
									Mensaje
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="noticias" value="whatsapp" @if($paciente->noticias=="whatsapp") checked="" @endif>
								<label class="form-check-label" for="gridCheck">
									Whatsapp
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="noticias" value="no-deseo" @if($paciente->noticias=="no-deseo") checked="" @endif>
								<label class="form-check-label" for="gridCheck">
									No deseo
								</label>
							</div>
						</div>
					</div>
					<div class="text-center m-4">
						<button type="submit" class="btn btn-success">Guardar</button>
					</div>
				</form>
			</div>
		</div>
	</div>

@endsection