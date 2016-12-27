<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWeighinsTable extends Migration
{
    /*
     описание:
    Таблица Взвешивание
    - соревнование,
    - profile спортсмена,
    - реальный вес спортсмена на взвешивании.
     */
    public function up()
    {
        Schema::create('weighings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('competition_id');
            $table->integer('profile_id');
            $table->double('real_weight');

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
        Schema::drop('weighins');
    }
}
