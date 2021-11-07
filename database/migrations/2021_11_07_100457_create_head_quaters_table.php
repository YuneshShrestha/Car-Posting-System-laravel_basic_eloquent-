<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeadQuatersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('head_quaters', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('car_id');
            $table->string('headquater');
            $table->string('country');
            $table->timestamps();
            $table->foreign('car_id')
                  ->references('id')
                  ->on('cars')
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
        Schema::dropIfExists('head_quaters');
    }
}
