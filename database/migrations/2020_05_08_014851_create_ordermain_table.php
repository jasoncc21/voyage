<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdermainTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordermain', function (Blueprint $table) {
            $table->bigIncrements('ONo');
            $table->date('ODate');
            $table->string('UId', 50);
            $table->string('UName', 50);
            $table->string('UPhone', 50);
            $table->string('UAddress', 250);
            $table->string('PName', 250);
            $table->decimal('OPrice', 18, 4)->default(0)->nullable()->unsigned();
            $table->string('pic', 255)->nullable();
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
        Schema::dropIfExists('ordermain');
    }
}
