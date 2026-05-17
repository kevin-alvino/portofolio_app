<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categories;
use App\Models\karya;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Alvino',
            'email' => 'kevinalvino167.com',
            'password' => hash make('password', 'admin123');
        ]);

        $web = Categories::create([
            'name_category' => 'Web Development',
        ]);

        $mobile = Categories::create([
            'name_category' => 'Mobile Development',
        ]);

        karya::create([
            'title' => 'Portofolio Website',
            'description' => 'A personal portfolio website built using laravel, showcasing my project',
            'image' => 'portofolio website.jpg',
        ]);

        $web = karya::create([
            'name_karya' => 'Web',
        ]);

        $mobile = karya::create([
            'name_karya' => 'Mobile',
        ]);


    }
}
