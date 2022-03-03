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
        Schema::table('checkouts', function (Blueprint $table) {
           $table->dropColumn('nomor_kartu');
           $table->dropColumn('kadaluwarsa');
           $table->dropColumn('cvc');
           $table->dropColumn('is_paid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('checkouts', function (Blueprint $table) {
            $table->string('nomor_kartu', 20)->nullable;
            $table->date('kadaluwarsa')->nullable;
            $table->string('cvc', 3)->nullable;
            $table->boolean('is_paid')->default(false);
        });
    }
};
