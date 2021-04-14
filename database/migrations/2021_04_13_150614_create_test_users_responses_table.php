<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestUsersResponsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_users_responses', function (Blueprint $table) {
            $table->bigIncrements('user_responses_id');
            
        # Foreign Key
            $table->string('user_id');
            $table->foreign('user_id')->references('id')->on('users');

        # Foreign Key
            $table->unsignedBigInteger('questions_name_id');
            $table->foreign('questions_name_id')->references('questions_id')->on('test_questions');

        # Foreign Key
            $table->unsignedBigInteger('questions_descriptions_id');
            $table->foreign('questions_descriptions_id')->references('descriptions_id')->on('test_questions_descriptions');

            $table->string('lyrics');
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
        Schema::dropIfExists('test_users_responses');
    }
}
