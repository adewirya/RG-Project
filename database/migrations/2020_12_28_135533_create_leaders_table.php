<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leaders', function (Blueprint $table) {
            $table->id();
            $table->string('leadN');
            $table->string('leadStat');
            $table->string('leadE');
            $table->string('leadID');
            $table->integer('leadNumber');
            $table->string('leadGit');
            $table->date('leadDOB');
            $table->string('leadBirth');
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
        Schema::dropIfExists('leaders');
    }
}
