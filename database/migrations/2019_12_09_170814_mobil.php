<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Mobil extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("tbl_mobil", function(Blueprint $table){
            $table->increments("id");
            $table->string('nama');
            $table->decimal('harga');
            $table->integer('tahun');
            $table->string('plat')->unique();
            $table->integer("kategori_id")->unsigned()->unique();

            $table->foreign("kategori_id")->references("id")->on("tbl_kategori_mobil");
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
