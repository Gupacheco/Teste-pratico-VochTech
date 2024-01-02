<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unidade extends Model
{
    use HasFactory;
    
    protected $fillable = ['id', 'unidade_id', 'nome_fantasia', 'razao_social', 'cnpj'];

    public function colaboradores(){
        return $this->hasMany(Colaborador::class);
    }
}
