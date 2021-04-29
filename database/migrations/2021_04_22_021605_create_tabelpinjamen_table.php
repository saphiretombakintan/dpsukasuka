<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabelpinjamenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabelpinjamen', function (Blueprint $table) {
            $table->id();
            $table->string('noph');
            $table->integer('cluster')->nullable();
            $table->string('unit')->nullable();
            $table->string('phnotaris')->nullable();
            $table->string('costumer')->nullable();
            $table->string('pinjaman')->nullable();
            $table->string('nominal')->nullable();
            $table->string('tenor')->nullable();
            $table->string('angsuran')->nullable();
            $table->string('pembayaran')->nullable();
            $table->string('seq')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('tabelpinjamen');
    }
}
