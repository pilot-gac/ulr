<?php namespace Pilotwfc\Address\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreatePilotwfcAddressPost extends Migration
{
    public function up()
    {
        Schema::create('pilotwfc_address_post', function($table)
        {
            $table->integer('id')->unsigned();
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->string('type')->nullable();
            $table->string('phone_main')->nullable();
            $table->string('phone_mobile')->nullable();
            $table->string('email')->nullable();
            $table->string('city')->nullable();
            $table->string('address')->nullable();
            $table->decimal('latitude', 10, 0)->nullable();
            $table->decimal('longitude', 10, 0)->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->boolean('is_published')->default(1);
            $table->primary(['id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('pilotwfc_address_post');
    }
}
