@extends('web.blank')
@section('content')

<div class="card">
	<div class="card-header">
	    <a href="{{ route('aula.create') }}" class="btn btn-default" style="float:inline-end">NOVO HORÁRIO</a></br></br>
	</div>
	<div class="card-body">
	
	  <section class="panel">
		<header class="panel-heading">
			<div class="panel-actions">
				<a href="#" class="fa fa-caret-down"></a>
				<a href="#" class="fa fa-times"></a>
			</div>

			<h2 class="panel-title">Lista de horários cadastrados</h2>
		</header>
		<div class="panel-body">
			<div >
				<table class="table table-striped mb-none">
					<thead>
						<tr>
							<th>#</th>
							<th>ORDEM</th>
							<th>HORÁRIO</th>
							<th>TURNO</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						@foreach ( $aulas as $aula )
						<tr>
							<td>{{ $aula->id}}</td>
							<td>{{ $aula->ordem}}</td>
							<td>{{ $aula->horario}}</td>
							<td>{{ $aula->turno}}</td>
							<td style="float:inline-end">
								<form id="formExcluir{{ $aula->id }}" action="{{ route('aula.destroy',['aula'=> $aula-> id]) }}" method="POST">
									@csrf
									  @method('delete')
									  <a class="btn btn-warning" href="{{ route('aula.edit',['aula'=> $aula->id]) }}" >Alterar</a>
									  <a type="submit" onclick="confirmarExclusao(event, {{ $aula->id }})" class="btn btn-danger float-end ms-2 px-3" href="{{ route('aula.destroy',['aula'=>$aula->id]) }}" >Excluir</a></td>
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
					