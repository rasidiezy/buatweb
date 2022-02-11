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
        Schema::create('paket_benefits', function (Blueprint $table) {
            $table->id();
            //1st Method
            // $table->bigInteger('paket_id')->unsigned();
            $table->unsignedBigInteger('paket_id');

            //2nd Method -> Syarat nama tabel dan field di tabel referensi harus sama
            // $table->foreignId('paket_id')->constrained()
            $table->string('nama', 100);
            $table->timestamps();

            //1st Method
            $table->foreign('paket_id')->references('id')->on('pakets')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paket_benefits');
    }
};
