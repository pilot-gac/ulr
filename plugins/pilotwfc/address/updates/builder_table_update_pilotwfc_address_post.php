<?php namespace Pilotwfc\Address\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePilotwfcAddressPost extends Migration
{
    public function up()
    {
        Schema::table('pilotwfc_address_post', function($table)
        {
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('pilotwfc_address_post', function($table)
        {
            $table->dropColumn('deleted_at');
        });
    }
}
