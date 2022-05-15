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
        Schema::create('volunteers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('generation_id')->nullable();
            $table->unsignedBigInteger('constellation_id')->nullable();
            $table->unsignedBigInteger('group_id')->nullable();
            $table->string('pseudonym');
            $table->string('pseudonym_plain');
            $table->string('names');
            $table->string('last_names');
            $table->integer('phone');
            $table->date('birthday');
            $table->string('email');
            $table->string('contact_name');
            $table->integer('contact_phone');
            $table->char('status');
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
        Schema::dropIfExists('volunteers');
    }
};
