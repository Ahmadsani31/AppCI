<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDataTable extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'               => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
			'nama'             => ['type' => 'varchar', 'constraint' => 255],
			'email'            => ['type' => 'varchar', 'constraint' => 255],
			'alamat'           => ['type' => 'varchar', 'constraint' => 255],
			'created_at'       => ['type' => 'datetime', 'null' => true],
			'updated_at'       => ['type' => 'datetime', 'null' => true],
			'deleted_at'       => ['type' => 'datetime', 'null' => true],
		]);

		$this->forge->addKey('id', true);

		$this->forge->createTable('data', true);
	}

	public function down()
	{
		$this->forge->dropTable('data', true);
	}
}
