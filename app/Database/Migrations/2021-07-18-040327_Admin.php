<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Admin extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'               => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
			'name'             => ['type' => 'varchar', 'constraint' => 255],
			'email'            => ['type' => 'varchar', 'constraint' => 255],
			'username'         => ['type' => 'varchar', 'constraint' => 255],
			'nope'         	   => ['type' => 'varchar', 'constraint' => 255],
			'password'    	   => ['type' => 'varchar', 'constraint' => 255],
			'status'           => ['type' => 'ENUM', 'constraint' =>  ['active', 'deactive'], 'default' => 'active'],
			'role' 			   => ['type' => 'ENUM', 'constraint' => ['admin', 'user'], 'default' => 'admin'],
			'created_at'       => ['type' => 'datetime', 'null' => true],
			'updated_at'       => ['type' => 'datetime', 'null' => true],
			'deleted_at'       => ['type' => 'datetime', 'null' => true],
		]);

		$this->forge->addKey('id', true);
		$this->forge->addUniqueKey('email');
		$this->forge->addUniqueKey('username');

		$this->forge->createTable('admin', true);
	}

	public function down()
	{
		$this->forge->dropTable('admin', true);
	}
}
