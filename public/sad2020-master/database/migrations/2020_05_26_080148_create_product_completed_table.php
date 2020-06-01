<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductCompletedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_completed', function (Blueprint $table) {
            //$table->increments('id');    // 自動遞增相當於 UNSIGNED INTEGER（主鍵）欄位
            $table->unsignedInteger('product_id');
            $table->unsignedInteger('stage_id');
            $table->foreign('product_id')->references('id')->on('product');
            $table->foreign('stage_id')->references('id')->on('product_stage');
            $table->dateTime('completed_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_completed');
    }
}
