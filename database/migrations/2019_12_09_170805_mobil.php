<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Transaksi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("mobil", function(Blueprint $table){
            $table->increments("mobil_id");
            $table->string('nama');
            $table->decimal('harga');
            $table->integer('tahun');
            $table->string('plat')->unique();
            $table->integer("kategori_id");
            $table->string('gambar');
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
