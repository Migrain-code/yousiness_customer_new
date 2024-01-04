<?php

namespace App\Providers;

use App\Core\CustomResourceRegistrar;
use App\Models\Business;
use App\Models\BusinessCategory;
use App\Models\BusinessInfo;
use App\Models\Category;
use App\Models\City;
use App\Models\Country;
use App\Models\ForBusiness;
use App\Models\MaingPage;
use App\Models\Page;
use App\Models\RecommendedLink;
use App\Models\ServiceCategory;
use App\Models\ServiceSubCategory;
use App\Models\Setting;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Request;
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
        $request = Request::instance();
        $settings = [];

        foreach (Setting::all() as $item) {
            $settings[$item->name] = $item->value;
        }
        \Config::set('settings', $settings);
        if (!$request->is('api/*')){

            $sections = [];
            foreach (ForBusiness::all() as $item) {
                $sections[$item->name] = $item->value;
            }
            $main_pages=[];
            foreach (MaingPage::all() as $item) {
                $main_pages[$item->name] = $item->value;
            }

            \Config::set('sections', $sections);

            \Config::set('main_pages', $main_pages);
            $globalData = [
                'use_pages' => Page::whereIn('id', [1,2, 3])->get(),
                'pages'=>Page::whereNotIn('id', [1,2, 3])->where('status', 1)->take('5')->get(),
                'infos'=>BusinessInfo::where('status', 0)->get(),
            ];

            \View::share('globalData', $globalData);
            $cities=City::take(10)->get();
            View::share('cities', $cities);
            $services=ServiceCategory::where('order_number', '<>', null)->orderBy('order_number', 'asc')->get();

            View::share('services', $services);
            $categories=BusinessCategory::all();
            View::share('categories', $categories);
            $recommendedLinks = RecommendedLink::select('title', 'url')->get();
            View::share('recommendedLinks', $recommendedLinks);
            $countries = Country::all();
            View::share('countries', $countries);

            $service_sub_categories=ServiceSubCategory::take(50)->get();

            View::share('service_sub_categories', $service_sub_categories);

        }
        Paginator::useBootstrapFour();
    }
}
