<?php

namespace App\Providers;

use App\Models\Contacto;
use App\Models\User;
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
        'App\Models\Contacto' => 'App\Policies\ContactosPolicy'
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('update-contacto',function($user, $contacto){
            return $user->id == $contacto->user_id;
        });

        Gate::define('delete-contacto',function($user, $contacto){
            return $user->id == $contacto->user_id;
        });
        // Gate::resource('contactos', 'App\Policies\ContactosPolicy');
    }
}
