<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
	public function run()
	{
		$data = [
			[

				'nama' => 'Administrator',
				'nis' => '0',
				'email' => 'admin@gmail.com',
				'password' => password_hash('pass1234', PASSWORD_BCRYPT),
				'role' => 'admin'
			],
			[
				'nama' => 'Admin',
				'nis' => '1',
				'email' => 'admin2@gmail.com',
				'password' => password_hash('admin', PASSWORD_BCRYPT),
				'role' => 'admin'
			],
			[
				'nama' => 'User',
				'nis' => '2',
				'email' => 'user@gmail.com',
				'password' => password_hash('user', PASSWORD_BCRYPT),
				'role' => 'siswa'
			],
			[
				'nama' => 'Husni Faqih',
				'nis' => '3',
				'email' => 'husni@gmail.com',
				'password' => password_hash('pass1234', PASSWORD_BCRYPT),
				'role' => 'siswa'
			]
		];

		$this->db->table('users')->insertBatch($data);
	}
}
