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
				@if ($errors->any())
				    <div class="alert alert-danger">
				    	<h5>Por favor corrija los errores</h5>
				    </div>
				@endif
				<form action="{{ route('pacientes.direccion.update', ['paciente' => $paciente, 'direccion' => $paciente->direccion]) }}" method="POST" class="needs-validated">
					@csrf
					@method('PUT')
					<h4 class="card-title">Dirección Física:</h4>
					<!--############### DIRECCION FÍSICA #################### -->
					<div class="form-row">
						<div class="form-group col-md-4">
							<label for="calle">✱ Calle</label>
							<input type="text"@if($errors->has('calle'))class="form-control is-invalid"@else class="form-control"@endif name="calle" id="calle" value="{{ $paciente->direccion->calle }}" required="">
							<div class="invalid-feedback">
								{{ $errors->first('calle') }}
							</div>
						</div>
						<div class="form-group col-md-4">
							<label for="num_ext ">✱ Número exterior</label>
							<input type="number" @if($errors->has('num_ext'))class="form-control is-invalid"@else class="form-control"@endif name="num_ext" id="num_ext" value="{{ $paciente->direccion->num_ext }}" required="">
							<div class="invalid-feedback">
								{{ $errors->first('num_ext') }}
							</div>
						</div>
						<div class="form-group col-md-4">
							<label for="num_int ">Número interior</label>
							<input type="number" name="num_int "  @if($errors->has('num_int '))class="form-control is-invalid"@else class="form-control"@endif id="num_int" value="{{ $paciente->direccion->num_int }}">
							<div class="invalid-feedback">
								{{ $errors->first('num_int ') }}
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-4">
							<label for="cp">✱ Código Postal</label>
							<input type="text" name="cp" @if($errors->has('cp'))class="form-control is-invalid"@else class="form-control"@endif id="cp" value="{{ $paciente->direccion->cp }}">
							<div class="invalid-feedback">
								{{ $errors->first('cp') }}
							</div>
						</div>
						<div class="form-group col-md-4">
							<label for="colonia" class="control-label">✱ Colonia</label>
							<input type="text" name="colonia" @if($errors->has('colonia'))class="form-control is-invalid"@else class="form-control"@endif id="colonia" value="{{ $paciente->direccion->colonia }}" required="">
							<div class="invalid-feedback">
								{{ $errors->first('colonia') }}
							</div>
						</div>
						<div class="form-group col-md-4">
							<label for="delegacion">✱ Delegación o Municipio</label>
							<input type="text" name="delegacion" @if($errors->has('delegacion'))class="form-control is-invalid"@else class="form-control"@endif id="delegacion" value="{{ $paciente->direccion->delegacion }}">
							<div class="invalid-feedback">
								{{ $errors->first('delegacion') }}
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-4">
							<label for="ciudad">✱ Ciudad</label>
							<input type="text"  name="ciudad" @if($errors->has('ciudad'))class="form-control is-invalid"@else class="form-control"@endif id="ciudad" required="" value="{{ $paciente->direccion->ciudad }}">
							<div class="invalid-feedback">
								{{ $errors->first('ciudad') }}
							</div>
						</div>
						<div class="form-group col-md-4">
							<label for="estado">✱ Estado</label>
							<input type="text" name="estado" @if($errors->has('estado'))class="form-control is-invalid"@else class="form-control"@endif id="estado" required="" value="{{ $paciente->direccion->estado }}">
							<div class="invalid-feedback">
								{{ $errors->first('estado') }}
							</div>
						</div>
					</div>

					<div class="form-row">
						<label for="staticEmail" class="col-sm-4 col-form-label">¿Copiar datos de dirección física?:</label>
						<div class="form-group col-md-4">
							<div class="form-check">
								<input class="form-check-input" type="radio" name="copiar" value="si">
								<label class="form-check-label"  for="gridCheck">
									Si
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="copiar" value="no">
								<label class="form-check-label" for="gridCheck">
									No
								</label>
							</div>
						</div>
					</div>
					<!--########### TERMINA DIRECCION FISCAL  ##############-->
					<h4 class="card-title">Dirección Fiscal:</h4>
					<!--############### DIRECCION FISCAL #################### -->
					<div class="form-row">
						<div class="form-group col-md-4">
							<label for="fis_calle">Calle</label>
							<input type="text"@if($errors->has('fis_calle'))class="form-control is-invalid"@else class="form-control"@endif name="fis_calle" id="fis_calle" value="{{ $paciente->direccion->fis_calle }}">
							<div class="invalid-feedback">
								{{ $errors->first('fis_calle') }}
							</div>
						</div>
						<div class="form-group col-md-4">
							<label for="fis_num_ext ">Número exterior</label>
							<input type="number" @if($errors->has('fis_num_ext'))class="form-control is-invalid"@else class="form-control"@endif name="fis_num_ext" id="fis_num_ext" value="{{ $paciente->direccion->fis_num_ext }}">
							<div class="invalid-feedback">
								{{ $errors->first('fis_num_ext') }}
							</div>
						</div>
						<div class="form-group col-md-4">
							<label for="fis_num_int ">Número interior</label>
							<input type="number" name="fis_num_int "  @if($errors->has('fis_num_int '))class="form-control is-invalid"@else class="form-control"@endif id="fis_num_int" value="{{ $paciente->direccion->fis_num_int }}">
							<div class="invalid-feedback">
								{{ $errors->first('fis_num_int ') }}
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-4">
							<label for="fis_cp">Código Postal</label>
							<input type="text" name="fis_cp" @if($errors->has('fis_cp'))class="form-control is-invalid"@else class="form-control"@endif id="fis_cp" value="{{ $paciente->direccion->fis_cp }}">
							<div class="invalid-feedback">
								{{ $errors->first('fis_cp') }}
							</div>
						</div>
						<div class="form-group col-md-4">
							<label for="fis_colonia" class="control-label">Colonia</label>
							<input type="text" name="fis_colonia" @if($errors->has('fis_colonia'))class="form-control is-invalid"@else class="form-control"@endif id="fis_colonia" value="{{ $paciente->direccion->fis_colonia }}">
							<div class="invalid-feedback">
								{{ $errors->first('fis_colonia') }}
							</div>
						</div>
						<div class="form-group col-md-4">
							<label for="fis_delegacion">Delegación o Municipio</label>
							<input type="text" name="fis_delegacion" @if($errors->has('fis_delegacion'))class="form-control is-invalid"@else class="form-control"@endif id="fis_delegacion" value="{{ $paciente->direccion->fis_delegacion }}">
							<div class="invalid-feedback">
								{{ $errors->first('fis_delegacion') }}
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-4">
							<label for="fis_ciudad">Ciudad</label>
							<input type="text"  name="fis_ciudad" @if($errors->has('fis_ciudad'))class="form-control is-invalid"@else class="form-control"@endif id="fis_ciudad" value="{{ $paciente->direccion->fis_ciudad }}">
							<div class="invalid-feedback">
								{{ $errors->first('fis_ciudad') }}
							</div>
						</div>
						<div class="form-group col-md-4">
							<label for="fis_estado">Estado</label>
							<input type="text" name="fis_estado" @if($errors->has('fis_estado'))class="form-control is-invalid"@else class="form-control"@endif id="fis_estado" value="{{ $paciente->direccion->fis_estado }}">
							<div class="invalid-feedback">
								{{ $errors->first('fis_estado') }}
							</div>
						</div>
					</div>
					<!--########### TERMINA DIRECCION FISCAL  ##############-->
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
		$(document).ready(function($) {
			$("input[name=copiar]").click(function () {    
        		var valor = $(this).val();
        		if (valor == 'si') {
        			$('#fis_calle').val($('#calle').val());
        			$('#fis_num_ext').val(parseInt($('#num_ext').val(), 10));
        			$('#fis_num_int').val(parseInt($('#num_int').val(), 10)); 
        			$('#fis_cp').val($('#cp').val());
        			$('#fis_colonia').val($('#colonia').val());
        			$('#fis_delegacion').val($('#delegacion').val());
        			$('#fis_ciudad').val($('#ciudad').val());
        			$('#fis_estado').val($('#estado').val());
        		}
        		else{
        			$('#fis_calle').val('');
        			$('#fis_num_ext').val('');
        			$('#fis_num_int').val('');
        			$('#fis_cp').val('');
        			$('#fis_colonia').val('');
        			$('#fis_delegacion').val('');
        			$('#fis_ciudad').val('');
        			$('#fis_estado').val('');
        		}
		    });
		});
	</script>
@endsection