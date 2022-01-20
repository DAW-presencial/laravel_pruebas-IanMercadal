<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
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

        // Gate::define('contactos.update', 'App\Policies\ContactoPolicy@update');
        // Gate::define('contactos.delete', 'App\Policies\ContactoPolicy@delete');

        Gate::resource('contactos', 'App\Policies\ContactoPolicy');

        // Gate::before(function($user, $permisos){
        //     if($user->is_admin && in_array($permisos, ['contactos.update'])) {
        //         return true;
        //     }
        // });

        // Gate::define('update-contacto',function($user, $contacto){
        //     return $user->id == $contacto->user_id;
        // });

        // Gate::define('destroy-contacto',function($user, $contacto){
        //     return $user->id == $contacto->user_id;
        // });
    }
}
