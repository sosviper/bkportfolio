<?php

namespace Database\Seeders;

use App\Models\Experience;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Experience::create([
            'title' =>'Computer Science',
            'description' =>'Imperialize Technical Institute',
            'dates' =>'2017-2021',
            'color_hex' =>'#fcf4ff',
        ]);
        Experience::create([
            'title' =>'Cr. Web Developer',
            'description' =>'ib-themes ltd.',
            'dates' =>'2015-2017',
            'color_hex' =>'#fcf4ff',
        ]);
        Experience::create([
            'title' =>'Best Writter',
            'description' =>'Online Typodev Soluation Ltd.',
            'dates' =>'2008',
            'color_hex' =>'#fcf4ff',
        ]);
    }
}
