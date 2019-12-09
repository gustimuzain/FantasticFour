<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Booking extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("tbl_booking", function(Blueprint $table){
            $table->increments("id");
            $table->date("tgl_pinjam");
            $table->date("tgl_kembali");
            $table->time("jam");
            $table->integer("mobil_id")->unsigned()->unique();
            $table->integer("user_id")->unsigned()->unique();

            $table->foreign("mobil_id")->references("id")->on("tbl_mobil");
            $table->foreign("user_id")->references("id")->on("tbl_user");
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
