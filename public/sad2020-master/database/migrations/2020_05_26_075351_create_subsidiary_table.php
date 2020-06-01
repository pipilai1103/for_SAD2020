<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubsidiaryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subsidiary', function (Blueprint $table) {
            $table->increments('id');    // 自動遞增相當於 UNSIGNED INTEGER（主鍵）欄位
            $table->string('name');     // 相當於 VARCHAR 欄位
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subsidiary');
    }
}
