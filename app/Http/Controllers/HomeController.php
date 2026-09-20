<?php

namespace App\Http\Controllers;

use App\Models\Information;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    /**
     * Handle the incoming request with caching to eliminate DB latency on homepage visits.
     */
    public function __invoke(Request $request)
    {
        $portfolios = Cache::remember('home_portfolios', 86400, function () {
            return Portfolio::latest()->get();
        });

        $informations = Cache::remember('home_informations', 86400, function () {
            return Information::latest()->get();
        });

        return view('index', [
            'informations' => $informations,
            'portfolios'   => $portfolios,
        ]);
    }
}
