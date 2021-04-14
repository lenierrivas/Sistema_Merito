<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestQuestionsDescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_questions_descriptions', function (Blueprint $table) {
            $table->bigIncrements('descriptions_id');
            $table->string('descriptions');
            $table->string('lyrics');
            $table->unsignedBigInteger('questions_refer_id');
            $table->foreign('questions_refer_id')->references('questions_id')->on('test_questions');
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
        Schema::dropIfExists('test_questions_descriptions');
    }
}
