<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    use HasFactory;
    protected $table ="Professores";
    protected $fillable = [
        'nome'
    ];

    public function agendamentos()
    {
        return $this->hasMany(Agendamento::class);
    } 
}
