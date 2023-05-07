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
        Schema::create('certificates', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('doctor_id');
            $table->enum('status',['1','0'])->default('1');
            $table->enum('at_home',['1','0'])->default('0');
            $table->string('image')->nullable();
            $table->unsignedInteger('order')->nullable();
            $table->timestamps();

            $table->foreign('doctor_id')
            ->references('id')
            ->on('doctors')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('certificates');
    }
};
