<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMember2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member2', function (Blueprint $table) {
            $table->id();
            $table->string('mem2');
            $table->string('mem2Stat');
            $table->email('mem2E');
            $table->string('mem2ID');
            $table->integer('mem2Number');
            $table->string('mem2GIT');
            $table->date('mem2DOB');
            $table->string('mem2Birth');
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
        Schema::dropIfExists('member2');
    }
}
