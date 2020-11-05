<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // Gate::define('update-conversation', function (User $user, $conversation) {
        //     return $user->isAdmin
        //                 ? true
        //                 : false;
        // });

        Gate::before(function ($user, $permission) {

            // dd($user->permissions()->contains($permission));
            return $user->permissions()->contains($permission);
        });
    }
}
