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
        Schema::create('jen', function (Blueprint $table) {
            $table->char('kode_tjen', 1)->primary();
            $table->char('nama_tjen', 10);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('jen');
    }
};