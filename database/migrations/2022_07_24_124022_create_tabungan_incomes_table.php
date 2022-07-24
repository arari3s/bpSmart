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
        Schema::create('tabungan_incomes', function (Blueprint $table) {
            $table->id();

            $table->string('name')->nullable();
            $table->string('officer');
            $table->bigInteger('price');
            $table->string('noted');
            $table->string('status')->default(0);

            $table->softDeletes();
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
        Schema::dropIfExists('tabungan_incomes');
    }
};
