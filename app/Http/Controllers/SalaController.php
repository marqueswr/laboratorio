<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Sala;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;

class SalaController extends Controller
{
    
    public function index()
    {     
        $salas = DB::table('salas')
        ->select('id', 'gstp', 'descricao')
        ->orderBy('gstp', 'asc')
        ->get();

        return view('sala.index', ['salas'=> $salas]);
    }

    public function create()
    {
        return view('sala.create');
    }

    public function store(Request $request)
    {
        $sala = Sala::create([
            'gstp' => $request->gstp,
            'descricao' => $request->descricao
        ]);

       return redirect()->route('sala.create')->with('success', 'A sala: ' .$sala->gstp .  ' foi criada com sucesso !!!');
    }

    public function show(Sala $sala)
    {
       
    }

    public function edit(Sala $sala)
    {
        return view('sala.edit', ['sala' => $sala]);
    }

    public function update(Request $request, Sala $sala)
    {
     
           $sala->update([
               'gstp' => $request->gstp,
               'descricao' => $request->descricao
           ]);
           return redirect()->route('sala.edit',['sala' => $sala->id])->with('success', 'A sala foi alterada com sucesso !!!');
    }
  
    public function destroy(Sala $sala)
    {
        Sala::findOrFail($sala->id)->delete();
        return redirect()-> route('sala.index')-> with('success', 'A sala foi excluída com sucesso');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
