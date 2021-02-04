<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRezervasyonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rezervasyons', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->integer('user_id');
            $table->integer('hizmet_id');
            $table->string('name', 50);
            $table->string('phone',20);
            $table->string('talephizmet',100);
            $table->date('tarih');
            $table->time('saat');
            $table->string('Not',100)->nullable();
            $table->string('status',25)->default('Değerlendiriliyor')->nullable();
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
        Schema::dropIfExists('rezervasyons');
    }
}
