<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class AlterDefinitionDatatypeToLongtextForAbbreviationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('abbreviations', function ($table) {
            $table->string('definition', 4294967295)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('abbreviations', function ($table) {
            // Will set the type to LONGTEXT.
            $table->string('definition')->change();
        });
    }
}
