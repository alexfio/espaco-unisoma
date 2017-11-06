<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMensagemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mensagems', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('uuid');
            $table->text('conteudo');
            $table->integer('visitante_id');
            $table->timestamps();

            $table->foreign('visitante_id')
                  ->references('id')
                  ->on('visitantes')
                  ->onUpdate('cascade')
                  ->onDelete('restrict');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mensagems', function(Blueprint $table) {
            $table->dropForeign(['visitante_id']);
        });
        Schema::dropIfExists('mensagems');
    }
}
