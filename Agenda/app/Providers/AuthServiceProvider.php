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
        'App\Models\Contacto' => 'App\Policies\ContactoPolicy'
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // Gate::define('update-contacto',function($user, $contacto){
        //     return $user->id == $contacto->user_id;
        // });

        // Gate::define('delete-contacto',function($user, $contacto){
        //     return $user->id == $contacto->user_id;
        // });

        // Gate::define('contactos.update','App\Policies\ContactoPolicy@update');
        // Gate::define('contactos.delete','App\Policies\ContactoPolicy@delete');

        Gate::resource('contactos','App\Policies\ContactoPolicy');

        // Gate::before(function($user,$ability){
        //     if($user->user_role == 'super_admin' && in_array($ability,['contactos.update','contactos.delete'])){
        //         return true;
        //     }
        // });

        // Gate::resource('contactos', 'App\Policies\ContactosPolicy');
    }
}
