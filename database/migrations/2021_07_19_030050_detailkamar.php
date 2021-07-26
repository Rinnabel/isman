<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Detailkamar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detailkamar', function (Blueprint $table) {
            $table->id();
            $table->unsignedbigInteger('kamar_id')->nullable();
                $table->foreign('kamar_id')->references('id')->on('kamar');
            $table->string('nama');
            $table->string('kelas');
            $table->string('ket_ruang');
            $table->string('fasilitas');
            $table->string('keterangan');
            $table->string('status');
            $table->timestamp('created_at')->nullable();
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
