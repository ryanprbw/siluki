<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawais', function (Blueprint $table) {
            $table->id();
            $table->string('photo')->nullable(); // Kolom untuk menyimpan nama file gambar
            $table->integer('triwulan'); // Contoh kolom nilai pegawai dengan 8 digit sebelum koma dan 2 digit setelah koma
            $table->string('nama');
            $table->enum('jenis', ['ASN', 'Non-ASN']);
            $table->string('nip')->nullable(); // NIP hanya diperlukan untuk ASN, oleh itu nullable
            $table->decimal('nilai', 8, 2);
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
        Schema::dropIfExists('pegawais');
    }
}
