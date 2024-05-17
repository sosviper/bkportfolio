<?php

namespace Database\Seeders;

use App\Models\Job;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Job::create([
            'category' =>'Apps',
            'title' =>'Fernando Vargas',
            'subcategory' =>'Apps',
            'logo_url' =>'https://bkportafolio.test/images/work_images/small/1.jpg',
            'color_hex' =>'#fcf4ff',
            'project_name' =>'Facturación Electrónica',
            'languages' =>'Spanish, English',
            'client' =>'Fernando Vargas',
            'preview' =>'https://fernandovargas.appinvoice2peru.com',
            'body' =>'Sistema de gestión en facturación Electrónica - Módulo Colegio. Crea facturas electrónicas de todo tipo, y salta entre base de datos de tus empresas sin necesidad de desloguearte y volver a loguearte. Módulos base para la organización comercial de cualquier negocio o empresa. Punto de venta integrado con múltiples funciones, impresión directa ticktes, Scanner código de barras, compatible con balanzas electrónicas y muchas funciones mas para el vendedor. Reportes diarios de caja chica, ventas por vendedor, por tipo de pago y otro gran número de reportes.',
        ]);
        Job::create([
            'category' =>'Mobile',
            'title' =>'Agroinca PPX',
            'subcategory' =>'Mobile',
            'logo_url' =>'https://bkportafolio.test/images/work_images/small/2.jpg',
            'color_hex' =>'#fcf4ff',
            'project_name' =>'App para Asistencia de Personal',
            'languages' =>'Spanish, English',
            'client' =>'Agroinca PPX',
            'preview' =>'https://agroinca.com',
            'body' =>'Aplicación que registra y gestiona el control de Asistencia del Personal. Registra a través de Codigo QR o Codigo de Barras usando el DNI del colaborador. Registro de entrada y salida de personal de las jornadas de trabajo, esta APP es un checador para empleados y controla la asistencia online o presencial. También aumenta la productividad laboral ya que ayuda a disminuir la ausencia laboral y mejora la puntualidad laboral.',
        ]);
        Job::create([
            'category' =>'Mobile',
            'title' =>'Agroinca PPX',
            'subcategory' =>'Mobile',
            'logo_url' =>'https://bkportafolio.test/images/work_images/small/3.jpg',
            'color_hex' =>'#fcf4ff',
            'project_name' =>'App para Gestión de Cosecha y Control del Tareo del Personal',
            'languages' =>'Spanish, English',
            'client' =>'Agroinca PPX',
            'preview' =>'https://agroinca.com',
            'body' =>'Aplicación que registra y gestiona el control de Cosecha por Cultivo y Por Fundo. Registra a través de Codigo QR o Codigo de Barras usando el DNI del colaborador. Está enlazado a la plicación de asistencia y sólo se puede realizar el tareo del personal cuando ha realizado su marcación de asistencia. La Aplicación de cosecha permite establecer un control de los kilos cosechados y los pesos por bines. Esto permite obtener mejores rendimientos y tener la data en tiempo real, para poder calcular bonos de cosecha, tambien está ligado al tareo porque desde ahi se registra su tareo.',
        ]);
        Job::create([
            'category' =>'Web Design',
            'title' =>'Tradición Colca',
            'subcategory' =>'Mobile',
            'logo_url' =>'https://bkportafolio.test/images/work_images/small/4.jpg',
            'color_hex' =>'#fcf4ff',
            'project_name' =>'Diseño Web para la empresa Tradición Colca',
            'languages' =>'Spanish, English',
            'client' =>'Tradición Colca',
            'preview' =>'https://tradicioncolca.com',
            'body' =>'Diseño del Sitio Web para la empresa Tradición Colca, que permite tener un enlace para que puedan realizar reservas de forma segura.',
        ]);
        Job::create([
            'category' =>'Web Design',
            'title' =>'Kay pacha Lodge',
            'subcategory' =>'Web Design',
            'logo_url' =>'https://bkportafolio.test/images/work_images/small/5.jpg',
            'color_hex' =>'#fcf4ff',
            'project_name' =>'Diseño Web para KayPacha Lodge',
            'languages' =>'Spanish, English',
            'client' =>'KayPacha Lodge',
            'preview' =>'https://kaypachalodge.com',
            'body' =>'Diseño del Sitio Web para KayPacha Lodge, se puede realizar reservas a través de Mercado Pago. Ver disponibilidad, panel Administrativo de reservas. Registro de usuarios. Dos Idiomas. ',
        ]);
    }
}
