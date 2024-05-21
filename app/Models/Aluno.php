<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Aluno extends Authenticatable
{
    protected $guard = 'aluno'; 
    protected $fillable = [
        'name', 
        'email', 
        'password', 
        'status',
        'data_nascimento', 
        'responsavel', 
        'id_escola', 
        'sexo'
    ];
    use HasFactory, HasApiTokens, Notifiable;
}
