<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->string('img')->nullable();
            $table->string('data',12);
            $table->text('local');
            $table->text('descricao');
            $table->text('preletores');
            
            $table->unsignedBigInteger('id_categoria');
            $table->foreign('id_categoria')
                ->references('id')
                ->on('categories')
                ->cascade('delete');

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
        Schema::dropIfExists('activities');
    }
};
