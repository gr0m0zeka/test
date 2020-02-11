<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCallsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calls', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('time_to_call');
            $table->bigInteger('combination_id')->unsigned();
            $table->foreign('combination_id')->references('id')->on('combinations');
            $table->text('incoming_number');
            $table->text('receiving_number');
            $table->boolean('status');
            $table->text('profit');
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
        Schema::dropIfExists('calls');
    }
}
