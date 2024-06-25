<?php

namespace App\Http\Controllers;

use App\Models\Programa;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

class ProgramaController extends Controller
{
    
    public function index()
    {     
        $programas = DB::table('programas')
        ->select('id', 'nome', 'informacoes')
        ->orderBy('nome', 'asc')
        ->get();

        return view('programa.index', ['programas'=> $programas]);
    }

    public function create()
    {
        return view('programa.create');
    }

    public function store(Request $request)
    {
        $programa = Programa::create([
            'nome' => $request->nome,
            'informacoes' => $request->informacoes
        ]);

       return redirect()->route('programa.create')->with('success', 'O programa: ' .$programa->nome .  ' foi criado com sucesso !!!');
    }

    public function show(Programa $programa)
    {
       
    }

    public function edit(Programa $programa)
    {
        return view('programa.edit', ['programa' => $programa]);
    }

    public function update(Request $request, Programa $programa)
    {
     
           $programa->update([
               'nome' => $request->nome,
               'informacoes' => $request->informacoes
           ]);
           return redirect()->route('programa.edit',['programa' => $programa->id])->with('success', 'O programa foi alterado com sucesso !!!');
    }
  
    public function destroy(Programa $programa)
    {
        Programa::findOrFail($programa->id)->delete();
        return redirect()-> route('programa.index')-> with('success', 'O programa foi excluídos com sucesso');
    }
}
