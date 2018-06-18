<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryChannelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_channel', function (Blueprint $table) {
            $table->integer('category_id')->unsigned();
            $table->integer('channel_id')->unsigned();
        });

        Schema::table('category_channel', function (Blueprint $table) {
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('channel_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('category_channel', function (Blueprint $table) {
            $table->dropForeign('category_channel_category_id_foreign');
            $table->dropForeign('category_channel_channel_id_foreign');
        });

        Schema::dropIfExists('category_channel');
    }
}
