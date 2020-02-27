<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('manage-users', function ($user) {
            return $user->roles == 'ADMIN';
        });

        Gate::define('edit-reports', function ($user) {
            return $user->roles == 'ADMIN';
        });

        Gate::define('edit-reports', function ($user) {
            return $user->roles == 'PETUGAS';
        });

        Gate::define('update-reports-admin', function ($user) {
            return $user->roles == 'ADMIN';
        });

        Gate::define('update-reports', function ($user) {
            return $user->roles == 'PETUGAS';
        });

        Gate::define('delete-reports', function ($user) {
            return $user->roles == 'ADMIN';
        });

        Gate::define('delete-reports', function ($user) {
            return $user->roles == 'PETUGAS';
        });
    }
}
