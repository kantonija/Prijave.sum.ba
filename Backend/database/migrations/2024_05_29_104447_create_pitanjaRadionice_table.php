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
        Schema::create('pitanjaRadionice', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('NazivPitanja');
            $table->string('OpcijePitanja');
            $table->string('VrstaPodataka');

            $table->foreignId('radionice');
            $table->foreign('radionice')->references('id')->on('radionica');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pitanjaRadionice');
    }
};
