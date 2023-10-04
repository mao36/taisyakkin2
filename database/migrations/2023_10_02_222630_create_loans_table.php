<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('lending_user_id');
            $table->unsignedInteger('borrowed_user_id');
            $table->string('content');
            $table->unsignedInteger('amount');
            $table->date('lending_on')->nullable();
            $table->date('due_on')->nullable();
            $table->date('repaid_on')->nullable();
            $table->timestamps();

            $table->foreign('lending_user_id')->references('id')->on('users');
            $table->foreign('borrowed_user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loans');
        Schema::dropIfExists('users');
    }
}
