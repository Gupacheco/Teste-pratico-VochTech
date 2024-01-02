<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colaborador extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'unidade_id', 'nome', 'cpf', 'email'];

    public function unidade(){
        return $this->belongsTo(Unidade::class);
    }

    public function cargosColaboradores(){
        return $this->hasMany(Cargo_Colaborador::class);
    }
}
