<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project', function (Blueprint $table) {
            $table->increments('id');    // 自動遞增相當於 UNSIGNED INTEGER（主鍵）欄位

            $table->unsignedInteger('owner_id');
            $table->unsignedInteger('contact_id');
            $table->foreign('owner_id')->references('id')->on('employee');
            $table->foreign('contact_id')->references('id')->on('contact');
            $table->dateTime('start_date');

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
        Schema::dropIfExists('project');
    }
}
