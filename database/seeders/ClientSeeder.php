<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;
class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Client::create([
            'logo_url' => 'https://bkportafolio.test/images/slider/brand2.png',
            'name'=>'Diana',
        ]);
        Client::create([
            'logo_url' => 'https://bkportafolio.test/images/slider/brand3.png',
            'name'=>'Penny',
        ]);
        Client::create([
            'logo_url' => 'https://bkportafolio.test/images/slider/brand1.png',
            'name'=>'Sophy',
        ]);
    }
}
