<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->enum('category', ['Video', 'Web Design','Logo', 'Graphic Design']);
            $table->string('title');
            $table->string('subcategory')->nullable();
            $table->string('logo_url')->nullable();
            $table->string('color_hex');
            $table->string('project_name');
            $table->string('languages');
            $table->string('client');
            $table->string('preview');
            $table->text('body');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
};
