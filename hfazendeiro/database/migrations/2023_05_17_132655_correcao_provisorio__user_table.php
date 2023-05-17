<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CorrecaoProvisorioUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {

            $table->dropColumn('telefone')->nullable();
            $table->dropColumn('celular');
            $table->dropColumn('cidade');
            $table->dropColumn('estado');
            $table->dropColumn('rua');
            $table->dropColumn('cep')->nullable();
            $table->dropColumn('numero');
            $table->dropColumn('cpfcnpj')->unique();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
