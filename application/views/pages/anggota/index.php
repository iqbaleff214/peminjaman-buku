<main class="content">
	<div class="container-fluid p-0">

		<h1 class="h3 mb-3"><?= $title ?></h1>

		<?php if ($this->session->flashdata('pesan')): ?>
			<div class="alert alert-primary alert-outline alert-dismissible" role="alert">
				<button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
				<div class="alert-icon">
					<i class="far fa-fw fa-bell"></i>
				</div>
				<div class="alert-message">
					<?= $this->session->flashdata('pesan') ?>
				</div>
			</div>
		<?php endif; ?>

		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<!--<h5 class="card-title">Bordered Table</h5>-->
						<a href="<?= site_url('anggota/create') ?>" class="btn btn-outline-primary">Tambah</a>
					</div>
					<?php if ($data): ?>
					<div class="table-responsive">
						<table class="table table-bordered table-hover">
							<thead>
							<tr>
								<th>No Anggota</th>
								<th>Nama</th>
								<th>Alamat</th>
								<th>No HP</th>
								<th width="100vw">Aksi</th>
							</tr>
							</thead>
							<tbody>
							<?php foreach ($data as $item): ?>
								<tr>
									<td><?= $item->no_anggota ?></td>
									<td><?= $item->nama ?></td>
									<td><?= $item->alamat ?></td>
									<td><?= $item->no_hp ?></td>
									<td class="table-action">
										<a href="<?= site_url('anggota/' . $item->no_anggota) ?>"><i
												class="align-middle" data-feather="eye"></i></a>
										<a href="<?= site_url('anggota/' . $item->no_anggota) . '/edit' ?>"><i
												class="align-middle" data-feather="edit-2"></i></a>
										<a href="<?= site_url('anggota/' . $item->no_anggota) . '/delete' ?>"
										   onclick="return confirm('yakin ingin menghapus data ')"><i
												class="align-middle" data-feather="trash"></i></a>
									</td>
								</tr>
							<?php endforeach; ?>
							</tbody>
						</table>
					</div>
					<?php else: ?>
						<div class="p-3">
							<div class="alert alert-primary alert-outline alert-dismissible" role="alert">
								<button type="button" class="btn-close" data-dismiss="alert"
										aria-label="Close"></button>
								<div class="alert-message">
									<h4 class="alert-heading">Maaf!</h4>
									<p>Data <?= $title ?> masih kosong! Silakan tambah data dengan menekan tombol di atas :)</p>
								</div>
							</div>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>

	</div>
</main>
