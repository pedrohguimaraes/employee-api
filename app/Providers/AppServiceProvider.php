<?php

namespace App\Providers;

use App\Models\Employee;
use App\Repositories\EmployeeRepository;
use App\Repositories\EmployeeRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(EmployeeRepositoryInterface::class, EmployeeRepository::class);
        
        $this->app->bind(EmployeeRepositoryInterface::class, function(){
            
            return new EmployeeRepository(new Employee());
        
        });
    }
}
