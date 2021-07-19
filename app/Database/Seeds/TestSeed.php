<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;
use DateTime;
use Faker\Factory;

class TestSeed extends Seeder
{
	public function run()
	{
		$fk = Factory::create('id_ID');

		for ($i = 0; $i <= 100; $i++) {
			$data = [
				'nama' => $fk->name,
				'email'    => $fk->email,
				'alamat'    => $fk->address,
				'created_at' => Time::createFromTimestamp($fk->unixTime()),
				'updated_at' => Time::createFromTimestamp($fk->unixTime()),
			];
			$this->db->table('datas')->insert($data);
		}



		// Simple Queries
		// $this->db->query("INSERT INTO datas (nama, email, alamat, created_at, updated_at) VALUES(:nama:, :email:, :alamat:, :created_at:, :updated_at:)", $data);

		// Using Query Builder
		//insert satu data
		// $this->db->table('datas')->insertBatch($data); //insert banyak data
	}
}
