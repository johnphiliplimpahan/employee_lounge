<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\User;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        view()->composer(['layouts.dashboard','pages.profile'],function($view){
            $user = User::find(auth()->user()->id);

            $data = [
                'personal' => $user->personal_information,
                'contact' => $user->contact_information,
                'work' => $user->work_information,
                'location' => $user->location_information,
                'profile' => $user->profile_image
            ];

            $view->with($data);
            
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
