<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class WordFhLongify extends Migration {

	private $tablePrefix;

	function __construct()
	{
		$this->tablePrefix = Config::get('database.connections.mysql.prefix');
	}

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::statement("ALTER TABLE {$this->tablePrefix}konyvek MODIFY COLUMN fh BIGINT");
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::statement("ALTER TABLE {$this->tablePrefix}konyvek MODIFY COLUMN fh INT");
	}

}
