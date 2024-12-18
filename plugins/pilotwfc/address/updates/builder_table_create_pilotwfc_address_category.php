<?php namespace Pilotwfc\Address\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreatePilotwfcAddressCategory extends Migration
{
    public function up()
    {
        Schema::create('pilotwfc_address_category', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('category')->nullable();
            $table->string('slug')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('pilotwfc_address_category');
    }
}
