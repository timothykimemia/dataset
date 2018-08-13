<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('asset')->create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('uid')->unique();
            $table->string('title');
            $table->longText('description');
            $table->float('price');
            $table->integer('stock');
            $table->boolean('live')->default(false);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('timothy_core.users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('asset')->dropIfExists('products');
    }
}
