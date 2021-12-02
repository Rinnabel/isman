<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Register extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('register', function (Blueprint $table) {
            //$table->id();
            $table->id();
            $table->char('pasien_nik', 16)->nullable();
            $table->date('tanggal_masuk');
            $table->date('tanggal_keluar');
            $table->string('asal_pengirim');
            $table->unsignedbigInteger('detailkamar_id')->nullable();
            $table->string('status_tes');
            $table->string('status');
            $table->date('tanggal_tes');
            $table->date('tanggal_swab1');
            $table->string('hasil_swab1');
            $table->date('tanggal_swab2');
            $table->string('hasil_swab2');
            $table->date('tanggal_swab3');
            $table->string('hasil_swab3');
            $table->date('tanggal_swab4');
            $table->string('hasil_swab4');
            $table->timestamp('created_at')->nullable();
            $table->foreign('pasien_nik')->references('nik')->on('pasien');
            $table->foreign('detailkamar_id')->references('id')->on('detailkamar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
