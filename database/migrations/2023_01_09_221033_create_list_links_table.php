<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_links', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('linkone');
            $table->string('linktwo');
            $table->string('linkthree');
            $table->string('linktdefault');
            $table->string('maxclick');
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
        Schema::dropIfExists('list_links');
    }
}
