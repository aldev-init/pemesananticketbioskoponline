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
        Schema::create('film', function (Blueprint $table) {
            $table->id();
            $table->string('judul_film',255);
            $table->text('sinopsis');
            $table->string('kategori',255);
            $table->decimal('harga',10,2);
            $table->string('produser',255);
            $table->string('produksi',255);
            $table->string('home_page',255)->nullable()->default(null);
            $table->time('durasi')->nullable()->default(null);
            $table->string('gambar',255)->nullable()->default(null);
            $table->string('video')->nullable()->default(null);
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
        Schema::dropIfExists('film');
    }
};
