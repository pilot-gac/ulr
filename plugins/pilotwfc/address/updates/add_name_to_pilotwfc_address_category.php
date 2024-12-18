<?php namespace Pilotwfc\Address\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

/**
 * AddNameToPilotwfcAddressCategory Migration
 *
 * @link https://docs.octobercms.com/3.x/extend/database/structure.html
 */
return new class extends Migration
{
    /**
     * up builds the migration
     */
    public function up()
    {
        Schema::table('pilotwfc_address_category', function ($table) {
            $table->string('name')->nullable();
        });

    }

    /**
     * down reverses the migration
     */
    public function down()
    {
        Schema::table('pilotwfc_address_category', function(Blueprint $table) {

                   });
    }
};
