<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    // Liberando as colunas para o formulário salvar no banco
    protected $fillable = [
        'name',
        'email'
    ];
}