<?php

namespace App\Providers;

use App\Core\CustomResourceRegistrar;
use App\Models\Business;
use App\Models\BusinessCategory;
use App\Models\BusinessInfo;
use App\Models\Category;
use App\Models\City;
use App\Models\ForBusiness;
use App\Models\MaingPage;
use App\Models\MainPage;
use App\Models\Page;
use App\Models\RecommendedLink;
use App\Models\ServiceCategory;
use App\Models\Setting;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application service.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->isLocal()) {
            $this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
        }
    }

    /**
     * Bootstrap any application service.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        $registrar = new CustomResourceRegistrar($this->app['router']);

        $this->app->bind('Illuminate\Routing\ResourceRegistrar', function () use ($registrar) {
            return $registrar;
        });

        $settings = [];

       foreach (Setting::all() as $item) {
            $settings[$item->name] = $item->value;
        }
        $sections = [];
        foreach (ForBusiness::all() as $item) {
            $sections[$item->name] = $item->value;
        }
        $main_pages=[];
        foreach (MaingPage::all() as $item) {
            $main_pages[$item->name] = $item->value;
        }

        \Config::set('sections', $sections);
        \Config::set('settings', $settings);
        \Config::set('main_pages', $main_pages);
        $globalData = [
            'use_pages' => Page::whereIn('slug', ['gizlilik-kosullari', 'sartlar-ve-kosullar'])->get(),
            'pages'=>Page::whereNotIn('slug', ['gizlilik-kosullari', 'sartlar-ve-kosullar'])->where('status', 1)->take('5')->get(),
            'infos'=>BusinessInfo::where('status', 0)->get(),
        ];

        \View::share('globalData', $globalData);
        $cities=City::orderBy('name')->get();
        View::share('cities', $cities);
        $businesses=Business::all();
        View::share('businesses', $businesses);
        $services=ServiceCategory::where('order_number', '<>', null)->orderBy('order_number', 'asc')->get();

        View::share('services', $services);
        $categories=BusinessCategory::all();
        View::share('categories', $categories);
        $recommendedLinks = RecommendedLink::select('title', 'url')->get();
        View::share('recommendedLinks', $recommendedLinks);
        Paginator::useBootstrapFour();
    }
}
