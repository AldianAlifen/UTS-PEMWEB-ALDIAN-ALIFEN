<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatagurusTable extends Migration
{
    public function up()
    {
        Schema::create('datagurus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->integer('nip')->nullable();
            $table->string('mapel')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
