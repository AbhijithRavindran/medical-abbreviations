<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbbreviationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abbreviations', function (Blueprint $table) {
            $table->id();
            $table->string('abbreviation');
            $table->string('description');
            $table->integer('category_id');
            $table->string('category_name');
            $table->integer('sub_category_id');
            $table->string('sub_category_name');
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
        Schema::dropIfExists('abbreviations');
    }
}
