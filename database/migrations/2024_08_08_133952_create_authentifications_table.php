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
        Schema::create('authentifications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Matricule_P');
            $table->foreign('Matricule_P')->references('id')->on('personnels')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->string('mot_de_passe');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('authentifications');
    }
};
