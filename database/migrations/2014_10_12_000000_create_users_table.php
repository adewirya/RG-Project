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
            $table->string('groupName');
            $table->string('password');
            $table->string('groupStat');
            
            $table->string('leadN');
            $table->string('leadE');
            $table->string('leadID');
            $table->string('leadNumber');
            $table->string('leadGit');
            $table->date('leadDOB');
            $table->string('leadBirth');
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
