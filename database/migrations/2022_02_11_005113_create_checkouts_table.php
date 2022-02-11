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
        Schema::create('checkouts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id')->constrained();
            $table->unsignedBigInteger('paket_id');
            $table->string('nomor_kartu', 20);
            $table->date('kadaluwarsa');
            $table->string('cvc', 3);
            $table->boolean('is_paid')->default(false);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('paket_id')->references('id')->on('paket')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('checkouts');
    }
};
