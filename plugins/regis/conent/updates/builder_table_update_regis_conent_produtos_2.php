<?php namespace Regis\Conent\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRegisConentProdutos2 extends Migration
{
    public function up()
    {
        Schema::table('regis_conent_produtos', function($table)
        {
            $table->text('image')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('regis_conent_produtos', function($table)
        {
            $table->dropColumn('image');
        });
    }
}
