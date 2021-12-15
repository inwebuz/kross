<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Setting;
use App\Models\Song;
use Illuminate\Http\Request;
use Inertia\Inertia;

class SongController extends Controller
{
    public function index()
    {
        $songs = Song::paginate(20);
        return Inertia::render('Admin/Songs/Index', [
            'songs' => $songs,
        ]);
    }

    public function create(Request $request)
    {
        return Inertia::render('Admin/Songs/Create');
    }

    public function store(Request $request)
    {
        $page = Page::where('slug', 'services')->first();
        return Inertia::render('Admin/Songs/Index', [
            'page' => $page,
        ]);
    }

    public function destroy(Request $request)
    {
        $page = Page::where('slug', 'services')->first();
        return Inertia::render('Admin/Songs/Index', [
            'page' => $page,
        ]);
    }
}
