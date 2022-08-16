<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

interface EmployeeRepositoryInterface
{
    public function __construct(Model $model);
    public function list();
    public function get($id);
    public function store(array $data);
    public function update(array $data, $id);
    public function destroy($id);
}