<?php namespace Regis\Conent\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRegisConentProdutos extends Migration
{
    public function up()
    {
        Schema::table('regis_conent_produtos', function($table)
        {
            $table->integer('sort_order')->default(0);
        });
    }
    
    public function down()
    {
        Schema::table('regis_conent_produtos', function($table)
        {
            $table->dropColumn('sort_order');
        });
    }
}
