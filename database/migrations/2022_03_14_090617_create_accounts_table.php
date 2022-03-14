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
        Schema::create('accounts', function (Blueprint $table) {
            $table->id('id');
            $table->string('user_name');
            $table->string('first_name');
            $table->string('last_name');
            $table->date('dob');
            $table->integer('phone');
            $table->string('email');
            $table->string('address');
            $table->string('hobby')->nullable();
            $table->enum('gender',["male","female"])->nullable();
            $table->enum('country',['india','china','pakistan'])->nullable();
            $table->enum('state',['gujarat','maharashtra','up'])->nullable();


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
        Schema::dropIfExists('accounts');
    }
};