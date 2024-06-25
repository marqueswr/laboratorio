<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    use HasFactory;
    protected $table ="Agendamentos";
    protected $fillable = [
        'professor_id',
        'programa_id',
        'aula_id',
        'turno',
        'dtaaula',
        'laboratorio'
    ];

    public function professor(){
        return $this->belongsTo(Professor::class,'professor_id');
    } 
 
    public function programa(){
        return $this->belongsTo(Programa::class,'programa_id');
    } 

    public function aula(){
        return $this->belongsTo(Aula::class,'aula_id');
    } 

}
