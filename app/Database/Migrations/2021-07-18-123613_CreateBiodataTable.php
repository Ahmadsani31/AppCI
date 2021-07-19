<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateBiodataTable extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'               => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
			'nik'              => ['type' => 'varchar', 'constraint' => 255],
			'f_name'           => ['type' => 'varchar', 'constraint' => 255],
			'l_name'           => ['type' => 'varchar', 'constraint' => 255],
			'email'            => ['type' => 'varchar', 'constraint' => 255],
			'phone'            => ['type' => 'varchar', 'constraint' => 255],
			'tempat'           => ['type' => 'varchar', 'constraint' => 255],
			'lahir'            => ['type' => 'varchar', 'constraint' => 255],
			'gender'    	   => ['type' => 'varchar', 'constraint' => 255],
			'fakultas'         => ['type' => 'varchar', 'constraint' => 255],
			'alamat' 		   => ['type' => 'text'],
			'avatar' 		   => ['type' => 'text'],
			'created_at'       => ['type' => 'datetime', 'null' => true],
			'updated_at'       => ['type' => 'datetime', 'null' => true],
			'deleted_at'       => ['type' => 'datetime', 'null' => true],
		]);

		$this->forge->addKey('id', true);
		$this->forge->addUniqueKey('nik');

		$this->forge->createTable('biodata', true);
	}

	public function down()
	{
		$this->forge->dropTable('biodata', true);
	}
}
