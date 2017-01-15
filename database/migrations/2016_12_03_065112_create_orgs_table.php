<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrgsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orgs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('url')->nullable();
            $table->string('email');
            $table->text('description');
            $table->string('pillars')->nullable();
            $table->string('password')->password();
            $table->timestamps();
        });

        Schema::create('org_user', function (Blueprint $table){
            $table->integer('org_id')->unsigned()->index();
            $table->foreign('org_id')->references('id')->on('orgs')->onDelete('cascade');
            $table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('org_user');    
        Schema::dropIfExists('orgs');
        
    }
}
