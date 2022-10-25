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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->date("cek_in");
            $table->date("cek_out");
            $table->string("nama_pemesan");
            $table->string("email");
            $table->string("no_handphone");
            $table->string("nama_tamu");
            $table->unsignedBigInteger("room_id");
            $table->foreign("room_id")->references("id")->on("rooms");
            $table->boolean("status");
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
        Schema::dropIfExists('reservations');
    }
};
