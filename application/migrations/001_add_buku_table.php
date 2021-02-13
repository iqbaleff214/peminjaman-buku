<?php

class Migration_Add_buku_table extends CI_Migration
{
	public function up()
	{
		$query = "CREATE TABLE buku(
					kode_buku CHAR (5) NOT NULL PRIMARY KEY,
					judul VARCHAR (150) NOT NULL,
					penulis VARCHAR (50) NOT NULL,
					tahun YEAR NOT NULL,
					penerbit VARCHAR (150) NOT NULL,
					status ENUM('ada', 'dipinjam', 'rusak', 'hilang') NOT NULL
				);";
		$this->db->query($query);
	}

	public function down()
	{
		$this->dbforge->drop_table('buku');
	}
}
