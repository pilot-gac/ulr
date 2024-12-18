<?php namespace Pilotwfc\Address\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePilotwfcAddressPost3 extends Migration
{
    public function up()
    {
        Schema::table('pilotwfc_address_post', function($table)
        {
            $table->integer('city_id');
            $table->integer('category_id');
            $table->dropColumn('city');
        });
    }
    
    public function down()
    {
        Schema::table('pilotwfc_address_post', function($table)
        {
            $table->dropColumn('city_id');
            $table->dropColumn('category_id');
            $table->string('city', 255)->nullable();
        });
    }
}
