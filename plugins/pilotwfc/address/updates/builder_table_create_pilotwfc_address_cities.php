<?php namespace Pilotwfc\Address\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreatePilotwfcAddressCities extends Migration
{
    public function up()
    {
        Schema::create('pilotwfc_address_cities', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('city')->nullable();
            $table->string('slug')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('pilotwfc_address_cities');
    }
}
