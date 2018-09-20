<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Admin extends Migration
{
    
    public function up()
    {
       Schema::create('admin', function(Blueprint $table)
        {
          $table->increments('id');
          $table->string('email');
          $table->string('password');
          $table->string('remember_token')->nullable();
          $table->timestamps();
      });
    }

   
    public function down()
    {
        Schema::drop('admin');
    }
}
