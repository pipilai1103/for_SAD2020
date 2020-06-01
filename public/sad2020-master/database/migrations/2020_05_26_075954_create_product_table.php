<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');    // 自動遞增相當於 UNSIGNED INTEGER（主鍵）欄位
            $table->string('name');     // 相當於 VARCHAR 欄位
            $table->unsignedInteger('cooperator_id');
            $table->foreign('cooperator_id')->references('id')->on('employee');
            $table->unsignedInteger('subsidiary_id');
            $table->foreign('subsidiary_id')->references('id')->on('subsidiary');
            $table->string('industry');
            $table->string('country');
            $table->text('other');      // Memo等小筆記補充

            $table->unsignedInteger('project_id');
            $table->unsignedInteger('stage_id');
            $table->foreign('project_id')->references('id')->on('project');
            $table->foreign('stage_id')->references('id')->on('product_stage');
            $table->boolean('is_failure');      // 提案是否失敗

            // 八個階段預計之天數
            $table->integer('first_visit')->unsigned();
            $table->integer('NDA')->unsigned();
            $table->integer('official_propose')->unsigned();
            $table->integer('MOU')->unsigned();
            $table->integer('dev_res_scheduling')->unsigned();
            $table->integer('req_negotiate')->unsigned();
            $table->integer('sign_contract')->unsigned();
            $table->integer('proj_start')->unsigned();

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
        Schema::dropIfExists('product');
    }
}
