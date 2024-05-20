<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTiposProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipos_producto', function (Blueprint $table) {
            $table->bigIncrements('IdTipoProducto');
            $table->string('descripcion');
            $table->timestamps();
        });

        DB::table('tipos_producto')->insert([
            ['descripcion' => 'Cereales'],
            ['descripcion' => 'Fertilizantes'],
            ['descripcion' => 'Aceites'],
            ['descripcion' => 'Harinas'],
            ['descripcion' => 'Valores'],
            ['descripcion' => 'Ganado'],
        ]);
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipos_producto');
    }
}
