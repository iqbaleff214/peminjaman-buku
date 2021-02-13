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
					<div class="card-header no-print">
						<!--<h5 class="card-title">Bordered Table</h5>-->
						<button onclick="window.print()" class="btn btn-outline-primary">Cetak</button>
					</div>
					<?php if ($data): ?>
						<div class="table-responsive">
							<table class="table table-bordered table-hover">
								<thead class="text-md-center">
								<tr>
									<th rowspan="2" style="vertical-align:middle;text-align:center;">No.</th>
									<th colspan="2">Tanggal</th>
									<th rowspan="2" style="vertical-align: middle">Peminjam</th>
									<th rowspan="2" style="vertical-align: middle">Buku</th>
									<th rowspan="2" style="vertical-align: middle">Status Buku</th>
								</tr>
								<tr>
									<th>Peminjaman</th>
									<th>Pengembalian</th>
								</tr>
								</thead>
								<tbody>
								<?php foreach ($data as $item): ?>
									<tr>
										<td><?= $item->no_peminjaman ?></td>
										<td><?= $item->tanggal_pinjam ?></td>
										<td><?= $item->tanggal_kembali ?></td>
										<td><?= $item->nama ?></td>
										<td><?= $item->judul ?></td>
										<td><?= $item->status ?></td>
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
									<p>Data <?= $title ?> masih kosong!</p>
								</div>
							</div>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>

	</div>
</main>
