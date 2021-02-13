# Sistem Peminjaman Buku

_Bismillah_,

## Prasyarat

Pastikan di perangkat kita telah terinstal [MySQL](https://www.mysql.com/downloads/) atau [MariaDB](https://downloads.mariadb.org/) agar dapat mengakses _database_. Gunakan juga _web server_ seperti [Apache HTTP Server](https://httpd.apache.org/download.cgi) atau [NginX](http://nginx.org/en/download.html).
Opsi lain, kita dapat menginstal [XAMPP](https://www.apachefriends.org/download.html) atau [Laragon](https://laragon.org/download/index.html) (khusus _Windows_) yang hadir dalam paket _bundle_ untuk _web server_ dan DBMS (_Database Management System_).

Selain itu, kita juga memerlukan [Composer](https://getcomposer.org/download/) untuk menginstal _library_ yang dibutuhkan. Disarankan juga untuk menginstall [Git](https://git-scm.com/downloads).

## Persiapan

Siapkan _database_ dengan nama `fs-pinjam-buku`.

## Pemasangan

Ada dua cara yang bisa dilakukan untuk menyalin aplikasi web ini ke perangkat kita:

1.  Dengan Git

	-   Buka `terminal`, `bash`, `cmd`, atau `git bash`
	-   Pastikan kita berada pada direktori yang kita inginkan (_folder_ _htdocs_ pada XAMPP atau _folder_ _www_ pada Laragon) untuk menyimpan aplikasi web ini
	-   Jalankan perintah:

		```bash
		git clone git@github.com:iqbaleff214/peminjaman-buku.git
		```

	-   Aplikasi web telah terpasang di perangkat

2.  _Download_ ZIP

	-   Kita juga dapat mengunduh _file_ yang berupa zip, dengan menekan tombol Code berwarna hijau kemudian tekan _`Download ZIP`_ atau dapat juga dengan mengunduhnya pada [tautan ini](https://github.com/amangkodingdotid/simpeg-v1/archive/main.zip).
	-   _Extract file_ zip yang telah diunduh di _root folder localhost_ (_folder_ _htdocs_ pada XAMPP atau _folder_ _www_ pada Laragon).

## Konfigurasi

Kita dapat membuka aplikasi web terlebih dahulu menggunakan editor kesayangan kita masing-masing, entah itu [Visual Studio Code](https://code.visualstudio.com/download), [Sublime Text](https://www.sublimetext.com/3), atau bahkan [PhpStorm](https://www.jetbrains.com/phpstorm/download/) yang berbayar.

-   Buka `terminal`, `bash`, `cmd`, atau `git bash` dan pastikan kita telah berada di dalam _folder_ atau direktori aplikasi web ini
-   Salin _file_ `.env.example` dan ganti namanya menjadi `.env` atau gunakan perintah berikut:

	```bash
	cp .env.example .env
	```
- Buka _file_ `.env` dan sesuaikan url, _host_, _password_, serta nama _database_ jika diperlukan.

-   Untuk menerapkan skema _database_ pada sistem, lakukan migrasi dengan menjalankan perintah berikut:

	```bash
	php index.php migrate version 4
	```
	Maka secara otomatis skema _database_ akan terbentuk.

-   Untuk dapat menggunakan _Blade template engine_ yang terdapat pada aplikasi ini, perlukan dilakukan instalasi terlebih dahulu dengan menggunakan `Composer`. Jalankan perintah berikut:

	```bash
	composer install
	```


## Menjalankan

-   Untuk menjalankan aplikasi web ini, cukup membuka _browser_ dan ketikkan url `http://localhost/pinjam-buku-ci/` atau sesuaikan dengan tempat menyimpan aplikasi web ini. Pastikan _web server_ dan _database management system_ telah diaktifkan.

## Demonstrasi dan Tangkapan Layar

Tautan: [demo](http://amangkoding-peminjaman-buku.herokuapp.com/)

- 	Halaman login
	 ![Halaman Login](http://drive.google.com/uc?export=view&id=1mW9M6SACYTmLdhWMadtIJ4Rtag3crifP)
- 	Halaman Dashboard
	 ![Halaman Dashboard](http://drive.google.com/uc?export=view&id=1UQ1JrmaFXV1pDbIRnXKAiLcL2cFLvpsV)

- 	Halaman Anggota
	 ![Halaman Anggota](http://drive.google.com/uc?export=view&id=12Tqyasax4KuI5ZoOhi6MktzdVp4wA33w)
	 ![Halaman Anggota](http://drive.google.com/uc?export=view&id=1fCHZYivYjh1kIGi-w0AkH5OhXS7xWX6Y)

- 	Halaman Buku
	 ![Halaman Buku](http://drive.google.com/uc?export=view&id=1Uvie7UTj_W2IThpL6lWRBim5Jcq3dMwn)
	 ![Halaman Buku](http://drive.google.com/uc?export=view&id=1WPDahuhNJv3rnn0819OcnMb060nk3pnx)

- 	Halaman Laporan
	 ![Halaman Laporan](http://drive.google.com/uc?export=view&id=1o2_7-dyKnY2gkEYaf5O2ztFq27Tk1-RI)

## Penutup

_Alhamdulillah_, aplikasi web ini tentunya memiliki banyak kekurangan dan masih bisa ditingkatkan lagi. Harapannya aplikasi web ini dapat menjadi bahan referensi dan dikembangkan menjadi lebih baik kedepannya.


## _Contributor_
-  [M. Iqbal Effendi](http://github.com/iqbaleff214)
