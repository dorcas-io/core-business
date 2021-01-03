<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('application_categories', function (Blueprint $table) {

		$table->increments(id)->unsigned();
		$table->char('uuid',36);
		$table->char('slug',80);
		$table->char('name',80);
		$table->text('description');
		$table->timestamp('created_at')->nullable()->default('NULL');
		$table->timestamp('updated_at')->nullable()->default('NULL');
		$table->primary('id');

        });
    }

    public function down()
    {
        Schema::dropIfExists('application_categories');
    }
}