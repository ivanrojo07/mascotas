@extends('principal')
@section('content')

	<div class="container">
		<div class="card">
			<div class="card-header">
				<div class="row">
					<div class="col-sm-4">
						<h4 class="card-title">Historial:</h4>
					</div>
					<div class="col-sm-4 text-center">
						<a class="btn btn-primary btn-sm" href="{{ route('pacientes.show', ['paciente' => $mascota->paciente[0]]) }}">
							<i class="fa fa-list"></i><strong> Volver</strong>
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
				<form action="{{ route('mascotas.historial.store', ['mascota' => $mascota]) }}" method="POST" class="needs-validated">
					@csrf
					<div class="form-row">
						<div class="form-group col-md-3">
							@php
							$hora = new DateTime("now", new DateTimeZone('America/Mexico_City'));
							@endphp
							<label for="">Hora</label>
							<input type="text" class="form-control" name="hora" value="{{ $hora->format('H:i') }}" required="" readonly="">
						</div>
						<div class="form-group col-md-3">
							<label for="">Fecha</label>
							<input type="date" class="form-control" name="fecha" value="{{ date('Y-m-d') }}" required="" readonly="">
						</div>
						<div class="form-group col-md-3">
							<label for="">Medico Veterinario que asiste </label>
							<input type="text" class="form-control" name="medico_asiste" required="">
						</div>
						<div class="form-group col-md-3">
							<label for="">Médico Veterinario tratante</label>
							<input type="text" name="medico_tratante" class="form-control">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-4">
							<label for="">✱ Motivo de la consulta</label>
							<textarea name="motivo" class="form-control" id="motivo" cols="30" rows="3"></textarea>
						</div>
						<div class="form-group col-md-4">
							<label for="" class="control-label">✱ Sintomas</label>
							<textarea name="sintomas" class="form-control" id="sintomas" cols="30" rows="3"></textarea>
						</div>
						<div class="form-group col-md-4">
							<label for="tatuaje">Diagnóstico: </label>
							<textarea name="diagnostico" class="form-control" id="diagnostico" cols="30" rows="3"></textarea>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-3">
							<label for="">✱ Peso</label>
							<input type="number" name="peso" class="form-control" required="">
						</div>
						<div class="form-group col-md-3">
							<label for="">✱ Temperatura</label>
							<input type="number" name="temperatura" class="form-control" step="0.5">
						</div>
						
					</div>
					<div class="form-row">
						<div class="form-group col-md-3">
							<label for="">✱ Pruebas de laboratorio</label>
							<textarea name="pruebas_lab" class="form-control" id="priebas_lab" cols="30" rows="3"></textarea>
						</div>
						<div class="form-group col-md-3">
							<label for="">Tratamiento: </label>
							<textarea name="tratamiento" class="form-control" id="tratamiento" cols="30" rows="3"></textarea>
						</div>
						<div class="form-group col-md-3">
							<label for="esterilizado">✱ Medicamentos Aplicados</label>
							<textarea name="medicamentos" class="form-control" id="medicamentos" cols="30" rows="3"></textarea>
						</div>
						<div class="form-group col-md-3">
							<label for="castrado">✱ Dieta Sugerida</label>
							<textarea name="dieta" class="form-control" id="dieta" cols="30" rows="3"></textarea>
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
@section('scripts')
	<script>
		$(document).ready(function() {
    		$("input[name=r-tatuaje]").click(function () {    
		        if ($(this).val() == 'si'){
		        	$('#tatuaje').prop('style', '');
		        	$('#tatuaje').attr('required', true);
		        }
		         else{
		         	$('#tatuaje').prop('style', 'display:none;');
		         	$('#tatuaje').attr('required', false);
		         }
		    });

		    $("input[name=r-chip]").click(function () {    
		        if ($(this).val() == 'si'){
		         	$('#chip').prop('style', '');
		         	$('#tatuaje').attr('required', true);
		        }
		         else{
		         	$('#chip').prop('style', 'display:none;');
		         	$('#tatuaje').attr('required', false);
		         }
		    });
		
		});

	</script>
@endsection