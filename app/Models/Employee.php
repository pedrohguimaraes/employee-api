<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model 
{

    protected $table = 'employees';

    protected $fillable = [
        'name', 
        'cpf',
        'email',
        'rg',
        'birth_date',
        'cep',
        'address',
        'number',
        'city',
        'state',
    ];

    public function salary()
    {
        return $this->hasMany(Salary::class, 'employee_id');
    }
}
