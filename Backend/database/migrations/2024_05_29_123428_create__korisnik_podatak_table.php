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
        Schema::create('_korisnik_podatak', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('Odgovor');
            $table->integer('Redoslijed');

            $table->foreignId('IdPrijave');
            $table->foreign('IdPrijave')->references('id')->on('_listaPrijava');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_korisnik_podatak');
    }
};
