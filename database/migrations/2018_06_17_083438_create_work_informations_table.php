<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_informations', function (Blueprint $table) {
            $table->increments('workInfo_id');
            $table->unsignedInteger('user_id');
            $table->string('company')->nullable();
            $table->string('department')->nullable();
            $table->string('occupation')->nullable();
            $table->string('hireDate')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('work_informations');
    }
}
