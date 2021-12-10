<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Inertia\Inertia;

class ContactController extends Controller
{
    public function index()
    {
        $page = Page::where('slug', 'contacts')->first();
        $settings = Setting::all()->keyBy('key');
        return Inertia::render('Contacts/Index', [
            'page' => $page,
            'settings' => $settings,
        ]);
    }

    public function store(Request $request)
    {
        sleep(2);
        $data = $request->validate([
            'name' => 'required',
            'phone_number' => 'required',
            'message' => 'required',
        ]);
        // send message
        Log::info($data);

        return redirect()->route('contacts.index')->with('success', 'Message has been successfully sent!');
    }
}
