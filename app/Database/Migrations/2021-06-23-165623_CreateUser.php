<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUser extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_user'	=> [
				'type'	=> 'BIGINT',
				'constraint'	=> '50',
				'unsigned'		=> true,
				'auto_increment'=> true
			],
			'usernmae' => [
				'type'	=> 'VARCHAR',
				'constraint'	=> '100',
			],
			'password' => [
				'type'	=> 'VARCHAR',
				'constraint'	=> '100',
			],
			'created_at' => [
				'type' => null
			]
				
		]); 
		$this->forge->addKey('id_user', true);
		$this->forge->createTable('user');
	}

	public function down()
	{
		$this->forge->dropTable('user');
	}
}
