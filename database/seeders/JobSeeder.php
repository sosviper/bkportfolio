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
            'category' =>'Video',
            'title' =>'Campaña de Navidad',
            'subcategory' =>'Video',
            'logo_url' =>'https://bkportafolio.test/images/work_images/small/1.jpg',
            'color_hex' =>'#fcf4ff',
            'project_name' =>'Cocacola',
            'languages' =>'Spanish, English',
            'client' =>'Cocacola',
            'preview' =>'https://www.google.com',
            'body' =>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia placeat magnam possimus iusto blanditiis pariatur labore explicabo quo repellat hic dolorum numquam asperiores, voluptatum fugiat reiciendis aspernatur, non, odio aperiam voluptas ex tempora vitae. Dolor, consequatur quidem! Quas magni distinctio dolorum dolore natus, vel numquam accusamus. Nostrum eligendi recusandae qui tempore deserunt!',
        ]);
    }
}
