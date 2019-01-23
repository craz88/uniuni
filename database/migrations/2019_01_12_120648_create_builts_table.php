<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuiltsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('builts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('contents');
            $table->integer('member_id')->unsigned();
            $table->foreign('member_id')->references('id')->on('logins');
            $table->text('create');
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
        Schema::dropIfExists('builts');
    }
}
