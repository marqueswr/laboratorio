@extends('web.blank')
@section('content')

<div class="card">
	<div class="card-header">
	    <a href="{{ route('sala.create') }}" class="btn btn-default" style="float:inline-end">NOVA SALA</a></br></br>
	</div>
	<div class="card-body">
	
	  <section class="panel">
		<header class="panel-heading">
			<div class="panel-actions">
				<a href="#" class="fa fa-caret-down"></a>
				<a href="#" class="fa fa-times"></a>
			</div>

			<h2 class="panel-title">Lista de salas cadastradas</h2>
		</header>
		<div class="panel-body">
			<div >
				<table class="table table-striped mb-none">
					<thead>
						<tr>
							<th>#</th>
							<th>Gstp</th>
							<th>Descrição</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						@foreach ( $salas as $sala )
						<tr>
							<td>{{ $sala->id}}</td>
							<td>{{ $sala->gstp}}</td>
							<td>{{ $sala->descricao}}</td>
							<td style="float:inline-end">
								<form id="formExcluir{{ $sala->id }}" action="{{ route('sala.destroy',['sala'=> $sala-> id]) }}" method="POST">
									@csrf
									  @method('delete')
									  <a class="btn btn-warning" href="{{ route('sala.edit',['sala'=> $sala->id]) }}" >Alterar</a>
									  <a type="submit" onclick="confirmarExclusao(event, {{ $sala->id }})" class="btn btn-danger float-end ms-2 px-3" href="{{ route('sala.destroy',['sala'=>$sala->id]) }}" >Excluir</a></td>
						
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
					