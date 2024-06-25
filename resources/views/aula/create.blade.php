@extends('web.blank')
@section('content')

@if (session()->has('success'))
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            Swal.fire('Gravação Efetuada!', "{{ session('success') }}", 'success');
        })
    </script>
@endif

<div class="card">
	<div class="card-header">
	    <a href="{{ route('aula.index') }}" class="btn btn-default" style="float:inline-end">VOLTAR PARA LISTAGEM</a></br></br>
	</div>
	<div class="card-body">
	
	  <section class="panel">
		<header class="panel-heading">
			<div class="panel-actions">
				<a href="#" class="fa fa-caret-down"></a>
				<a href="#" class="fa fa-times"></a>
			</div>

			<h2 class="panel-title alternative-font"><b>CADASTRAR UM NOVO PROGRAMA</b></h2>
		</header>
	<form action="{{ route('aula.store') }}" method="POST">
		@csrf
		<div class="panel-body">
			<label class="col-md-3 control-label text-primary"><b>NOME</b></label>
			<div class="col-md-12 form-group">
				<input type="text" id="ordem" name="ordem" placeholder="informe a aula" value="{{ old('ordem') }}"  class="form-control" required>
			</div>
		</br>
		<label class="col-md-3 control-label text-primary "><b>HORÁRIO</b></label>
			<div class="col-md-12 form-group">
				<input type="text" id="horario" name="horario" value="{{ old('horario') }}"  placeholder="informe a hora de início e hora de término" class="form-control" required>
			</div>
			
			<label class="col-md-3 control-label text-primary "><b>TURNO</b></label>
			<div class="col-md-12 form-group">
				<select  name="turno" id="turno" class="form-control">
					<option value="">-- Selecione o turno --</option>   
					<option value="matutino">
						matutino
					</option>
					<option value="vespertino">
					  vespertino
					</option>
				</select>
			</div>

			<div class="col-md-12 form-group">
				<button type="submit" class="mb-xs mt-xs mr-xs btn btn-primary">GRAVAR</button>
			</div>
			
		</div>
	</form>
	</div>
		
	</section>
	
	</div>
  </div>


@endsection
					