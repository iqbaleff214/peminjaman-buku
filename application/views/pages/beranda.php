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
			<div class="col-md-6">
				<?php if ($data['buku']): ?>
					<div class="row">
						<div class="col">
							<div class="card">
								<div class="card-header">
									<h4 class="">Peminjaman</h4>
									<!--<h6 class="card-subtitle text-muted">Default Bootstrap form layout.</h6>-->
								</div>
								<div class="card-body">
									<form action="<?= site_url() ?>" method="post">
										<div class="mb-3 row">
											<label class="col-form-label col-sm-4 text-sm-right">Peminjam</label>
											<div class="col-sm-8">
												<select name="anggota" class="form-control">
													<?php foreach ($data['anggota'] as $item): ?>
														<option value="<?= $item->no_anggota ?>"><?= $item->nama ?></option>
													<?php endforeach; ?>
												</select>
											</div>
										</div>
										<div class="mb-3 row">
											<label class="col-form-label col-sm-4 text-sm-right">Buku</label>
											<div class="col-sm-8">
												<select name="buku"
														class="form-control <?= form_error('buku') ? 'is-invalid' : '' ?>">
													<?php foreach ($data['buku'] as $item): ?>
														<option value="<?= $item->kode_buku ?>"><?= $item->judul ?></option>
													<?php endforeach; ?>
												</select>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-4"></div>
											<div class="col">
												<button type="submit" class="btn btn-outline-primary">Pinjamkan</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				<?php endif ?>
				<div class="row">
					<div class="col-sm-6">
						<div class="card">
							<div class="card-body">
								<h5 class="card-title mb-4">Anggota</h5>
								<h1 class="mt-1 mb-3"><?= $count['anggota'] ?></h1>
								<!--<div class="mb-1">
									<span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -3.65% </span>
									<span class="text-muted">Since last week</span>
								</div>-->
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="card">
							<div class="card-body">
								<h5 class="card-title mb-4">Buku</h5>
								<h1 class="mt-1 mb-3"><?= $count['buku'] ?></h1>
								<!--<div class="mb-1">
									<span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 6.65% </span>
									<span class="text-muted">Since last week</span>
								</div>-->
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="row">
					<div class="col">
						<div class="card flex-fill">
							<div class="card-header">
								<h5 class="card-title mb-0">Kalender</h5>
							</div>
							<div class="card-body d-flex">
								<div class="align-self-center w-100">
									<div class="chart">
										<div id="datetimepicker-dashboard"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php if ($data['dipinjam']): ?>
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h4 class="card-title">Buku yang belum dikembalikan</h4>
						</div>
						<div class="table-responsive">
							<table class="table table-bordered table-hover">
								<thead>
								<tr>
									<th>Peminjam</th>
									<th>Judul Buku</th>
									<th>Tanggal Pinjam</th>
									<th width="100vw">Aksi</th>
								</tr>
								</thead>
								<tbody>
								<?php foreach ($data['dipinjam'] as $item): ?>
									<tr>
										<td><?= $item->nama ?></td>
										<td><?= $item->judul ?></td>
										<td><?= date('d M Y', strtotime($item->tanggal_pinjam)) ?></td>
										<td class="table-action">
											<form action="<?= site_url('kembalikan') ?>" method="post">
											<input type="hidden" name="no_peminjaman" value="<?= $item->no_peminjaman ?>">
											<input type="hidden" name="kode_buku" value="<?= $item->kode_buku ?>">
											<button type="submit" class="btn btn-pill" onclick="return confirm('Anda yakin buku ini telah dikembalikan?')">
												<i class="align-middle"
												   data-feather="corner-up-left"></i>
											</button>
											</form>
										</td>
									</tr>
								<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		<?php endif; ?>
	</div>
</main>

<script>
	document.addEventListener("DOMContentLoaded", function () {
		document.getElementById("datetimepicker-dashboard").flatpickr({
			inline: true,
			prevArrow: "<span class=\"fas fa-chevron-left\" title=\"Previous month\"></span>",
			nextArrow: "<span class=\"fas fa-chevron-right\" title=\"Next month\"></span>",
		});
	});
</script>
