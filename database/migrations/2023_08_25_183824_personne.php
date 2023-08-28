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
        Schema::create('personnes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('numero');
            $table->string('nom');
            $table->string('postnom');
            $table->string('prenom');
            $table->integer('numero-nationale');
            $table->string('date-impression');
            $table->integer('numero-serie');
            $table->string('etat');
            $table->text('observation');
            $table->string('demandeur');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
