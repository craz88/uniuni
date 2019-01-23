<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->increments('id');
            $table->text('reply');
            $table->string('answer_switch',1);
            $table->integer('member_id')->unsigned();
            $table->integer('built_id')->unsigned();
            $table->foreign('member_id')->references('id')->on('logins');
            $table->foreign('built_id')->references('id')->on('builts');
            $table->unique(['member_id', 'built_id'],'uq_roles');
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
        Schema::dropIfExists('answers');
    }
}
