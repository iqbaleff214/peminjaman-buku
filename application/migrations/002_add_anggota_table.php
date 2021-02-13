<?php


class Migration_Add_anggota_table extends CI_Migration
{
	public function up()
	{
		$query = "CREATE TABLE anggota(
					no_anggota INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
					nama VARCHAR (100) NOT NULL,
					alamat VARCHAR (150) NOT NULL,
					no_hp VARCHAR (15) NOT NULL
				);";
		$this->db->query($query);
	}

	public function down()
	{
		$this->dbforge->drop_table('anggota');
	}
}
