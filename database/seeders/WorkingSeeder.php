<?php

namespace Database\Seeders;

use App\Models\WorkingSkill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorkingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        WorkingSkill::create([
            'title' => 'Web Design',
            'percentage' => 65
        ]);
        WorkingSkill::create([
            'title' => 'Mobile App',
            'percentage' => 85
        ]);
        WorkingSkill::create([
            'title' => 'Illustrator',
            'percentage' => 75
        ]);
        WorkingSkill::create([
            'title' => 'Photoshop',
            'percentage' => 90
        ]);
    }
}
