<?php namespace Pilotwfc\Address\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePilotwfcAddressPost2 extends Migration
{
    public function up()
    {
        Schema::table('pilotwfc_address_post', function($table)
        {
            $table->increments('id')->change();
        });
    }
    
    public function down()
    {
        Schema::table('pilotwfc_address_post', function($table)
        {
            $table->integer('id')->change();
        });
    }
}
