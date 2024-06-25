@extends('web.blank')
@section('content')

@if (session()->has('success'))
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            Swal.fire('Gravação Efetuada!', "{{ session('success') }}", 'success');
        })
    </script>
@endif

@if (session()->has('error'))
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            Swal.fire('Gravação não executada !', "{{ session('error') }}", 'error');
        })
    </script>
@endif

@if (session()->has('alteradoSucesso'))
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            Swal.fire('Alterado com sucesso !', "{{ session('alteradoSucesso') }}", 'success');
        })
    </script>
@endif

<div class="card">
	<div class="card-header">
	    <a href="{{ route('agendamento.index') }}" class="btn btn-default" style="float:inline-end">VOLTAR PARA LISTAGEM</a></br></br>
	</div>
	<div class="card-body">
	
	  <section class="panel">
		<header class="panel-heading">
			<div class="panel-actions">
				<a href="#" class="fa fa-caret-down"></a>
				<a href="#" class="fa fa-times"></a>
			</div>

			<h2 class="panel-title alternative-font"><b>ALTERAR O AGENDAMENTO</b></h2>
		</header>
	<form action="{{ route('agendamento.update',['agendamento'=>$agendamento]) }}" method="POST">
		@csrf
		@method('PUT')
		<div class="panel-body">
			<label class="col-md-3 control-label text-primary"><b>AULA</b></label>
			<div class="col-md-12 form-group">
				<select  name="aula" id="aula" class="form-control" required>
					<option value="">-- Selecione a aula --</option>  
					@foreach ($aulas as $aula)
					<option value="{{ $aula->id }}" {{old('aula_id', $agendamento->aula_id) == $aula->id ? 'selected' : '' }}>
						{{ $aula->horario }}
					</option>
					@endforeach 
				</select>
			</div>
		</br>
		<label class="col-md-3 control-label text-primary "><b>PROGRAMA</b></label>
			<div class="col-md-12 form-group">
				<select  name="programa" id="programa" class="form-control" required>
					<option value="">-- Selecione o programa --</option>   
					@foreach ($programas as $programa)
					<option value="{{ $programa->id }}" {{old('programa_id', $agendamento->programa_id) == $programa->id ? 'selected' : '' }}>
						{{ $programa->nome }} - {{ $programa->informacoes }}
					</option>
					@endforeach 
				</select>
			</div>
			
			<label class="col-md-3 control-label text-primary "><b>TURNO</b></label>
			<div class="col-md-12 form-group">
				<select  name="turno" id="turno" class="form-control" required>
					<option value="{{ $agendamento->turno }}">{{$agendamento->turno}}</option>  
					<option value="">-- Selecione o turno --</option>   
					<option value="matutino">
						matutino
					</option>
					<option value="vespertino">
					  vespertino
					</option>
				</select>
			</div>

			<label class="col-md-3 control-label text-primary "><b>LABORATÓRIO</b></label>
			<div class="col-md-12 form-group">
				<select  name="laboratorio" id="laboratorio" class="form-control" required>
					<option value="{{ $agendamento->laboratorio }}">{{$agendamento->laboratorio}}</option>  
					<option value="">-- Selecione o laboratório --</option>   
					<option value="laboratório 01">
						Laboratório 01 (menor)
					</option>
					<option value="laboratório 02">
					  Laboratório 02 (maior)
					</option>
				</select>
			</div>

			<label class="col-md-3 control-label text-primary "><b>DATA</b></label>
			<div class="col-md-12 form-group">
				<input type="date" id="dtaaula" name="dtaaula" value="{{ $agendamento->dtaaula }}"   class="form-control" required>
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
					