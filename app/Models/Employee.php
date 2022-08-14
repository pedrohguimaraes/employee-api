<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model 
{

    protected $fillable = [
        'name', 
        'cpf',
        'rg',
        'birth_date',
        'cep',
        'address',
        'number',
        'city',
        'state'
    ];
}
