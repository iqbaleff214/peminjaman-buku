<main class="content">
	<div class="container-fluid p-0">

		<h1 class="h3 mb-3"><?= $title ?></h1>

		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<!--<h5 class="card-title">Bordered Table</h5>-->
						<a href="<?= site_url('buku') ?>" class="btn btn-outline-secondary">Kembali</a>
					</div>
					<div class="card-body">
						<form action="<?= current_url() ?>" method="post">
							<div class="mb-3 row">
								<label class="col-form-label col-sm-2 text-sm-right">Kode Buku</label>
								<div class="col-sm-10">
									<input type="text" class="form-control <?= (form_error('kode_buku')) ? 'is-invalid' : '' ?>" placeholder="Kode Buku" name="kode_buku" value="<?= set_value('kode_buku') ?>" autocomplete="off">
								</div>
							</div>
							<div class="mb-3 row">
								<label class="col-form-label col-sm-2 text-sm-right">Judul</label>
								<div class="col-sm-10">
									<input type="text" class="form-control <?= (form_error('judul')) ? 'is-invalid' : '' ?>" placeholder="Judul" name="judul" value="<?= set_value('judul') ?>" autocomplete="off">
								</div>
							</div>
							<div class="mb-3 row">
								<label class="col-form-label col-sm-2 text-sm-right">Penulis</label>
								<div class="col-sm-10">
									<input type="text" class="form-control <?= (form_error('penulis')) ? 'is-invalid' : '' ?>" placeholder="Penulis" name="penulis" value="<?= set_value('penulis') ?>" autocomplete="off">
								</div>
							</div>
							<div class="mb-3 row">
								<label class="col-form-label col-sm-2 text-sm-right">Penerbit</label>
								<div class="col-sm-10">
									<input type="text" class="form-control <?= (form_error('penerbit')) ? 'is-invalid' : '' ?>" placeholder="Penerbit" name="penerbit" value="<?= set_value('penerbit') ?>" autocomplete="off">
								</div>
							</div>
							<div class="mb-3 row">
								<label class="col-form-label col-sm-2 text-sm-right">Tahun terbit</label>
								<div class="col-sm-10">
									<input type="year" class="form-control <?= (form_error('tahun')) ? 'is-invalid' : '' ?>" placeholder="contoh: 2012" name="tahun" value="<?= set_value('tahun') ?>" autocomplete="off">
								</div>
							</div>
							<fieldset class="mb-3">
								<div class="row">
									<label class="col-form-label col-sm-2 text-sm-right pt-sm-0">Status</label>
									<div class="col-sm-10">
										<label class="form-check">
											<input name="status" value="ada" type="radio" class="form-check-input" checked>
											<span class="form-check-label">Tersedia</span>
										</label>
										<label class="form-check">
											<input name="status" value="dipinjam" type="radio" class="form-check-input">
											<span class="form-check-label">Dipinjam</span>
										</label>
										<label class="form-check">
											<input name="status" value="rusak" type="radio" class="form-check-input">
											<span class="form-check-label">Rusak/Robek</span>
										</label>
										<label class="form-check">
											<input name="status" value="hilang" type="radio" class="form-check-input">
											<span class="form-check-label">Hilang</span>
										</label>
									</div>
								</div>
							</fieldset>
							<div class="mb-3 row">
								<div class="col-sm-10 ml-sm-auto">
									<button type="submit" class="btn btn-primary">Simpan</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

	</div>
</main>
