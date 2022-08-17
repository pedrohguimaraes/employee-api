<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeRequest;
use App\Services\EmployeeService;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    protected $service;

    public function __construct(EmployeeService $service)
    {
        $this->service = $service;
    }

    public function list(Request $request)
    {
        return $this->service->list($request);
    }

    public function get($id)
    {
        return $this->service->get($id);
    }

    public function store(Request $data)
    {   
        $this->validate($data,[
            'email' => 'required|unique:employees',
            'cpf' => 'required|unique:employees'
        ]);

        return $this->service->store($data->all());
    }

    public function update(Request $data, $id)
    {
        return $this->service->update($data->all(), $id);
    }

    public function destroy($id)
    {
        return $this->service->destroy($id);
    }

    public function salarysync(Request $data)
    {
        return $this->service->salarysync($data->all());
    }
}
