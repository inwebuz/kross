<?php

namespace Database\Seeders;

use App\Models\Page;
use App\Models\Setting;
use App\Models\Song;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

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

        $faker = Factory::create();

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
                'name' => Str::title(implode(' ', $faker->words(3))),
                'artist' => $faker->name,
                'album' => 'Kross',
                'image' => 'songs/0' . $i . '.jpg',
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
            'group' => 'social',
            'sort_number' => 1,
            'svg' => '<svg width="30px" height="30px" viewBox="0 0 24 24" fill="#179CDE" xmlns="http://www.w3.org/2000/svg">
            <path clip-rule="evenodd" d="M24 12C24 18.6274 18.6274 24 12 24C5.37258 24 0 18.6274 0 12C0 5.37258 5.37258 0 12 0C18.6274 0 24 5.37258 24 12ZM12.43 8.85893C11.2629 9.3444 8.93015 10.3492 5.43191 11.8733C4.86385 12.0992 4.56628 12.3202 4.53919 12.5363C4.4934 12.9015 4.95073 13.0453 5.57349 13.2411C5.6582 13.2678 5.74598 13.2954 5.83596 13.3246C6.44866 13.5238 7.27284 13.7568 7.70131 13.766C8.08996 13.7744 8.52375 13.6142 9.00266 13.2853C12.2712 11.079 13.9584 9.96381 14.0643 9.93977C14.1391 9.92281 14.2426 9.90148 14.3128 9.96385C14.3829 10.0262 14.3761 10.1443 14.3686 10.176C14.3233 10.3691 12.5281 12.0381 11.5991 12.9018C11.3095 13.171 11.1041 13.362 11.0621 13.4056C10.968 13.5034 10.8721 13.5958 10.78 13.6846C10.2108 14.2333 9.78393 14.6448 10.8036 15.3168C11.2937 15.6397 11.6858 15.9067 12.077 16.1731C12.5042 16.4641 12.9303 16.7543 13.4816 17.1157C13.6221 17.2078 13.7562 17.3034 13.8869 17.3965C14.3841 17.751 14.8308 18.0694 15.3826 18.0186C15.7033 17.9891 16.0345 17.6876 16.2027 16.7884C16.6002 14.6632 17.3816 10.0585 17.5622 8.16098C17.5781 7.99473 17.5582 7.78197 17.5422 7.68858C17.5262 7.59518 17.4928 7.46211 17.3714 7.3636C17.2276 7.24694 17.0057 7.22234 16.9064 7.22408C16.455 7.23204 15.7626 7.47282 12.43 8.85893Z" />
            </svg>',
        ]);
        Setting::factory()->create([
            'key' => 'facebook',
            'value' => '#',
            'group' => 'social',
            'sort_number' => 2,
            'svg' => '<svg width="30px" height="30px" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                viewBox="0 0 291.319 291.319" style="enable-background:new 0 0 291.319 291.319;" xml:space="preserve">
            <g>
                <path style="fill:#3B5998;" d="M145.659,0c80.45,0,145.66,65.219,145.66,145.66c0,80.45-65.21,145.659-145.66,145.659
                    S0,226.109,0,145.66C0,65.219,65.21,0,145.659,0z"/>
                <path style="fill:#FFFFFF;" d="M163.394,100.277h18.772v-27.73h-22.067v0.1c-26.738,0.947-32.218,15.977-32.701,31.763h-0.055
                    v13.847h-18.207v27.156h18.207v72.793h27.439v-72.793h22.477l4.342-27.156h-26.81v-8.366
                    C154.791,104.556,158.341,100.277,163.394,100.277z"/>
            </g>
            </svg>',
        ]);
        Setting::factory()->create([
            'key' => 'instagram',
            'value' => '#',
            'group' => 'social',
            'sort_number' => 3,
            'svg' => '<svg width="30px" height="30px" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 0 260 260" fill="#e1306c" xml:space="preserve">
            <path d="M164.58,64H95.42C78.1,64,64,78.1,64,95.42v69.16C64,181.9,78.1,196,95.42,196h69.16c17.32,0,31.42-14.1,31.42-31.42V95.42
               C196,78.1,181.9,64,164.58,64z M130,171.1c-22.66,0-41.1-18.44-41.1-41.1s18.44-41.1,41.1-41.1s41.1,18.44,41.1,41.1
               S152.66,171.1,130,171.1z M172.22,97.3c-5.3,0-9.6-4.3-9.6-9.61c0-5.3,4.3-9.6,9.6-9.6c5.31,0,9.61,4.3,9.61,9.6
               C181.83,93,177.53,97.3,172.22,97.3z M130,102.9c-14.94,0-27.1,12.16-27.1,27.1s12.16,27.1,27.1,27.1s27.1-12.16,27.1-27.1
               S144.94,102.9,130,102.9z M130,2C59.31,2,2,59.31,2,130s57.31,128,128,128s128-57.31,128-128S200.69,2,130,2z M210,164.58
               c0,25.04-20.38,45.42-45.42,45.42H95.42C70.38,210,50,189.62,50,164.58V95.42C50,70.38,70.38,50,95.42,50h69.16
               C189.62,50,210,70.38,210,95.42V164.58z"/>
            </svg>',
        ]);
        Setting::factory()->create([
            'key' => 'youtube',
            'value' => '#',
            'group' => 'social',
            'sort_number' => 4,
            'svg' => '<svg width="30px" height="30px" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 0 473.931 473.931" style="enable-background:new 0 0 473.931 473.931;" xml:space="preserve">
            <circle style="fill:#D42428;" cx="236.966" cy="236.966" r="236.966"/>
            <path style="fill:#CC202D;" d="M404.518,69.38c92.541,92.549,92.549,242.593,0,335.142c-92.541,92.541-242.593,92.545-335.142,0
                L404.518,69.38z"/>
            <path style="fill:#BA202E;" d="M469.168,284.426L351.886,167.148l-138.322,15.749l-83.669,129.532l156.342,156.338
                C378.157,449.322,450.422,376.612,469.168,284.426z"/>
            <path style="fill:#FFFFFF;" d="M360.971,191.238c0-19.865-16.093-35.966-35.947-35.966H156.372c-19.85,0-35.94,16.105-35.94,35.966
                v96.444c0,19.865,16.093,35.966,35.94,35.966h168.649c19.858,0,35.947-16.105,35.947-35.966v-96.444H360.971z M216.64,280.146
                v-90.584l68.695,45.294L216.64,280.146z"/>
            </svg>',
        ]);

    }
}
