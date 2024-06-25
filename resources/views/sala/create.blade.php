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
	    <a href="{{ route('sala.index') }}" class="btn btn-default" style="float:inline-end">VOLTAR PARA LISTAGEM</a></br></br>
	</div>
	<div class="card-body">
	
	  <section class="panel">
		<header class="panel-heading">
			<div class="panel-actions">
				<a href="#" class="fa fa-caret-down"></a>
				<a href="#" class="fa fa-times"></a>
			</div>

			<h2 class="panel-title alternative-font"><b>CADASTRAR UMA NOVA SALA</b></h2>
		</header>
	<form action="{{ route('sala.store') }}" method="POST">
		@csrf
		<div class="panel-body">
			<label class="col-md-3 control-label text-primary"><b>GSTP</b></label>
			<div class="col-md-12 form-group">
				<input type="text" id="gstp" name="gstp" placeholder="código da sala" value="{{ old('gstp') }}"  class="form-control" required>
			</div>
		</br>
		<label class="col-md-3 control-label text-primary "><b>DESCRIÇÃO</b></label>
			<div class="col-md-12 form-group">
				<input type="text" id="descricao" name="descricao" value="{{ old('descricao') }}"  placeholder="informe a descrição completa da sala" class="form-control" required>
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
					