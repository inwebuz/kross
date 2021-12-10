<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Setting;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PageController extends Controller
{
    public function home(Request $request)
    {
        $page = Page::where('slug', 'home')->first();
        return Inertia::render('Pages/Home', [
            'page' => $page,
        ]);
    }

    public function about(Request $request)
    {
        $page = Page::where('slug', 'about')->first();
        return Inertia::render('Pages/Common', [
            'page' => $page,
        ]);
    }

    public function services(Request $request)
    {
        $page = Page::where('slug', 'services')->first();
        return Inertia::render('Pages/Common', [
            'page' => $page,
        ]);
    }
}
