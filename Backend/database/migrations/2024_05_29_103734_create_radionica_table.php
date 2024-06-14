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
        Schema::create('radionica', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('NazivRadionice');
            $table->string('OpisRadionice');
            $table->string('UrlSlike');
            $table->string('VoditeljRadionice');
            $table->string('Tagovi');
            $table->timestamp('DatumPocetka');
            $table->timestamp('DatumZavrsetka');
            $table->timestamp('PrijaveDo');

            $table->foreignId('IdKreatora');
            $table->foreign('IdKreatora')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('radionica');
    }
};
