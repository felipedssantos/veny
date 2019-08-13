<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCambioCombustivelToCars extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cars', function (Blueprint $table) {
            $table->string('transmission')->after('desc');
            $table->string('fuel')->after('desc');
            $table->string('color')->after('desc');
            $table->string('type')->after('desc');
            $table->string('category')->after('desc');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cars', function (Blueprint $table) {
            $table->dropColumn('transmission');
            $table->dropColumn('fuel');
            $table->dropColumn('color');
            $table->dropColumn('type');
            $table->dropColumn('category');
        });
    }
}
