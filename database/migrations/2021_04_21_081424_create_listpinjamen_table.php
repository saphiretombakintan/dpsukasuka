<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListpinjamenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listpinjamen', function (Blueprint $table) {
            $table->id();
            $table->string('cluster');
            $table->string('status')->nullable();
            $table->string('blok')->nullable();
            $table->string('namakonsumen')->nullable();
            $table->string('notlp')->nullable();
            $table->integer('noph')->nullable();
            $table->string('pokokpiutang')->nullable();
            $table->string('tertagihpiutang')->nullable();
            $table->string('sisapiutang')->nullable();
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
        Schema::dropIfExists('listpinjamen');
    }
}
