<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabelangsuransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabelangsurans', function (Blueprint $table) {
            $table->id();
            $table->string('noph');
            $table->string('noinv')->nullable();
            $table->string('unitcode')->nullable();
            $table->string('costumer_id')->nullable();
            $table->string('date')->nullable();
            $table->string('seq')->nullable();
            $table->string('desc')->nullable();
            $table->string('descr')->nullable();
            $table->string('invoice')->nullable();
            $table->string('paid')->nullable();
            $table->string('datepaid')->nullable();
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
        Schema::dropIfExists('tabelangsurans');
    }
}
