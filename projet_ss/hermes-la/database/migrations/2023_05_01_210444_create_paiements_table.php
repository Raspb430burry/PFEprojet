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
        Schema::create('paiements', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('commande_id')->unsigned()->index();
            $table->foreign('commande_id')->references('id')->on('commandes')->onDelete('cascade');
            $table->bigInteger('produits_id')->unsigned()->index();
            $table->foreign('produits_id')->references('id')->on('produits')->onDelete('cascade');
            $table->string('moyen_de_paiement');
            $table->decimal('montant', 8, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paiements');
    }
};
