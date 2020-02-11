<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdspendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adspends', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('combination_id')->unsigned();
            $table->foreign('combination_id')->references('id')->on('combinations');
            $table->date('date');
            $table->text('15_minute_interval');
            $table->text('amount_of_expenses');
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
        Schema::dropIfExists('adspends');
    }
}
