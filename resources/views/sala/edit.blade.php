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

			<h2 class="panel-title alternative-font"><b>ALTERAR UMA SALA</b></h2>
		</header>
	<form action="{{ route('sala.update',['sala' => $sala->id]) }}" method="POST">
		@csrf
		@method('PUT')
		<div class="panel-body">
			<label class="col-md-3 control-label text-primary"><b>GSTP</b></label>
			<div class="col-md-12 form-group">
				<input type="text" id="gstp" name="gstp" value="{{ old('gstp', $sala->gstp) }}"  placeholder="código da sala" class="form-control" required>
			</div>
		</br>
		<label class="col-md-3 control-label text-primary "><b>DESCRIÇÃO</b></label>
			<div class="col-md-12 form-group">
				<input type="text" id="descricao" name="descricao" value="{{ old('descricao', $sala->descricao) }}" placeholder="informe a descrição completa da sala" class="form-control" required>
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
					