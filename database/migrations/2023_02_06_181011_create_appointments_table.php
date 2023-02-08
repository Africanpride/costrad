<?php

use App\Models\User;
use App\Models\Patient;
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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->date('appointment_date');
            $table->time('appointment_time');
            $table->text('appointment_reason');
            $table->boolean('active')->default(false)->nullable();
            $table->boolean('priority')->default(false)->nullable();
            $table->foreignIdFor(User::class, 'user_id');
            $table->foreignIdFor(Patient::class, 'patient_id');
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
        Schema::dropIfExists('appointments');
    }
};
