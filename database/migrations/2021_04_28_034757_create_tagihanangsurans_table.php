<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagihanangsuransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tagihanangsurans', function (Blueprint $table) {
            $table->id();
            $table->string('tahun')->nullable();
            $table->string('bulan')->nullable();
            $table->string('cluster')->nullable();
            $table->string('blok')->nullable();
            $table->string('namakonsumen')->nullable();
            $table->double('angsuran')->nullable();
            $table->string('tenor')->nullable();
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
        Schema::dropIfExists('tagihanangsurans');
    }
}
