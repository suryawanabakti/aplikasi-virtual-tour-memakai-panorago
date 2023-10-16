<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\WebsiteProfile;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Role::create(['name' => 'Super Admin']);
        Role::create(['name' => 'Admin']);
        $user1 = User::create([
            'name' => 'Akmal',
            'email' => 'akmal@super',
            'password' => bcrypt('qwerty123')
        ]);
        $user1->assignRole('Super Admin');

        $user2 = User::create([
            'name' => 'Alpha',
            'email' => 'alpha@admin',
            'password' => bcrypt('qwerty123')
        ]);
        $user2->assignRole('Admin');

        WebsiteProfile::create([
            'title' => 'Virtual Tour',
            'about' => 'Aplikasi untuk memulai petualangan secarang online 😲',
            'deskripsi' => 'Virtual Tour di buat kepada masyarakat untuk menulusuri wisata secara online 😁',
            'no_telepon' => '082189719077',
            'email' => 'akmal@gmail.com'
        ]);
    }
}
