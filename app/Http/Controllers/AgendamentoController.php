<?php

namespace App\Http\Controllers;

use App\Models\Aula;
use App\Models\Programa;
use App\Models\Agendamento;
use Illuminate\Http\Request;

class AgendamentoController extends Controller
{
   
    public function index()
    {
        $agendamentos= Agendamento::all();
        return view('agendamento.index',['agendamentos'=>$agendamentos]);
    }

 
    public function create()
    {
       $aulas = Aula::all();
       $programas = Programa::all();

       return view('agendamento.create',[
        'aulas'=>$aulas,
        'programas'=>$programas
       ]);
       
    }


    public function store(Request $request)
    {
        
        $agendamentoExistente = Agendamento::when($request->has('laboratorio'), function($whenQuery) use ($request){
            $whenQuery->where('laboratorio','=',$request->laboratorio);
        })
        ->when($request->filled('aula'), function($whenQuery) use ($request){
            $whenQuery->where('aula_id','=',$request->aula);
        })
        ->when($request->filled('turno'), function($whenQuery) use ($request){
            $whenQuery->where('turno','=',$request->turno);
        })
        ->when($request->filled('dtaaula'), function($whenQuery) use ($request){
            $whenQuery->where('dtaaula','=',$request->dtaaula);
        })
        ->get();
        
        
       $total = $agendamentoExistente->count();

        if($total>0)
        {
            return redirect()->route('agendamento.create')->with('error', 'O horário solicitado não está disponível !');
        }
        else
        {
            $agendamento = Agendamento::create([
                'professor_id' => auth()->user()->id,
                'programa_id' => $request->programa,
                'aula_id' => $request->aula,
                'turno' => $request->turno,
                'dtaaula' => $request->dtaaula,
                'laboratorio' => $request->laboratorio
                
            ]);
            return redirect()->route('agendamento.create')->with('success', 'O horário: ' .$agendamento->aula->horario .  ' foi criado com sucesso !!!');
        }

    }

  
    public function show(Agendamento $agendamento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Agendamento $agendamento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Agendamento $agendamento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Agendamento $agendamento)
    {
        //
    }
}
