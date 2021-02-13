<?php


class Migration_Add_akun_table extends CI_Migration
{
	public function up()
	{
		$query = "CREATE TABLE akun(
					id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
					username VARCHAR (50) NOT NULL,
					password TEXT NOT NULL
				); INSERT INTO akun (username, password) VALUES ('admin', '$2y$10$MukWMx.7NCyMMsIqFoNNXO5xtp0X2w18wGvPjyUlJ3.SFtWYBCERy')";
		$this->db->query($query);
	}

	public function down()
	{
		$this->dbforge->drop_table('akun');
	}

}
