<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col-sm-4">
				<h4 class="card-title">Datos del Propietario:</h4>
			</div>
			<div class="col-sm-4 text-center">
				<a class="btn btn-success btn-sm" href="{{ route('pacientes.create') }}">
					<i class="fa fa-plus"></i><strong> Agregar Paciente</strong>
				</a>
			</div>
			<div class="col-sm-4 text-center">
				<a class="btn btn-primary btn-sm" href="{{ route('pacientes.index') }}">
					<i class="fa fa-list"></i><strong> Lista Pacientes</strong>
				</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<div class="form-row">
			<div class="form-group col-md-2">
				<label class="form-control-label">ID</label>
				<dd><strong>{{ $paciente->id }}</strong></dd>
			</div>
			<div class="form-group col-md-3">
				<label class="form-control-label">Nombre</label>
				<dd><strong>{{ $paciente->Fullname }}</strong></dd>
			</div>
			<div class="form-group col-md-3">
				<label class="form-control-label">RFC</label>
				<dd><strong>{{ $paciente->rfc }}</strong></dd>
			</div>
			<div class="form-group col-md-3">
				<label class="form-control-label">Celular</label>
				<dd><strong>{{ $paciente->celular }}</strong></dd>
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-2">
				<label class="form-control-label">Teléfono</label>
				<dd><strong>{{ $paciente->telefono }}</strong></dd>
			</div>
			<div class="form-group col-md-3">
				<label class="form-control-label">Correo electrónico</label>
				<dd><strong>{{ $paciente->correo }}</strong></dd>
			</div>
			<div class="form-group col-md-3">
				<label class="form-control-label">Whatsapp</label>
				<dd><strong>{{ $paciente->whatsapp }}</strong></dd>
			</div>
			<div class="form-group col-md-4">
				<label class="col-form-label">Desea Recibir Noticias por: <strong>{{ $paciente->noticias }}</strong></label>
			</div>
		</div>
		<div class="m-4 text-center">
			<a class="btn btn-warning" href="{{ route('pacientes.edit', ['paciente' => $paciente]) }}">
				<i class="fa fa-pencil"></i><strong> Editar</strong>
			</a>
		</div>
		<div class="col-sm-4">
			<h4 class="card-title">Mascotas:</h4>
		</div>
		<div class="row rounded border p-4 m-3">
			<div class="col-md-12">
				<table class="table table-striped table-hover">
				  <thead class="thead-light">
				    <tr>
				      <th scope="col">Nombre</th>
				      <th scope="col">Raza</th>
				      <th scope="col">Acción</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <td>Mark</td>
				      <td>Otto</td>
				      <td>
				      	<a class="btn btn-primary btn-sm" href="{{ route('pacientes.index') }}">
							<i class="fa fa-pencil"></i><strong> Ver Historial</strong>
						</a>
						<a class="btn btn-success btn-sm" href="{{ route('pacientes.index') }}">
							<i class="fa fa-pencil"></i><strong> Nuevo Historial</strong>
						</a>
				      </td>
				    </tr>
				  </tbody>
				</table>
			</div>
		</div>
	</div>
</div>