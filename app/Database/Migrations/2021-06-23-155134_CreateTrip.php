<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTrip extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_opentrip'	=> [
				'type'	=> 'BIGINT',
				'constraint'	=> '50',
				'unsigned'		=> true,
				'auto_increment'=> true
			],
			'tujuan_opentrip' => [
				'type'	=> 'VARCHAR',
				'constraint'	=> '100',
			],
			'tarif_opentrip' => [
				'type'	=> 'VARCHAR',
				'constraint'	=> '100',
			],
			'kuota_opentrip' => [
				'type'	=> 'VARCHAR',
				'constraint'	=> '100',
			],
		]);
		$this->forge->addKey('id_opentrip', true);
		$this->forge->createTable('opentrip');
	}

	public function down()
	{
		$this->forge->dropTable('opentrip');
	}
}
