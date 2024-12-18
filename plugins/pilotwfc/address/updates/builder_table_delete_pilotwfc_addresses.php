<?php namespace Pilotwfc\Address\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeletePilotwfcAddresses extends Migration
{
    public function up()
    {
        Schema::dropIfExists('pilotwfc_addresses');
    }
    
    public function down()
    {
        Schema::create('pilotwfc_addresses', function($table)
        {
            $table->increments('id')->unsigned();
            $table->integer('category_id')->nullable()->unsigned();
            $table->string('title', 255);
            $table->text('description')->nullable();
            $table->string('type', 255);
            $table->string('phone_main', 255)->nullable();
            $table->string('phone_mobile', 255)->nullable();
            $table->string('email', 255)->nullable();
            $table->string('city', 255)->nullable();
            $table->string('address', 255)->nullable();
            $table->decimal('latitude', 10, 8)->nullable();
            $table->decimal('longitude', 11, 8)->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
}
