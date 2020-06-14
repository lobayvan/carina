<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSqlInjection extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sql_injection', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('domaine', 1000);
            $table->text('sql_map_cmd');
            $table->text('commentaire')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('inactive');

            $table->timestamps();
        });
    }

    /*
     *
     * - Domaine: input (requis, string)
- Sql map cmd: textarea(requis, text)
- Commentaire: textarea (requis, text)*/

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sql_injection');
    }
}
