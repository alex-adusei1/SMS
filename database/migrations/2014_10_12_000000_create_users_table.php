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
            $table->integer('user_type_id')->unsigned();
            $table->string('first_name')->default('first name')->nullable();
            $table->string('lastname')->default('last name')->nullable();
            $table->string('email',100)->unique();
            $table->string('password');
            $table->string('username')->default('username')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('user_type_id')
                ->references('id')->on('user_types')
                ->onDelete('cascade');
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
