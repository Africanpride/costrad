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
        Schema::create('institutes', function (Blueprint $table) {
            Schema::create('institutes', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('acronym');
                $table->text('overview');
                $table->text('about');
                $table->string('icon');
                $table->string('logo');
                $table->string('banner');
                $table->date('startDate');
                $table->date('endDate');
                $table->string('seo');
                $table->boolean('active')->default(false);
                $table->string('url');
                $table->float('price');
                $table->timestamps();
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('institutes');
    }
};
