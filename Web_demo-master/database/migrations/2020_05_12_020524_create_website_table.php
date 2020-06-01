<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebsiteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('website', function (Blueprint $table) {
            $table->increments('id');    // 自動遞增相當於 UNSIGNED INTEGER（主鍵）欄位
            $table->string('title');     // 相當於 VARCHAR 欄位
            $table->string('subtitle');
            $table->string('footer');
        });
        /*Schema::create('website', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('website');
    }
}
