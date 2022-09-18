<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->text('question');
            $table->longText('response');

            $table->biginteger('autor_id')->unsigned();
            $table->foreign('autor_id')->references('id')->on('users')->onDelete('cascade');

            $table->boolean('favorite')->default(0);
            $table->smallInteger('orden')->default(0);
            $table->boolean('visibility')->default(1);
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
        Schema::dropIfExists('questions');
    }
}
