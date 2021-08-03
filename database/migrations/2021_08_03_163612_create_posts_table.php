<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('slug');
            $table->text('extracto');
            $table->longText('body');
            $table->enum('estado', [1, 2])->default(1);

            // creamos los atributos para la relacion con la tabla de user y categories
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('category_id');

            // hacemos referencia de relacion con la tablas respectivas
            // relacionamos el campo user_id con id de la tabla users y que se actualice en forma de cascade

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
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
        Schema::dropIfExists('posts');
    }
}