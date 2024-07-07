<?php

namespace App\Services;

use Carbon\Carbon;
use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class SitemapGenerator
{
    public function generate()
    {
        $sitemap = Sitemap::create();

        $routes = Route::getRoutes();

        foreach ($routes as $route) {
            if (in_array('GET', $route->methods()) && $this->routeInWebFile($route)) {
                $uri = $route->uri();
                $sitemap->add(Url::create($uri)
                    ->setLastModificationDate(Carbon::now())
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                    ->setPriority(0.1)
                );
            }
        }

        $sitemap->writeToFile(public_path('sitemap.xml'));
    }

    private function routeInWebFile($route)
    {
        return in_array('web', $route->middleware());
    }
}
