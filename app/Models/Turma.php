<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_escola',
        'status',
        'turno',
        'nome',
    ];

    // Relacionamento com Escola
    public function escola() {
        return $this->belongsTo(Escola::class, 'id_escola');
    }

    // Relacionamento com Professor
    public function professores() {
        return $this->belongsToMany(Professor::class, 'professor_turma', 'id_turma', 'id_professor');
    }
}
