<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Song;
use Illuminate\Http\Request;
use Inertia\Inertia;

class SongController extends Controller
{
    public function index(Request $request)
    {
        $page = Page::where('slug', 'songs')->first();
        $songs = Song::active()->latest()->take(50)->get();
        return Inertia::render('Songs/Index', [
            'page' => $page,
            'songs' => $songs,
        ]);
    }
}
