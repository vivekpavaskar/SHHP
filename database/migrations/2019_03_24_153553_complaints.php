<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Complaints extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complaints', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('uid');
            $table->string('udesg',100);
            $table->string('org',100);
            $table->string('contact',100);
            $table->string('accused',100);
            $table->string('adesg',100);
            $table->string('state',100);
            $table->string('district',100);
            $table->mediumText('statement');
            $table->string('video',20);
            $table->string('status',10)->default('Applied');
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
        Schema::dropIfExists('complaints');
    }
}
