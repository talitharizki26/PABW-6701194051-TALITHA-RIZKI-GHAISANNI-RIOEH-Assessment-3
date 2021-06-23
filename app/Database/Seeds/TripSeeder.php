<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TripSeeder extends Seeder
{
	public function run()
	{
		$data = [
			'tujuan_opentrip' => 'Taman Nasional Bromo',
			'tarif_opentrip' => '250.000',
			'kuota_opentrip' => '40',
			// 'foto_opentrip' => 'bromo.jpg',
		];
		$this->db->table('opentrip')->insert($data);
	}
}
