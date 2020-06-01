<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact', function (Blueprint $table) {
            $table->increments('id');    // 自動遞增相當於 UNSIGNED INTEGER（主鍵）欄位
            $table->string('name');     // 相當於 VARCHAR 欄位
            $table->string('appellation');      // Mr, Mrs
            $table->string('tel');
            $table->string('email');

            $table->unsignedInteger('partner_id');
            $table->foreign('partner_id')->references('id')->on('partner_company');
            $table->string('department');
            $table->string('position');         
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contact');
    }
}
