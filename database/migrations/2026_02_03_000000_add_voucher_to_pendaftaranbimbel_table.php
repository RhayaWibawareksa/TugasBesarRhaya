<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('pendaftaranbimbel', function (Blueprint $table) {
            $table->string('voucher_code')->nullable()->after('pilih_paket');
        });
    }

    public function down()
    {
        Schema::table('pendaftaranbimbel', function (Blueprint $table) {
            $table->dropColumn('voucher_code');
        });
    }
};
