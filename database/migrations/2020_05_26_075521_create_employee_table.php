<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee', function (Blueprint $table) {
            $table->increments('id');    // 自動遞增相當於 UNSIGNED INTEGER（主鍵）欄位
            $table->string('account',191)->unique();
            $table->string('password');

            $table->string('name');     // 相當於 VARCHAR 欄位
            $table->char('gender', 1);
            $table->string('tel');
            $table->string('email');

            $table->unsignedInteger('department_id');
            $table->foreign('department_id')->references('id')->on('department');
            $table->string('position');
            $table->unsignedInteger('supervisor_id');
            $table->foreign('supervisor_id')->references('id')->on('employee');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee');
    }
}
