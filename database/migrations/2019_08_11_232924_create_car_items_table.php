<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('car_id')->unsigned()->index()->nullable();
            $table->integer('air_bag')->default(0);
            $table->integer('alarme')->default(0);
            $table->integer('ar_condicionado')->default(0);
            $table->integer('ar_quente')->default(0);
            $table->integer('banco_regulavel')->default(0);
            $table->integer('banco_aquecido')->default(0);
            $table->integer('banco_couro')->default(0);
            $table->integer('capota_maritima')->default(0);
            $table->integer('mp3')->default(0);
            $table->integer('cd_player')->default(0);
            $table->integer('comp_bordo')->default(0);
            $table->integer('controle_velocidade')->default(0);
            $table->integer('controle_travao')->default(0);
            $table->integer('desembacador_traseiro')->default(0);
            $table->integer('direcao_hidraulica')->default(0);
            $table->integer('disqueteira')->default(0);
            $table->integer('dvd')->default(0);
            $table->integer('encosto_cabeca_traseiro')->default(0);
            $table->integer('farol_xenon')->default(0);
            $table->integer('abs')->default(0);
            $table->integer('gps')->default(0);
            $table->integer('limpador_traseiro')->default(0);
            $table->integer('protetor_cacamba')->default(0);
            $table->integer('radio')->default(0);
            $table->integer('toca_fitas')->default(0);
            $table->integer('retrovisor_fotocromico')->default(0);
            $table->integer('retrovisor_eletrico')->default(0);
            $table->integer('rodas_liga')->default(0);
            $table->integer('sensor_chuva')->default(0);
            $table->integer('sensor_estacionamento')->default(0);
            $table->integer('teto_solar')->default(0);
            $table->integer('4x4')->default(0);
            $table->integer('trava_eletrica')->default(0);
            $table->integer('vidro_eletrico')->default(0);
            $table->integer('volante_regulavel')->default(0);
            $table->integer('blindado')->default(0);
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('car_id')->references('id')->on('cars');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('car_items');
    }
}
