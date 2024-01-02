<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargo_Colaborador extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'cargo_id', 'colaborador_id', 'nota_desempenho'];

    public function colaborador(){
        return $this->belongsTo(Colaborador::class);
    }

    public function cargo(){
        return $this->belongsTo(Cargo::class);
    }
}
