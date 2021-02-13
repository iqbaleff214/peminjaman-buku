<body>
<div class="wrapper">
	<nav id="sidebar" class="sidebar no-print">
		<div class="sidebar-content js-simplebar">
			<a class="sidebar-brand" href="<?= site_url() ?>">
				<span class="align-middle">PINJAM Buku</span>
			</a>

			<ul class="sidebar-nav">

				<li class="sidebar-item <?= active_sidebar('beranda', $sidebar) ?>">
					<a class="sidebar-link" href="<?= site_url() ?>">
						<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Beranda </span>
					</a>
				</li>

				<li class="sidebar-item <?= active_sidebar('induk', $sidebar) ?>">
					<a href="#auth" data-toggle="collapse" class="sidebar-link collapsed">
						<i class="align-middle" data-feather="database"></i> <span
							class="align-middle">Data Induk</span>
					</a>
					<ul id="auth" class="sidebar-dropdown list-unstyled collapse <?= active_sidebar('induk', $sidebar) ?>" data-parent="#sidebar">
						<li class="sidebar-item <?= active_sidebar('anggota', $sidebar) ?>"><a class="sidebar-link" href="<?= site_url('anggota') ?>">Anggota</a></li>
						<li class="sidebar-item <?= active_sidebar('buku', $sidebar) ?>"><a class="sidebar-link" href="<?= site_url('buku') ?>">Buku</a></li>
					</ul>
				</li>

				<li class="sidebar-item <?= active_sidebar('laporan', $sidebar) ?>">
					<a class="sidebar-link" href="<?= site_url('laporan') ?>">
						<i class="align-middle" data-feather="book"></i> <span class="align-middle">Laporan</span>
					</a>
				</li>

			</ul>

		</div>
	</nav>

	<div class="main">
		<nav class="navbar navbar-expand navbar-light navbar-bg no-print">
			<a class="sidebar-toggle d-flex">
				<i class="hamburger align-self-center"></i>
			</a>

			<form class="d-none d-sm-inline-block">
				<div class="input-group input-group-navbar">
					<input type="text" class="form-control" placeholder="Search…" aria-label="Search">
					<button class="btn" type="button">
						<i class="align-middle" data-feather="search"></i>
					</button>
				</div>
			</form>

			<div class="navbar-collapse collapse">
				<ul class="navbar-nav navbar-align">
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-toggle="dropdown">
							<span class="text-dark"><?= $_SESSION['login'] ?></span>
						</a>
						<div class="dropdown-menu dropdown-menu-right">
							<a class="dropdown-item" href="<?= site_url('logout') ?>" onclick="return confirm('Yakin ingin keluar?')">Log out</a>
						</div>
					</li>
				</ul>
			</div>
		</nav>
