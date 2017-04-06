<?php namespace Hambern\Portfolio\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateHambernPortfolioItems extends Migration
{
    public function up()
    {
        Schema::create('hambern_portfolio_items', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->string('slug')->index();
            $table->text('excerpt')->nullable();
            $table->text('description')->nullable();
            $table->text('features')->nullable();
            $table->string('url')->nullable();
            $table->string('video_url')->nullable();
            $table->timestamp('published_at')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('hambern_portfolio_items');
    }
}
