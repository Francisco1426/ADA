<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Eventos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos',function(Blueprint $table){
            $table->increments('id_evento');
            $table->string('nombre',40);
            $table->string('fecha_evento');
            $table->time('hora_evento');
            $table->string('lugar_evento',255);
            $table->string('tipo_evento',255);

            $table->bigInteger('actividad_id')->unsigned();
            $table->foreign('actividad_id')->references('id')->on('actividades')->onDelete("cascade");

            $table->bigInteger('detalle_id')->unsigned();
            $table->foreign('detalle_id')->references('id')->on('detalle_actividades')->onDelete("cascade");
            $table->rememberToken();
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
        Schema::drop('eventos');
    }
}
