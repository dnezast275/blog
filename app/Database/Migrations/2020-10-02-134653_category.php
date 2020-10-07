<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Category extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'category_name'	=> [
				'type'			=> 'VARCHAR',
				'constrant'		=> 255
			],
			'category_slug'	=> [
				'type'			=> 'VARCHAR',
				'constrant'		=> 255
			],
			'active'	=> [
				'type'			=> 'INT',
				'constrant'		=> 1
			],
			'created_at'	=> [
				'type'			=> 'DATETIME',
				'null'			=> TRUE
			],
			'updated_at'	=> [
				'type'			=> 'DATETIME',
				'null'			=> TRUE
			]
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('category');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('category');
	}
}
