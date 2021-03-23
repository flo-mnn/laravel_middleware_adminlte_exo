<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

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
        Gate::define('article-delete',function($user,$article)
        {
            return $user->id == $article->user_id;
        });
        Gate::define('user-delete',function($user,$item)
        {
            if ($user->id == $item->id || $item->role_id == 1) {
                return false;
            } else {
                return true;
            }
            
        });
        Gate::define('user-edit',function($user,$item){
            return $item->roles->id != 1;
        });
    }
}
