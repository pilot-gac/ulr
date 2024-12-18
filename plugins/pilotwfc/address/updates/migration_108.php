<?php namespace Pilotwfc\Address\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class Migration108 extends Migration
{
    public function up()
    {
       Schema::create('pilotwfc_address_post_categories', function($table) {
    $table->integer('address_post_id')->unsigned();
    $table->integer('address_category_id')->unsigned();
    $table->primary(['address_post_id', 'address_category_id']);
});

    }

    public function down()
    {
        Schema::drop('pilotwfc_address_post_categories');
    }
}