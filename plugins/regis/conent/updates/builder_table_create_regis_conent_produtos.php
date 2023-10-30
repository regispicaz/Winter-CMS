<?php namespace Regis\Conent\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRegisConentProdutos extends Migration
{
    public function up()
    {
        Schema::create('regis_conent_produtos', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->boolean('status');
            $table->string('title');
            $table->string('slug');
            $table->text('description');
            $table->string('brand');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('regis_conent_produtos');
    }
}
