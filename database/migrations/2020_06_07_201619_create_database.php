<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatabase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('databases', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type', 155);
            $table->string('url', 1000);
            $table->string('username', 155);
            $table->string('password', 155);
            $table->integer('port');
            $table->boolean('connexion_externe');
            $table->text('comment')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('inactive');

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
        Schema::dropIfExists('databases');
    }
}
