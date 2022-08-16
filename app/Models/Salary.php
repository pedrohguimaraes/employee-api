<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salary extends Model 
{

    protected $table = 'salary';

    protected $fillable = [
        'id', 
        'employee_id',
        'salary'
    ];
}
