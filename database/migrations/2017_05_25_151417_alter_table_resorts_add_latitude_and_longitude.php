<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableResortsAddLatitudeAndLongitude extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('resorts', function ($table){
            $table->float('latitude');
            $table->float('longitude');
            $table->dropColumn('location');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('resorts', function($table) {
            $table->dropColumn('latitude');
            $table->dropColumn('longitude');
            $table->text('location');
        });
    }
}
