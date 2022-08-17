<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

interface EmployeeRepositoryInterface
{
    public function __construct(Model $model);
    public function list(Request $data);
    public function get($id);
    public function store(array $data);
    public function update(array $data, $id);
    public function destroy($id);
}