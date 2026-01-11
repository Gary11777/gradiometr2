<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;

class SitemapController extends Controller
{
    /**
     * Generate the sitemap.
     */
    public function index(): Response
    {
        $routes = [
            ['name' => 'home', 'priority' => '1.0', 'changefreq' => 'weekly'],
            ['name' => 'advantages', 'priority' => '0.8', 'changefreq' => 'monthly'],
            ['name' => 'specifications', 'priority' => '0.8', 'changefreq' => 'monthly'],
            ['name' => 'comparing', 'priority' => '0.7', 'changefreq' => 'monthly'],
            ['name' => 'photos', 'priority' => '0.7', 'changefreq' => 'weekly'],
            ['name' => 'buy', 'priority' => '0.9', 'changefreq' => 'weekly'],
            ['name' => 'about', 'priority' => '0.6', 'changefreq' => 'monthly'],
        ];

        $pages = [];

        foreach ($routes as $route) {
            if (Route::has($route['name'])) {
                $pages[] = [
                    'url' => route($route['name']),
                    'lastmod' => now()->toAtomString(),
                    'priority' => $route['priority'],
                    'changefreq' => $route['changefreq'],
                ];
            }
        }

        return response()->view('sitemap', compact('pages'))
            ->header('Content-Type', 'text/xml');
    }
}
