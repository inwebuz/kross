<?php

namespace Database\Seeders;

use App\Models\Page;
use App\Models\Setting;
use App\Models\Song;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Page::factory()->create([
            'name' => 'Home',
            'slug' => 'home',
        ]);
        Page::factory()->create([
            'name' => 'About',
            'slug' => 'about',
        ]);
        Page::factory()->create([
            'name' => 'Services',
            'slug' => 'services',
        ]);
        Page::factory()->create([
            'name' => 'Projects',
            'slug' => 'projects',
        ]);
        Page::factory()->create([
            'name' => 'Songs',
            'slug' => 'songs',
        ]);
        Page::factory()->create([
            'name' => 'Contacts',
            'slug' => 'contacts',
        ]);

        for ($i = 1; $i < 5; $i++) {
            Song::factory()->create([
                'name' => '0' . $i,
                'status' => $i,
                'image' => 'songs/0' . $i . '.png',
                'file' => 'songs/0' . $i . '.mp3',
                'file_name' => '0' . $i . '.mp3',
            ]);
        }

        Setting::factory()->create([
            'key' => 'phone',
            'value' => '+998 00 000-00-00',
        ]);
        Setting::factory()->create([
            'key' => 'email',
            'value' => 'info@kross.uz',
        ]);
        Setting::factory()->create([
            'key' => 'telegram',
            'value' => '#',
        ]);
        Setting::factory()->create([
            'key' => 'facebook',
            'value' => '#',
        ]);
        Setting::factory()->create([
            'key' => 'instagram',
            'value' => '#',
        ]);
        Setting::factory()->create([
            'key' => 'youtube',
            'value' => '#',
        ]);

    }
}
