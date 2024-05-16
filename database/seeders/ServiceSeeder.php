<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;
class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Service::create([
            'title' =>'Diseño UI/UX',
            'description' =>'Diseño interfaces web preparadas para conseguir, un atractivo y una funcionalidad exquisita con las nuevas tecnologías.',
            'logo_url' =>'https://portafolio.test/images/icons/icon.svg',
            'color_hex' =>'#fcf4ff'
        ]);
        Service::create([
            'title' =>'Desarrollo de Apps',
            'description' =>'Realizo aplicaciones nativas tanto web, como móviles. Si no tienes aplicación hoy en día no eres nadie.',
            'logo_url' =>'https://portafolio.test/images/icons/icon1.svg',
            'color_hex' =>'#fefaf0'
        ]);
        Service::create([
            'title' =>'Fotografía',
            'description' =>'Gracias a mi canal he descubierto el mundo, de la fotografía. Me encanta la edición fotográfica.',
            'logo_url' =>'https://portafolio.test/images/icons/icon2.svg',
            'color_hex' =>'#fcf4ff'
        ]);
        Service::create([
            'title' =>'Edición de video',
            'description' =>'Al igual que con la fotografía, he descubierto este mundo totalmente nuevo para mi. Ha sido una sorpresa todo lo que se puede realizar.',
            'logo_url' =>'https://portafolio.test/images/icons/icon3.svg',
            'color_hex' =>'#fff4f4'
        ]);
        Service::create([
            'title' =>'Consultoría',
            'description' =>'Con mas de 15 años en el mundo profesional tecnológico, ayudo a empresas a crecer tecnológicamente.',
            'logo_url' =>'https://portafolio.test/images/icons/icon4.svg',
            'color_hex' =>'#fff0f8'
        ]);
        Service::create([
            'title' =>'Desarrollo Web',
            'description' =>'Si hoy en día no tienes presencia en internet, no te encontraran. Ponte en contacto conmigo para crear tu presencia online.',
            'logo_url' =>'https://portafolio.test/images/icons/icon5.svg',
            'color_hex' =>'#f3faff'
        ]);
        
    }
}
