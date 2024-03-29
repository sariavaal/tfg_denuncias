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
        Schema::create('users', function (Blueprint $table) {
            $table->engine="InnoDB";
             $table->bigIncrements('id');
             $table->string('user_name');
             $table->string('user_surname');
             $table->integer('user_ci');
             $table->string('user_email');
             $table->string('password');
             $table->string('user_number');
             $table->date('user_date_of_birth');
             $table->string('user_gender');
             $table->string('remember_token')->nullable();
 
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
        Schema::dropIfExists('users');
    }
};
