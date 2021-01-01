<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMember1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member1', function (Blueprint $table) {
            $table->id();
            $table->string('mem1');
            $table->string('mem1E');
            $table->string('mem1ID');
            $table->string('mem1Number');
            $table->string('mem1GIT');
            $table->date('mem1DOB');
            $table->string('mem1Birth');
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
        Schema::dropIfExists('member1');
    }
}
