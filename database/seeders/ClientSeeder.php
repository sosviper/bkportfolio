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
            'name'=>'Kay Pacha Lodge',
        ]);
        Client::create([
            'logo_url' => 'https://bkportafolio.test/images/slider/brand3.png',
            'name'=>'Agroinca PPX',
        ]);
        Client::create([
            'logo_url' => 'https://bkportafolio.test/images/slider/brand1.png',
            'name'=>'Fernando Vargas',
        ]);
        Client::create([
            'logo_url' => 'https://bkportafolio.test/images/slider/brand4.png',
            'name'=>'Tradición Colca',
        ]);
    }
}
