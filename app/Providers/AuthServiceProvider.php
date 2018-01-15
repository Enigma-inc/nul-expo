<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Laravel\Passport\Passport;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Query' => 'App\Policies\ViewMessagesPolicy',
        'App\Submission' => 'App\Policies\ViewAbstractsPolicy'
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        
        Gate::define('admin',function ($user){
          $isAdmin=false;
           $user->is_admin?$isAdmin=true: $isAdmin=false;
           return isAdmin;
        });

        Gate::before(function ($user){
            if($user->is_admin) return true;
        });

        Passport::routes();
    }
}
