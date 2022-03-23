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
        Schema::create('pembelian', function (Blueprint $table) {
            $table->id();
            $table->string('nama',255);
            $table->bigInteger('studio')->unsigned()->nullable();
            $table->bigInteger('film')->unsigned();
            $table->bigInteger('jam_tayang')->unsigned();
            $table->integer('no_kursi');
            $table->integer('jumlah_tiket');
            $table->decimal('total_harga',10,2);
            $table->string('hari');
            $table->timestamps();
        });

        Schema::table('pembelian', function (Blueprint $table) {
            $table->foreign('film')->references('id')->on('film')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('jam_tayang')->references('id')->on('jadwal')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('studio')->references('id')->on('studio')->onDelete('set null')->onUpdate('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembelian');
    }
};
