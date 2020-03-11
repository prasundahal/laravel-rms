<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIteamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iteams', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string ('iteam_name');
            $table->string ('iteam_price');
            $table->string('image');
            $table->string ('iteam_discription');
            $table->string ('iteam_category');
            $table->string ('iteam_time');


        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('iteams');
    }
}
