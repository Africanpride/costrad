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
        Schema::create('profiles', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('title')->nullable();
            $table->string('gender')->nullable();
            $table->date('dateOfBirth')->nullable();
            $table->string('address_1')->nullable();
            $table->string('address_2')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('country')->nullable();
            $table->string('telephone')->nullable();
            $table->string('emergencyContactName')->nullable();
            $table->string('emergencyContactTelephone')->nullable();
            $table->string('nationality')->nullable();
            $table->boolean('active')->nullable();
            $table->longText('bio')->nullable();
            $table->longText('resume')->nullable();
            $table->foreignUuid('user_id')->constrained()->onDelete('cascade');
            $table->boolean('disabled')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('avatar')->nullable();
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
        Schema::dropIfExists('profiles');
    }
};
