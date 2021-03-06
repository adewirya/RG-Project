<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('groupName')->unique();
            $table->string('password');
            $table->string('groupStat');
            
            $table->string('usertype')->nullable(); 
            $table->string('paymentStatus')->nullable();

            $table->string('leadN');
            $table->string('leadE')->unique();
            $table->string('leadNumber')->unique();
            $table->string('leadID')->unique();
            $table->string('leadGit')->unique();
            $table->string('leadBirth');
            $table->date('leadDOB');
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
        Schema::dropIfExists('User');
    }
}
