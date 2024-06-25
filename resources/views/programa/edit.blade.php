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
	    <a href="{{ route('programa.index') }}" class="btn btn-default" style="float:inline-end">VOLTAR PARA LISTAGEM</a></br></br>
	</div>
	<div class="card-body">
	
	  <section class="panel">
		<header class="panel-heading">
			<div class="panel-actions">
				<a href="#" class="fa fa-caret-down"></a>
				<a href="#" class="fa fa-times"></a>
			</div>

			<h2 class="panel-title alternative-font"><b>ALTERAR UM PROGRAMA</b></h2>
		</header>
	<form action="{{ route('programa.update',['programa' => $programa->id]) }}" method="POST">
		@csrf
		@method('PUT')
		<div class="panel-body">
			<label class="col-md-3 control-label text-primary"><b>NOME</b></label>
			<div class="col-md-12 form-group">
				<input type="text" id="nome" name="nome" value="{{ old('nome', $programa->nome) }}"  placeholder="nome do programa" class="form-control" required>
			</div>
		</br>
		<label class="col-md-3 control-label text-primary "><b>INFORMAÇÕES</b></label>
			<div class="col-md-12 form-group">
				<input type="text" id="informacoes" name="informacoes" value="{{ old('informacoes', $programa->informacoes) }}" placeholder="endereço e dados completos" class="form-control" required>
			</div>
			
			<div class="col-md-12 form-group">
				<button type="submit" class="mb-xs mt-xs mr-xs btn btn-primary">ALTERAR</button>
			</div>
			
		</div>
	</form>
	</div>
		
	</section>
	
	</div>
  </div>


@endsection
					