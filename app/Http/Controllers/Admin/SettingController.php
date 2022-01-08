<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Inertia\Inertia;

class SettingController extends Controller
{
    public function index()
    {
        $settings = Setting::latest()->paginate(20);
        return Inertia::render('Admin/Settings/Index', [
            'settings' => $settings,
        ]);
    }

    public function create(Request $request)
    {
        return Inertia::render('Admin/Settings/Create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            // 'key' => 'required|max:255',
            'value' => 'required|max:255',
        ]);

        $setting = Setting::create([
            // 'key' => $data['key'],
            'value' => $data['value'],
            'status' => 1,
        ]);

        return redirect()->route('admin.settings.index')->with('success', 'Setting has been saved');
    }

    public function edit(Request $request, Setting $setting)
    {
        return Inertia::render('Admin/Settings/Edit', compact('setting'));
    }

    public function update(Request $request, Setting $setting)
    {
        $data = $request->validate([
            // 'key' => 'required|max:255',
            'value' => 'required|max:255',
        ]);

        $updateData = [
            // 'key' => $data['key'],
            'value' => $data['value'],
            'status' => 1,
        ];
        $setting->update($updateData);

        return redirect()->route('admin.settings.index')->with('success', 'Setting has been saved');
    }

    public function destroy(Request $request, Setting $setting)
    {
        $setting->delete();
        return redirect()->route('admin.settings.index')->with('success', 'Setting has been deleted');
    }
}
