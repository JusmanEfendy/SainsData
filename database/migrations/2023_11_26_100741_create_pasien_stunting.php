<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pasien_stunting', function (Blueprint $table) {
            $table->increments('id');
            $table->char('nama', 30);
            $table->enum('Kelamin', ['P', 'L']);
            $table->date('tanggal_lahir');
            $table->char('nama_ortu', 30);
            $table->char('posyandu', 50);
            $table->char('asal_desa', 50);
            $table->string('usia_ukur', 30);
            $table->timestamps();
            $table->date('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasien_stunting');
    }
};
