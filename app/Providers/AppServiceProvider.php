<?php

namespace App\Providers;

use App\Models\CompanyInfo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        if (Schema::hasTable('company_infos')) {
            $companydata = CompanyInfo::first();
            View::share('company_info_share', $companydata);
        } else {
            View::share('company_info_share', null);
        }
    }
}
