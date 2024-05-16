<?php

namespace Database\Seeders;

use App\Models\Knowledge;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KnowledgeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Knowledge::create([
            'title' =>'Php',
            
        ]);
        Knowledge::create([
            'title' =>'Marketing',
            
        ]);
        Knowledge::create([
            'title' =>'Laravel',
            
        ]);
        Knowledge::create([
            'title' =>'Mysql',
            
        ]);
        Knowledge::create([
            'title' =>'MongoDB',
            
        ]);
    }
}
