<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStagingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staging', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('combination_id')->unsigned();
            $table->foreign('combination_id')->references('id')->on('combinations');
            $table->text('time');
            $table->text('money');
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
        Schema::dropIfExists('staging');
    }
}
