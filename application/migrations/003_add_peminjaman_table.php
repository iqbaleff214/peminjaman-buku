<?php


class Migration_Add_peminjaman_table extends CI_Migration
{
	public function up()
	{
		$query = "CREATE TABLE peminjaman(
					no_peminjaman INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
					anggota INT NOT NULL,
					buku CHAR (5) NOT NULL,
					tanggal_pinjam DATE NOT NULL,
					tanggal_kembali DATE NULL,					
					CONSTRAINT FK_ANGGOTA FOREIGN KEY (anggota) REFERENCES anggota(no_anggota),
					CONSTRAINT FK_BUKU FOREIGN KEY (buku) REFERENCES buku(kode_buku)
				);";
		$this->db->query($query);
	}

	public function down()
	{
		$this->dbforge->drop_table('peminjaman');
	}
}
