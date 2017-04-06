<?php namespace Hambern\Portfolio\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateHambernPortfolioPivots extends Migration
{
    public function up()
    {
        Schema::create('hambern_portfolio_pivots', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('item_id')->nullable()->index();
            $table->integer('category_id')->nullable()->index();
            $table->primary(['item_id', 'category_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('hambern_portfolio_pivots');
    }
}
