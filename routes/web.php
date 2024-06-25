<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AulaController;
use App\Http\Controllers\SalaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProgramaController;
use App\Http\Controllers\AgendamentoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard'); 

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/logout', [SalaController::class, 'logout'])->name('login.logout');
    Route::get('/sala', [SalaController::class, 'index'])->name('sala.index');
    Route::get('/sala-create',[SalaController::class, 'create'])->name('sala.create');
    Route::post('/sala-store',[SalaController::class, 'store'])->name('sala.store');
    Route::get('/sala-edit-{sala}', [SalaController::class, 'edit'])->name('sala.edit');
    Route::put('/sala-update-{sala}', [SalaController::class, 'update'])->name('sala.update');
    Route::delete('/sala-destroy-{sala}', [SalaController::class, 'destroy'])->name('sala.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/programa', [ProgramaController::class, 'index'])->name('programa.index');
    Route::get('/programa-create',[ProgramaController::class, 'create'])->name('programa.create');
    Route::post('/programa-store',[ProgramaController::class, 'store'])->name('programa.store');
    Route::get('/programa-edit-{programa}', [ProgramaController::class, 'edit'])->name('programa.edit');
    Route::put('/programa-update-{programa}', [ProgramaController::class, 'update'])->name('programa.update');
    Route::delete('/programa-destroy-{programa}', [ProgramaController::class, 'destroy'])->name('programa.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/aula', [AulaController::class, 'index'])->name('aula.index');
    Route::get('/aula-create',[AulaController::class, 'create'])->name('aula.create');
    Route::post('/aula-store',[AulaController::class, 'store'])->name('aula.store');
    Route::get('/aula-edit-{aula}', [AulaController::class, 'edit'])->name('aula.edit');
    Route::put('/aula-update-{aula}', [AulaController::class, 'update'])->name('aula.update');
    Route::delete('/aula-destroy-{aula}', [AulaController::class, 'destroy'])->name('aula.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/agendamento', [AgendamentoController::class, 'index'])->name('agendamento.index');
    Route::get('/agendamento-create',[AgendamentoController::class, 'create'])->name('agendamento.create');
    Route::post('/agendamento-store',[AgendamentoController::class, 'store'])->name('agendamento.store');
    Route::get('/agendamento-edit-{agendamento}', [AgendamentoController::class, 'edit'])->name('agendamento.edit');
    Route::put('/agendamento-update-{agendamento}', [AgendamentoController::class, 'update'])->name('agendamento.update');
    Route::delete('/agendamento-destroy-{agendamento}', [AgendamentoController::class, 'destroy'])->name('agendamento.destroy');
});
require __DIR__.'/auth.php';
