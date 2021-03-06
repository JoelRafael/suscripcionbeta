<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{

    protected $fillable=[
        "name", "apellido", "documentos", "rnc", "pais", "ciudad", "correo", "password"
    ];
    use HasFactory;
}
