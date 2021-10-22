<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddOtherfieldsToDiscosTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
      Schema::table('discos', function (Blueprint $table) {
        $table->string('ano_edicao')->after('ano');
        $table->string('selo')->after('ano_edicao');
        $table->string('pais')->after('selo');
        $table->text('formato')->after('pais');
        $table->text('tipo')->after('formato');
        $table->text('especificacoes')->after('tipo');

      });
  }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('discos', function (Blueprint $table) {
            //
        });
    }
}
