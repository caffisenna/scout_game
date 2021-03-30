<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGamesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('games', function(Blueprint $table) {
			$table->increments('id');
            $table->string('title');
			$table->string('target');
			$table->string('team_flag');
			$table->string('duration');
			$table->string('at_least');
			$table->string('field');
			$table->string('gear');
            $table->text('how_to');
			$table->text('over_view');
			$table->text('hint');
			$table->text('safty_point');
			$table->text('arrangement');
            $table->timestamps();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('games');
	}

}
