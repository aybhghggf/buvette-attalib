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
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->string('nom_complet');
            $table->string('telephone');
            $table->string('localisation');
            $table->text('informations_supplementaires')->nullable();
            $table->decimal('total_prix', 10, 2);
            $table->enum('statut', ['en_attente', 'confirmee', 'en_preparation', 'livree', 'annulee'])->default('en_attente');
            $table->json('items'); // Store cart items as JSON
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commandes');
    }
};
