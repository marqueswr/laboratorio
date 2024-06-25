@extends('web.blank')
@section('content')

<div class="card">
	<div class="card-header">
	    <a href="{{ route('programa.create') }}" class="btn btn-default" style="float:inline-end">NOVO PROGRAMA</a></br></br>
	</div>
	<div class="card-body">
	
	  <section class="panel">
		<header class="panel-heading">
			<div class="panel-actions">
				<a href="#" class="fa fa-caret-down"></a>
				<a href="#" class="fa fa-times"></a>
			</div>

			<h2 class="panel-title">Lista de programas cadastrados</h2>
		</header>
		<div class="panel-body">
			<div >
				<table class="table table-striped mb-none">
					<thead>
						<tr>
							<th>#</th>
							<th>Nome</th>
							<th>Informações</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						@foreach ( $programas as $programa )
						<tr>
							<td>{{ $programa->id}}</td>
							<td>{{ $programa->nome}}</td>
							<td>{{ $programa->informacoes}}</td>
							<td style="float:inline-end">
								<form id="formExcluir{{ $programa->id }}" action="{{ route('programa.destroy',['programa'=> $programa-> id]) }}" method="POST">
									@csrf
									  @method('delete')
									  <a class="btn btn-warning" href="{{ route('programa.edit',['programa'=> $programa->id]) }}" >Alterar</a>
									  <a type="submit" onclick="confirmarExclusao(event, {{ $programa->id }})" class="btn btn-danger float-end ms-2 px-3" href="{{ route('programa.destroy',['programa'=>$programa->id]) }}" >Excluir</a></td>
							   </form> 
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
		{{-- 		<div  style="float:inline-end">
				{{ $salas->onEachSide(0)->links() }}
			</div> --}}
			</div>
		</div>
	</section>
	
	</div>
  </div>


@endsection
					