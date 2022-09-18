<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('image')->nullable();
            $table->string('autor')->nullable();
            $table->biginteger('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            
            $table->biginteger('autor_id')->unsigned();
            $table->foreign('autor_id')->references('id')->on('users')->onDelete('cascade');
            
            $table->text('bajada')->nullable();
            $table->text('cita')->nullable();
            $table->longText('text')->nullable();
            $table->string('file')->nullable();
            $table->boolean('visibility')->default(1);
            $table->timestamp('publish_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
