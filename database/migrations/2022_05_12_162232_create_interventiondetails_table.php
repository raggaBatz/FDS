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
        Schema::create('interventiondetails', function (Blueprint $table) {
            $table->id();
            $table->foreignId('intervention_id')->nullable()->constrained('interventions')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('volunteer_id')->nullable()->constrained('volunteers')->onUpdate('cascade')->onDelete('cascade');
            $table->string('description');
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
        Schema::dropIfExists('interventiondetails');
    }
};
