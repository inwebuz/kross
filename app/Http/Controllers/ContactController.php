<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Setting;
use App\Services\TelegramService;
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
        $data = $request->validate([
            'name' => 'required|max:255',
            'phone_number' => 'required|max:255',
            'message' => 'required|max:5000',
        ]);

        // send telegram
        $telegram_chat_id = config('services.telegram.chat_id');
        $telegramService = new TelegramService();
        $message = view('telegram.admin.contact', compact('data'))->render();
        $telegramService->sendMessage($telegram_chat_id, $message, 'HTML');

        return redirect()->route('contacts.index')->with('success', 'Message has been successfully sent!');
    }
}
