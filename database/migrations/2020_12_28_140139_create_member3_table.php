<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMember3Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member3', function (Blueprint $table) {
            $table->id();
            $table->string('mem3');
            $table->string('mem3Stat');
            $table->string('mem3E');
            $table->string('mem3ID');
            $table->string('mem3Number');
            $table->string('mem3GIT');
            $table->date('mem3DOB');
            $table->string('mem3Birth');
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
        Schema::dropIfExists('member3');
    }
}
