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
            $table->string('no_induk')->unique();
            $table->string('nama_lengkap');
            $table->string('kelas');
            $table->string('jurusan');
            $table->integer('nilai_pabp');
            $table->integer('nilai_ppkn');
            $table->integer('nilai_bind');
            $table->integer('nilai_mtk');
            $table->integer('nilai_sej_ind');
            $table->integer('nilai_bing');
            $table->integer('nilai_seni');
            $table->integer('nilai_pjok');
            $table->integer('nilai_pkwu');
            $table->integer('nilai_sunda');
            $table->integer('nilai_mtk_geo');
            $table->integer('nilai_bio_sej');
            $table->integer('nilai_fis_sos');
            $table->integer('nilai_kim_eko');
            $table->integer('nilai_sos_jpn');
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
