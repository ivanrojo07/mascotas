@extends('principal')
@section('content')

	<div class="container">
		<div class="card">
			<div class="card-header">
				<div class="row">
					<div class="col-sm-4">
						<h4 class="card-title">Mascotas:</h4>
					</div>
					<div class="col-sm-4 text-center">
						<a class="btn btn-primary btn-sm" href="{{ route('pacientes.mascotas.index', ['paciente' => $paciente]) }}">
							<i class="fa fa-list"></i><strong> Lista Mascotas</strong>
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
				<form action="{{ route('pacientes.mascotas.store', ['paciente' => $paciente]) }}" method="POST" class="needs-validated">
					@csrf
					<div class="form-row">
						<div class="form-group col-md-3">
							<label for="">Fecha</label>
							<input type="date" class="form-control" name="fecha" value="{{ date('Y-m-d') }}" required="" readonly="">
						</div>
						<div class="form-group col-md-3">
							<label for="">✱ Especie</label>
							<select name="especie" class="form-control">
								<option value=""></option>
								<option value="perro">Perro</option>
								<option value="gato">Gato</option>
								<option value="ave">Ave</option>
								<option value="hamster">Hámster</option>
								<option value="huron">Huron</option>
								<option value="conejo">Conejo</option>
								<option value="reptil">Reptil</option>
								<option value="rumiante">Rumiante</option>
							</select>
						</div>
						<div class="form-group col-md-3">
							<label for="">✱ Numero de paciente</label>
							<input type="text" @if($errors->has('num_paciente'))class="form-control is-invalid"@else class="form-control"@endif name="num_mascota" value="{{ old('num_paciente') }}" required="">
							<div class="invalid-feedback">
								{{ $errors->first('num_paciente') }}
							</div>
						</div>
						<div class="form-group col-md-3">
							<label for="">Apodo del paciente</label>
							<input type="text" name="apodo"  @if($errors->has('apodo'))class="form-control is-invalid"@else class="form-control"@endif value="{{ old('apodo') }}">
							<div class="invalid-feedback">
								{{ $errors->first('apodo') }}
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-3">
							<label for="">✱ Nombre del paciente</label>
							<input type="text" name="nombre" @if($errors->has('nombre'))class="form-control is-invalid"@else class="form-control"@endif value="{{ old('nombre') }}" required="">
							<div class="invalid-feedback">
								{{ $errors->first('nombre') }}
							</div>
						</div>
						<div class="form-group col-md-3">
							<label for="">✱ Raza</label>
							<select name="raza" class="form-control" required="">
								<option value=""></option>
								<option value="boxer">Boxer</option>
							</select>
						</div>
						<div class="form-group col-md-3">
							<label for="" class="control-label">✱ Sexo</label>
							<select name="sexo" class="form-control">
								<option value=""></option>
								<option value="macho">Macho</option>
								<option value="hembra">Hembra</option>
							</select>
						</div>
						<div class="form-group col-md-3">
							<label for="">✱ Fecha de Nacimiento</label>
							<input type="date" name="fecha_nac" @if($errors->has('fecha_nac'))class="form-control is-invalid"@else class="form-control"@endif value="{{ old('fecha_nac') }}">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-3">
							<label for="tatuaje">Tatuaje: </label>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="r-tatuaje" value="si">
								<label class="form-check-label" for="tatuaje-si">Si</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="r-tatuaje" value="no">
								<label class="form-check-label" for="tatuaje-no">No</label>
							</div>
							<input type="text" name="tatuaje" id="tatuaje" class="form-control" placeholder="Ubicación y forma" style="display: none;">
						</div>
						<div class="form-group col-md-3">
							<label for="">Microchip: </label>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="r-chip" value="si">
								<label class="form-check-label" for="chip-si">Si</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="r-chip" value="no">
								<label class="form-check-label" for="chip-no">No</label>
							</div>
							<input type="text"  name="chip" class="form-control" id="chip" placeholder="Número" style="display: none;">
						</div>
						<div class="form-group col-md-3">
							<label for="esterilizado">✱ Esterilizado</label>
							<select name="esterilizado" class="form-control">
								<option value=""></option>
								<option value="si">Si</option>
								<option value="no">No</option>
							</select>
						</div>
						<div class="form-group col-md-3">
							<label for="castrado">✱ Castrado</label>
							<select name="castrado" class="form-control">
								<option value=""></option>
								<option value="si">Si</option>
								<option value="no">No</option>
							</select>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-3">
							<label for="medico_tratante">✱ Medico Veterinario tratante</label>
							<input type="text" name="medico_tratante" @if($errors->has('medico_tratante'))class="form-control is-invalid"@else class="form-control"@endif id="medico_tratante" required="" value="{{ old('medico_tratante') }}">
							<div class="invalid-feedback">
								{{ $errors->first('medico_tratante') }}
							</div>
						</div>
						<div class="form-group col-md-6">
							<label for="observaciones">✱ Observaciones</label>
							<textarea name="observaciones" id="observaciones" cols="25" rows="5" class="form-control"></textarea>
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