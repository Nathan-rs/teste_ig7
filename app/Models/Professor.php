<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
    ];

    // Relacionamento com Turma
    public function turmas() {
        return $this->belongsToMany(Turma::class, 'professor_turma', 'id_professor', 'id_turma');
    }
}
