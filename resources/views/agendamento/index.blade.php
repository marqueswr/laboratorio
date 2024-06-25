@extends('web.blank')
@section('content')

@if (session()->has('negadaExclusao'))
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            Swal.fire('Exclusão não realizada !', "{{ session('negadaExclusao') }}", 'warning');
        })
    </script>
@endif

@if (session()->has('negadaAlteracao'))
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            Swal.fire('Alteração não permitida !', "{{ session('negadaAlteracao') }}", 'warning');
        })
    </script>
@endif

<div class="card">
	<div class="card-header">
	    <a href="{{ route('agendamento.create') }}" class="btn btn-default" style="float:inline-end">NOVO AGENDAMENTO</a></br></br>
	</div>
	<div class="card-body">
	
	  <section class="panel">
		<header class="panel-heading">
			<div class="panel-actions">
				<a href="#" class="fa fa-caret-down"></a>
				<a href="#" class="fa fa-times"></a>
			</div>

			<h2 class="panel-title">Lista de aulas agendadas</h2>
		</header>
		<div class="panel-body">
			<div >
				<table class="table table-striped mb-none">
					<thead>
						<tr>
							
							<th>Aula</th>
							<th>Horário</th>
							<th>Turno</th>
							<th>Professor(a)</th>
							<th>Programa</th>
							<th>Descrição</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						@foreach ( $agendamentos as $agendamento )
						<tr>
							
							<td>{{ $agendamento->aula->ordem}}</td>
							<td>{{ $agendamento->aula->horario}}</td>
							<td>{{ $agendamento->turno}}</td>
							<td>{{ $agendamento->professor->nome}}</td>
							<td>{{ $agendamento->programa->nome }}</td>
							<td>{{ $agendamento->programa->informacoes}}</td>
							<td style="float:inline-end">
								<form id="formExcluir{{ $agendamento->id }}" action="{{ route('agendamento.destroy',['agendamento'=> $agendamento-> id]) }}" method="POST">
									@csrf
									  @method('delete')
									  <a class="btn btn-warning" href="{{ route('agendamento.edit',['agendamento'=> $agendamento->id]) }}" >Alterar</a>
									  <a type="submit" onclick="confirmarExclusao(event, {{ $agendamento->id }})" class="btn btn-danger float-end ms-2 px-3" href="{{ route('agendamento.destroy',['agendamento'=>$agendamento->id]) }}" >Excluir</a></td>
						
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
					