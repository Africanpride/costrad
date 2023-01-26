<?php

use App\Models\Insurance;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('title')->nullable();
            $table->string('gender')->nullable();
            $table->date('DOB')->nullable();
            $table->string('firstName');
            $table->string('lastName');
            $table->string('email')->unique()->nullable();
            $table->string('address_1')->nullable();
            $table->string('address_2')->nullable();
            $table->string('telephone');
            $table->string('emergencyContactName')->nullable();
            $table->string('emergencyContactTelephone')->nullable();
            $table->string('nationality')->nullable();
            $table->foreignIdFor(Insurance::class, 'insurance_id')->nullable();
            $table->boolean('insured')->nullable();
            $table->boolean('active')->default(false)->nullable();
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
        Schema::dropIfExists('patients');
    }
};
