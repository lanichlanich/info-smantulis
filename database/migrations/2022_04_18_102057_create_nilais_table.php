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
        Schema::create('nilais', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('no_induk')->unique();
            $table->string('tpt_lahir');
            $table->string('tgl_lahir');
            $table->string('nisn');
            $table->string('jurusan');
            $table->decimal('nilai_pabp', $precision = 8, $scale = 2);
            $table->decimal('nilai_ppkn', $precision = 8, $scale = 2);
            $table->decimal('nilai_bind', $precision = 8, $scale = 2);
            $table->decimal('nilai_mtk', $precision = 8, $scale = 2);
            $table->decimal('nilai_sej_ind', $precision = 8, $scale = 2);
            $table->decimal('nilai_bing', $precision = 8, $scale = 2);
            $table->decimal('nilai_seni', $precision = 8, $scale = 2);
            $table->decimal('nilai_pjok', $precision = 8, $scale = 2);
            $table->decimal('nilai_pkwu', $precision = 8, $scale = 2);
            $table->decimal('nilai_sunda', $precision = 8, $scale = 2);
            $table->decimal('nilai_mtk_geo', $precision = 8, $scale = 2);
            $table->decimal('nilai_bio_sej', $precision = 8, $scale = 2);
            $table->decimal('nilai_fis_sos', $precision = 8, $scale = 2);
            $table->decimal('nilai_kim_eko', $precision = 8, $scale = 2);
            $table->decimal('nilai_sos_jep', $precision = 8, $scale = 2);
            $table->decimal('rata_rata', $precision = 8, $scale = 2);
            $table->string('status');
            $table->string('url_file');
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
        Schema::dropIfExists('nilais');
    }
};
