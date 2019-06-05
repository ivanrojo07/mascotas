@extends('principal')
@section('content')
	{{-- expr --}}
	<div>
		<ul class="nav nav-pills">
			<li class="nav-item"><a class="nav-link" href="{{ route('empleados.show', ['empleado' => $empleado]) }}">Generales:</a></li>
			<li class="nav-item"><a class="nav-link" href="{{ route('empleados.laborals.index', ['empleado' => $empleado]) }}">Laborales:</a></li>
			<li class="nav-item"><a class="nav-link active" href="{{ route('empleados.estudios.index', ['empleado' => $empleado]) }}">Estudios:</a></li>
			<li class="nav-item"><a class="nav-link" href="{{ route('empleados.emergencias.index', ['empleado' => $empleado]) }}">Emergencias:</a></li>
			<li class="nav-item"><a class="nav-link" href="{{ route('empleados.vacaciones.index', ['empleado' => $empleado]) }}">Vacaciones:</a></li>
			<li class="nav-item"><a class="nav-link" href="{{ route('empleados.faltas.index', ['empleado' => $empleado]) }}">Administrativo:</a></li>
		</ul>
	</div>
	<div class="panel-default">
		<div class="panel-heading"><h5>Estudios:</h5></div>
		<div class="panel-body">
			<div class="col-md-12 offset-md-2 mt-3">
				<div class="form-group col-xs-3">
					<label class="control-label" for="escolaridad1" id="lbl_escolaridad1">Escolaridad 1:</label>
					<dd>{{$estudios->escolaridad1}}</dd>
				</div>
				<div class="form-group col-xs-3">
					<label class="control-label" for="institucion1" id="lbl_inst1">Institución:</label>
					<dd>{{ $estudios->institucion1 }}</dd>
				</div>
				<div class="form-group col-xs-3">
					<label class="control-label" for="cedula1" id="lbl_cedula">Número de Cédula:</label>
					<dd>"{{ $estudios->cedula1 }}</dd>
				</div>
			</div>
			<div class="col-md-12 offset-md-2 mt-3">
				<div class="form-group col-xs-3">
					<label class="control-label" for="escolaridad2" id="lbl_escolaridad2">Escolaridad 2:</label>
					<dd>{{$estudios->escolaridad2}}</dd>
				</div>
				<div class="form-group col-xs-3">
					<label class="control-label" for="institucion2" id="lbl_inst2">Institución:</label>
					<dd>{{ $estudios->institucion2 }}</dd>
				</div>
				<div class="form-group col-xs-3">
					<label class="control-label" for="cedula2" id="lbl_cedula2">Número de Cédula:</label>
					<dd>{{ $estudios->cedula2 }}</dd>
				</div>
			</div>
			<div class="col-md-12 offset-md-2 mt-3">
				<div class="form-group col-xs-3">
					<label class="control-label" for="idioma1" id="lbl_idioma">Idioma:</label>
					<dd>{{$estudios->idioma1}}</dd>
				</div>
				<div class="form-group col-xs-3">
					<label class="control-label" for="nivel1" id="lbl_nivel">Nivel:</label>
					<dd>{{$estudios->nivel1}}</dd>
				</div>
			</div>
			<div class="col-md-12 offset-md-2 mt-3">
				<div class="form-group col-xs-3">
					<label class="control-label" for="idioma2" id="lbl_idioma">Idioma:</label>
					<dd>{{$estudios->idioma2}}</dd>
				</div>
				<div class="form-group col-xs-3">
					<label class="control-label" for="nivel2" id="lbl_nivel">Nivel:</label>
					<dd>{{$estudios->nivel2}}</dd>
				</div>
			</div>
			<div class="col-md-12 offset-md-2 mt-3">
				<div class="form-group col-xs-3">
					<label class="control-label" for="idioma3" id="lbl_idioma">Idioma:</label>
					<dd>{{$estudios->idioma3}}</dd>
				</div>
				<div class="form-group col-xs-3">
					<label class="control-label" for="nivel3" id="lbl_nivel">Nivel:</label>
					<dd>{{$estudios->nivel3}}</dd>
				</div>
			</div>
			<div class="col-md-12 offset-md-2 mt-3">
				<div class="form-group col-xs-4">
					<label class="control-label" for="curso1" id="lbl_curso">Curso:</label>
					<dd>{{ $estudios->curso1 }}</dd>
					<div class="boton checkbox-disabled">
					<label>¿Certificación?</label>
					@if ($estudios->certificado1 == 1)
						{{-- expr --}}
						<dd>Si</dd>
					@else
						<dd>No</dd>
					@endif
				</div>
			</div>
			<div class="form-group col-xs-4">
					<label class="control-label" for="curso2" id="lbl_curso">Curso 2:</label>
					<dd>{{ $estudios->curso2 }}</dd>
					<div class="boton checkbox-disabled">
					<label>¿Certificación?</label>
					@if ($estudios->certificado2 == 1)
						{{-- expr --}}
						<dd>Si</dd>
					@else
						<dd>No</dd>
					@endif
				</div>
			</div>
			<div class="form-group col-xs-4">
					<label class="control-label" for="curso3" id="lbl_curso">Curso 3:</label>
					<dd>{{ $estudios->curso3 }}</dd>
					<div class="boton checkbox-disabled">
					<label>¿Certificación?</label>
					@if ($estudios->certificado2 == 1)
						{{-- expr --}}
						<dd>Si</dd>
					@else
						<dd>No</dd>
					@endif
				</div>
			</div>
			<a class="btn btn-info btn-md" href="{{ route('empleados.estudios.edit',['empleado'=>$empleado,'estudio'=>$estudios]) }}">Editar</a>
		</div>
	</div>
@endsection