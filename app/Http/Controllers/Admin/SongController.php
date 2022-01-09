<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Setting;
use App\Models\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class SongController extends Controller
{
    public function index()
    {
        $songs = Song::latest()->paginate(20);
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
        // Log::info($request->all());
        $data = $request->validate([
            'name' => 'required',
            'artist' => 'required',
            'file' => 'required|file|mimetypes:audio/mpeg',
            'image' => 'required|image',
        ]);

        $filePath = $request->file->store('songs', 'public');
        $imagePath = $request->image->store('songs', 'public');
        $song = Song::create([
            'name' => $data['name'],
            'artist' => $data['artist'],
            'status' => 1,
            'file_name' => $request->file->getClientOriginalName(),
            'file' => $filePath,
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.songs.index')->with('success', 'Song has been saved');
    }

    public function edit(Request $request, Song $song)
    {
        return Inertia::render('Admin/Songs/Edit', compact('song'));
    }

    public function update(Request $request, Song $song)
    {
        $data = $request->validate([
            'name' => 'required',
            'artist' => 'required',
            'file' => 'nullable|file|mimetypes:audio/mpeg',
            'image' => 'nullable|image',
        ]);

        $updateData = [
            'name' => $data['name'],
            'artist' => $data['artist'],
            'status' => 1,
        ];
        if ($request->file) {
            Storage::disk('public')->delete($song->file);
            $filePath = $request->file->store('songs', 'public');
            $updateData['file_name'] = $request->file->getClientOriginalName();
            $updateData['file'] = $filePath;
        }
        if ($request->image) {
            Storage::disk('public')->delete($song->image);
            $imagePath = $request->image->store('songs', 'public');
            $updateData['image'] = $imagePath;
        }
        $song->update($updateData);

        return redirect()->route('admin.songs.index')->with('success', 'Song has been saved');
    }

    public function destroy(Request $request, Song $song)
    {
        Storage::disk('public')->delete($song->file);
        Storage::disk('public')->delete($song->image);
        $song->delete();
        return redirect()->route('admin.songs.index')->with('success', 'Song has been deleted');
    }
}
