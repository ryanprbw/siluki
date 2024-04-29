<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indikator_kinerjas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kinerja_utama_id')->nullable();
            $table->string('indikator_kinerja');
            $table->text('target')->nullable();
            $table->text('realisasi')->nullable(); // Tambahkan kolom realisasi
            $table->timestamps();

            $table->foreign('kinerja_utama_id')->references('id')->on('kinerja_utamas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('indikator_kinerjas');
    }
};