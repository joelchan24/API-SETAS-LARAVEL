<?php
//https://es.stackoverflow.com/questions/63928/como-actualizar-una-db-sin-perder-datos-en-las-tablas-de-estas-en-laravel
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomcomun',100);
            $table->string('nomcient',100);
            $table->string('imgurl',100);
            $table->string('tipo');
            $table->string('descripcion');
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
        Schema::dropIfExists('setas');
    }
}
