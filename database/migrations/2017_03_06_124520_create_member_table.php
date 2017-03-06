<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('member', function(Blueprint $table){
            $table->engine = 'MyISAM';
            $table->increments('memberId');
            //$table->primary('memberId');
            $table->string('noMember');
            $table->unique('noMember');
            $table->string('name');
            $table->bigInteger('noIc')->nullable();
            $table->string('noTel')->nullable();
            $table->integer('active')->default(1);
            $table->string('note')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('member');
    }
}
