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
        Schema::create('doctor_position_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('doctor_position_id');
            $table->string('locale');
            $table->string('title');
          
            $table->timestamps();

            $table->foreign('doctor_position_id')
            ->references('id')
            ->on('doctor_positions')
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
        Schema::dropIfExists('doctor_position_translations');
    }
};
