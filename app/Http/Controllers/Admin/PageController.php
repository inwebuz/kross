<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Inertia\Inertia;

class PageController extends Controller
{
    public function dashboard()
    {
        $pages = Page::latest()->paginate(20);
        return Inertia::render('Admin/Pages/Dashboard', [
            'pages' => $pages,
        ]);
    }

    public function index()
    {
        $pages = Page::latest()->paginate(20);
        return Inertia::render('Admin/Pages/Index', [
            'pages' => $pages,
        ]);
    }

    public function create(Request $request)
    {
        return Inertia::render('Admin/Pages/Create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required|max:50000',
            'seo_title' => 'max:500',
            'meta_description' => 'max:5000',
            'meta_keywords' => 'max:5000',
        ]);

        $page = Page::create([
            'name' => $data['name'],
            'slug' => Str::slug($data['name']),
            'description' => $data['description'],
            'seo_title' => $data['seo_title'],
            'meta_description' => $data['meta_description'],
            'meta_keywords' => $data['meta_keywords'],
            'status' => 1,
        ]);

        return redirect()->route('admin.pages.index')->with('success', 'Page has been saved');
    }

    public function edit(Request $request, Page $page)
    {
        return Inertia::render('Admin/Pages/Edit', compact('page'));
    }

    public function update(Request $request, Page $page)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required|max:50000',
            'seo_title' => 'max:500',
            'meta_description' => 'max:5000',
            'meta_keywords' => 'max:5000',
        ]);

        $updateData = [
            'name' => $data['name'],
            'slug' => Str::slug($data['name']),
            'description' => $data['description'],
            'seo_title' => $data['seo_title'],
            'meta_description' => $data['meta_description'],
            'meta_keywords' => $data['meta_keywords'],
            'status' => 1,
        ];
        $page->update($updateData);

        return redirect()->route('admin.pages.index')->with('success', 'Page has been saved');
    }

    public function destroy(Request $request, Page $page)
    {
        $page->delete();
        return redirect()->route('admin.pages.index')->with('success', 'Page has been deleted');
    }
}
