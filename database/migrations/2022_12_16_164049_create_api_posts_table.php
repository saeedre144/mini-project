<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('api_posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('symbol');
            $table->string('current_price');
            $table->string('image');
            $table->unsignedBigInteger('market_cap');
            $table->unsignedBigInteger('market_cap_rank');
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
        Schema::dropIfExists('api_posts');
    }
};
