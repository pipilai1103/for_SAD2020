<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductRelatedDepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_related_deps', function (Blueprint $table) {
            //$table->increments('id');    // 自動遞增相當於 UNSIGNED INTEGER（主鍵）欄位
            $table->unsignedInteger('product_id');
            $table->unsignedInteger('department_id');
            $table->foreign('product_id')->references('id')->on('product');
            $table->foreign('department_id')->references('id')->on('department');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_related_deps');
    }
}
