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
        Schema::create("tbl_transaksi", function(Blueprint $table){
            $table->increments("id");
            $table->decimal('total');
            $table->integer("booking_id")->unsigned()->unique();

            $table->foreign("booking_id")->references("id")->on("tbl_booking");
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
