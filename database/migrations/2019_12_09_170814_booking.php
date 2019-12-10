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
        Schema::create("booking", function(Blueprint $table){
            $table->increments("booking_id");
            $table->date("tgl_pinjam");
            $table->date("tgl_kembali");
            $table->time("jam");
            $table->integer("mobil_id");
            $table->integer("user_id");
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
