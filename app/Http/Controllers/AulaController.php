<?php

namespace App\Http\Controllers;

use App\Models\Aula;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AulaController extends Controller
{
    
    public function index()
    {
        $aulas = DB::table('aulas')
        ->select('id', 'ordem', 'horario', 'turno')
        ->orderBy('turno', 'asc')
        ->get();
        return view('aula.index', ['aulas'=> $aulas]);
    }

    public function create()
    {
        return view('aula.create');

    }

    public function store(Request $request)
    {
        $aula = Aula::create([
            'ordem' => $request->ordem,
            'horario' => $request->horario,
            'turno' => $request->turno,
        ]);

       return redirect()->route('aula.create')->with('success', 'O horário: ' .$aula->horario .  ' foi criado com sucesso !!!');
    }

   
    public function show(Aula $aula)
    {
       
    }

 
    public function edit(Aula $aula)
    {
        return view('aula.edit', ['aula' => $aula]);
    }

    public function update(Request $request, Aula $aula)
    {
        $aula->update([
            'ordem' => $request->ordem,
            'horario' => $request->horario,
            'turno' => $request->turno
        ]);
        return redirect()->route('aula.edit',['aula' => $aula->id])->with('success', 'O horário foi alterado com sucesso !!!');

    }

    public function destroy(Aula $aula)
    {
        Aula::findOrFail($aula->id)->delete();
        return redirect()-> route('aula.index')-> with('success', 'O horário foi excluído com sucesso');
    }
}
