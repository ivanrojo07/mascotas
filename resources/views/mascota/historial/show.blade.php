@extends('principal')
@section('content')

	<div class="container">
		<div class="card">
			<div class="card-header">
				<div class="row">
					<div class="col-sm-4">
						<h4 class="card-title">Historial: {{ $mascota->nombre }}</h4>
					</div>
					<div class="col-sm-4 text-center">
						{{-- <a class="btn btn-primary btn-sm" href="{{ route('pacientes.show', ['paciente' => $mascota->paciente[0]]) }}">
							<i class="fa fa-list"></i><strong> Volver</strong>
						</a> --}}
					</div>
				</div>
			</div>
			<div class="card-body">					
					<h5>Dueño: {{ $mascota->dueños[0]->nombre_dueño }} {{ $mascota->dueños[0]->appaterno_dueño }} {{ $mascota->dueños[0]->apmaterno_dueño }}</h5>
				<div class="form-row">
					<div class="form-group col-md-3">
						<label for="">Hora</label>
						<input type="text" class="form-control" name="hora" value="{{ $historial->hora }}" readonly="">
					</div>
					<div class="form-group col-md-3">
						<label for="">Fecha</label>
						<input type="date" class="form-control" name="fecha" value="{{ $historial->fecha }}"  readonly="">
					</div>
					<div class="form-group col-md-3">
						<label for="">Medico Veterinario que asiste </label>
						<input type="text" class="form-control" name="medico_asiste" value="{{ $historial->medico_asiste }}">
					</div>
					<div class="form-group col-md-3">
						<label for="">Médico Veterinario tratante</label>
						<input type="text" name="medico_tratante" class="form-control" value="{{ $historial->medico_tratante }}">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-4">
						<label for="">✱ Motivo de la consulta</label>
						<textarea name="motivo" class="form-control" id="motivo" cols="30" rows="3" readonly="">{{ $historial->motivo }}</textarea>
					</div>
					<div class="form-group col-md-4">
						<label for="" class="control-label">✱ Sintomas</label>
						<textarea name="sintomas" class="form-control" id="sintomas" cols="30" rows="3" readonly="">{{ $historial->sintomas }}</textarea>
					</div>
					<div class="form-group col-md-4">
						<label for="tatuaje">Diagnóstico: </label>
						<textarea name="diagnostico" class="form-control" id="diagnostico" cols="30" rows="3" readonly="">{{ $historial->diagnostico }}</textarea>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-3">
						<label for="">✱ Peso</label>
						<input type="number" name="peso" class="form-control" value="{{ $historial->peso }}" readonly="">
					</div>
					<div class="form-group col-md-3">
						<label for="">✱ Temperatura</label>
						<input type="number" name="temperatura" class="form-control" step="0.5" value="{{ $historial->temperatura }}" readonly="">
					</div>
					
				</div>
				<div class="form-row">
					<div class="form-group col-md-3">
						<label for="">✱ Pruebas de laboratorio</label>
						<textarea name="pruebas_lab" class="form-control" id="priebas_lab" cols="30" rows="3">{{ $historial->pruebas_lab }}</textarea>
					</div>
					<div class="form-group col-md-3">
						<label for="">Tratamiento: </label>
						<textarea name="tratamiento" class="form-control" id="tratamiento" cols="30" rows="3">{{ $historial->tratamiento }}</textarea>
					</div>
					<div class="form-group col-md-3">
						<label for="esterilizado">✱ Medicamentos Aplicados</label>
						<textarea name="medicamentos" class="form-control" id="medicamentos" cols="30" rows="3">{{ $historial->medicamentos }}</textarea>
					</div>
					<div class="form-group col-md-3">
						<label for="castrado">✱ Dieta Sugerida</label>
						<textarea name="dieta" class="form-control" id="dieta" cols="30" rows="3">{{ $historial->dieta }}</textarea>
					</div>
				</div>
				{{-- <div class="text-center m-4">
					<button type="submit" class="btn btn-success">Guardar</button>
				</div> --}}
			</div>
		</div>
	</div>

@endsection
@section('scripts')
@endsection
