<div class="panel-default">
	<div class="panel-heading">
		<div class="row">
			<div class="col-sm-4 form-group">
				<h4>Datos del Empleado:</h4>
			</div>
			<div class="col-sm-4 text-center form-group">
				<a class="btn btn-success" href="{{ route('empleados.create') }}">
					<i class="fa fa-plus"></i><strong> Agregar Empleado</strong>
				</a>
			</div>
			<div class="col-sm-4 text-center form-group">
				<a class="btn btn-primary" href="{{ route('empleados.index') }}">
					<i class="fa fa-bars"></i><strong> Lista de Empleados</strong>
				</a>
			</div>
		</div>
	</div>
	<div class="panel-body">
		<div class="row">
			<div class="form-group col-sm-3">
				<label class="control-label">Nombre:</label>
				<dd>{{ $empleado->nombre }}</dd>
			</div>
			<div class="form-group col-sm-3">
				<label class="control-label">Apellido Paterno:</label>
				<dd>{{ $empleado->appaterno }}</dd>
			</div>
			<div class="form-group col-sm-3">
				<label class="control-label">Apellido Materno:</label>
				<dd>{{ $empleado->apmaterno ? $empleado->apmaterno : 'N/A' }}</dd>
			</div>
			<div class="form-group col-sm-3">
				<label class="control-label">Fecha de nacimiento:</label>
				<dd>{{ $empleado->nacimiento }}</dd>
			</div>
		</div>
		<div class="row">
			<div class="form-group col-sm-3">
				<label class="control-label">RFC:</label>
				<dd>{{ $empleado->rfc }}</dd>
			</div>
			<div class="form-group col-sm-3">
				<label class="control-label">Correo electrónico:</label>
				<dd>{{ $empleado->email }}</dd>
			</div>
		</div>
	</div>
</div>