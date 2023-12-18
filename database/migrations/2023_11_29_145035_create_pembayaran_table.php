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
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id('id_pembayaran');
            $table->bigInteger('id_laundry')->unsigned()->index()->nullable();
            $table->bigInteger('id_datadiri')->unsigned()->index()->nullable();
            $table->foreign('id_laundry')->references('id_laundry')->on('laundry');
            $table->foreign('id_datadiri')->references('id_datadiri')->on('datadiri');
            $table->integer('nominal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayaran');
    }
};
