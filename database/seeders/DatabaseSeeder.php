<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Laravel\Jetstream\Features;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'name' => 'BK',
            'email' => 'sistemas@bksoftperu.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'description' => "Ingenieros S.R.L.",
            'profile_photo_path' => "https://bkportafolio.test/images/LOGO.jpg",
            'facebook_url' => "#",
            'twitter_url' => "#",
            'dribbble_url' => "#",
            'linkedin_url' => "#",
            'phone' => "+51 959 670 009",
            'address' => "Urb. Quinta Tristan C. Los Pinos Z1-3",
            'birthdate' => "1987-09-24",
            'bio' => 'Somos desarrolladores de Software desde hace mas de 25 años. Nos encanta la tecnología y todo el mundo que la rodea. Además de nuestra vocación como desarrolladores, también nos encanta la creación de Aplicaciones Móviles.'
        ]);
    
        $this->call([
            BlogSeeder::class,
            ClientSeeder::class,
            EducationSeeder::class,
            ExperienceSeeder::class,
            JobSeeder::class,
            KnowledgeSeeder::class,
            ServiceSeeder::class,
            WorkingSeeder::class,

            
        ]);
    }
}
