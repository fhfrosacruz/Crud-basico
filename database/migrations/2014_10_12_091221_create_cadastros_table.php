<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCadastrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cadastros', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 100);
            $table->string('cpf', 15)->unique();
            $table->text('descricao');
            $table->double('valor', 100.2);
            
            //$table->timestamp('email_verified_at')->nullable();
            //$table->string('password');
            //$table->rememberToken();
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cadastros');
    }
}
