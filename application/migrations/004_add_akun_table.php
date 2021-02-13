<?php


class Migration_Add_akun_table extends CI_Migration
{
	public function up()
	{
		$query = "CREATE TABLE akun(
					id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
					username VARCHAR (50) NOT NULL,
					password TEXT NOT NULL
				);";
		$this->db->query($query);
	}

	public function down()
	{
		$this->dbforge->drop_table('akun');
	}

}
