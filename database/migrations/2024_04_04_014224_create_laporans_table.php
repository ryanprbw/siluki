
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
  Schema::create('laporans', function (Blueprint $table) {
    $table->id();
    $table->string('image');
    $table->string('sasaran');
    $table->string('indikator');
    $table->string('target');
    $table->string('satuan');
    $table->string('target_t1');
    $table->string('realisasi_t1');
    $table->string('persentasi_t1');
    $table->string('target_t2');
    $table->string('realisasi_t2');
    $table->string('persentasi_t2');
    $table->string('target_t3');
    $table->string('realisasi_t3');
    $table->string('persentasi_t3');
    $table->string('target_t4');
    $table->string('realisasi_t4');
    $table->string('persentasi_t4');
    $table->text('sasaran2');
    $table->text('indikator2');
    $table->text('target2');
    $table->text('satuan2');
    $table->text('realisasi_ctt_t1');
    $table->text('faktor_pendorong_t1');
    $table->text('faktor_penghambat_t1');
    $table->text('realisasi_ctt_t2');
    $table->text('faktor_pendorong_t2');
    $table->text('faktor_penghambat_t2');
    $table->text('realisasi_ctt_t3');
    $table->text('faktor_pendorong_t3');
    $table->text('faktor_penghambat_t3');
    $table->text('realisasi_ctt_t4');
    $table->text('faktor_pendorong_t4');
    $table->text('faktor_penghambat_t4');
    $table->timestamps();
  });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laporans');
    }
};
