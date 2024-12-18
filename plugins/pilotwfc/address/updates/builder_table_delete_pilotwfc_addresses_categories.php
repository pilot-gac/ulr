<?php namespace Pilotwfc\Address\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeletePilotwfcAddressesCategories extends Migration
{
    public function up()
    {
        Schema::dropIfExists('pilotwfc_addresses_categories');
    }

    public function down()
    {
        Schema::create('pilotwfc_addresses_categories', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('name', 255);
            $table->string('slug', 255);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
}
