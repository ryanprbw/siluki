<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AddBidangAndJabatanToUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->enum('bidang', ['Sekretariat', 'Dafduk', 'Capil', 'PDIP', 'PIAK'])->after('remember_token');
            $table->enum('jabatan', ['Kepala Bidang', 'Kasubbid', 'JF', 'Staff'])->after('bidang');
            $table->integer('level_jabatan')->after('jabatan');
        });

        // Mengupdate level_jabatan berdasarkan jabatan
        DB::statement("UPDATE users SET level_jabatan = CASE 
            WHEN jabatan = 'Kepala Bidang' THEN 3 
            WHEN jabatan IN ('JF', 'Kasubbid') THEN 2 
            ELSE 1 
            END");
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('bidang');
            $table->dropColumn('jabatan');
            $table->dropColumn('level_jabatan');
        });
    }
}
