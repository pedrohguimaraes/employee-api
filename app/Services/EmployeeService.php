<?php
namespace App\Services;

use App\Models\Salary;
use App\Repositories\EmployeeRepositoryInterface;
use Illuminate\Http\Request;

class EmployeeService
{

    protected $repo;

    public function __construct(EmployeeRepositoryInterface $repo)
    {
        $this->repo = $repo;
    }

    public function list(Request $request)
    {
        return $this->repo->list($request);
    }

    public function get($id)
    {
        $this->repo->get($id);
    }

    public function store(array $data)
    {
        return $this->repo->store($data);
    }

    public function update(array $data, $id)
    {
        return $this->repo->update($data, $id);
    }

    public function destroy($id)
    {
        return $this->repo->destroy($id);
    }

    public function salarysync(array $request)
    {   
        return Salary::create($request);
    }
}
