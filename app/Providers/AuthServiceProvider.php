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

        Gate::define('edit-users',function($user){
            return $user->hasRole('admin');
        });
        Gate::define('manage-users',function($user){
            return $user->hasRole('admin');
        });
        Gate::define('see-events',function($user){
            return $user->hasAnyRoles(['admin','direktors','DNV','audzinataja']);
        });
        Gate::define('delete-users',function($user){
            return $user->hasRole('admin');
        });
        Gate::define('edit-pasakumi',function($user){
            return $user->hasRole('admin');
//            return $user->hasPasakums($pasakumaID);
        });

        Gate::define('direktors',function($user){
            return $user->hasAnyRoles(['admin','direktors']);
        });
        Gate::define('DNV',function($user){
            return $user->hasAnyRoles(['admin','DNV']);
        });
        Gate::define('audzinataja',function($user){
            return $user->hasAnyRoles(['admin','audzinataja']);
        });
    }
}
