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
        Schema::create('statistic_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('statistic_id');
            $table->string('locale');
            $table->string('title');
         
            $table->timestamps();

            $table->foreign('statistic_id')
            ->references('id')
            ->on('statistics')
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
        Schema::dropIfExists('statistic_translations');
    }
};
