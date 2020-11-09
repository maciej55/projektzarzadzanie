<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZamowieniasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zamowienias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_towaru');
            $table->integer('id_klienta');
            $table->enum('priorytet', ['tak', 'nie']);
            $table->integer('ilosc');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('zamowienias');
    }
}
