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
        Schema::table('laporans', function (Blueprint $table) {
            $table->text('catatan_kadis_t1')->nullable();
        $table->text('catatan_kadis_t2')->nullable();
        $table->text('catatan_kadis_t3')->nullable();
        $table->text('catatan_kadis_t4')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('laporans', function (Blueprint $table) {
            $table->dropColumn(['catatan_kadis_t1', 'catatan_kadis_t2', 'catatan_kadis_t3', 'catatan_kadis_t4']);
   
        });
    }
};
