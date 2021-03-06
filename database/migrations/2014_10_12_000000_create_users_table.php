<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',75);
            $table->string('email')->unique();
            $table->string('password');

            $table->string('file_name',250)->default('NA');
            $table->string('tag',50)->unique();
            $table->date('birth_date')->nullable();
            $table->integer('age')->nullable();
            $table->string('artistic_name',30)->nullable();
            $table->text('history')->nullable();
            $table->rememberToken();
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
}
