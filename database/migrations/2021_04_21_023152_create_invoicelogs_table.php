<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicelogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoicelogs', function (Blueprint $table) {
            $table->id();
            $table->integer('invoice');
            $table->integer('payment')->nullable();
            $table->string('invoice_date')->nullable();
            $table->string('invoice_month')->nullable();
            $table->string('invoice_year')->nullable();
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
        Schema::dropIfExists('invoicelogs');
    }
}
