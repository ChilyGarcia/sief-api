<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('statistical_informations', function (Blueprint $table) {
            $table->id();
            $table->integer('enrolled_students');
            $table->integer('admitted_students');
            $table->integer('graduated_students');
            $table->integer('dropout_students');
            $table->unsignedBigInteger('career_id');

            $table->foreign('career_id')->references('id')->on('careers')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('statistical_informations');
    }
};
