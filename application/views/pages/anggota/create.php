<main class="content">
	<div class="container-fluid p-0">

		<h1 class="h3 mb-3"><?= $title ?></h1>

		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<!--<h5 class="card-title">Bordered Table</h5>-->
						<a href="<?= site_url('anggota') ?>" class="btn btn-outline-secondary">Kembali</a>
					</div>
					<div class="card-body">
						<form action="<?= current_url() ?>" method="post">
							<div class="mb-3 row">
								<label class="col-form-label col-sm-2 text-sm-right">Nama</label>
								<div class="col-sm-10">
									<input type="text" class="form-control <?= (form_error('nama')) ? 'is-invalid' : '' ?>" placeholder="Nama" name="nama" value="<?= set_value('nama') ?>" autocomplete="off">
								</div>
							</div>
							<div class="mb-3 row">
								<label class="col-form-label col-sm-2 text-sm-right">Alamat</label>
								<div class="col-sm-10">
									<input type="text" class="form-control <?= (form_error('alamat')) ? 'is-invalid' : '' ?>" placeholder="Alamat" name="alamat" value="<?= set_value('alamat') ?>" autocomplete="off">
								</div>
							</div>
							<div class="mb-3 row">
								<label class="col-form-label col-sm-2 text-sm-right">No. HP</label>
								<div class="col-sm-10">
									<input type="text" class="form-control <?= (form_error('no_hp')) ? 'is-invalid' : '' ?>" placeholder="No. HP" name="no_hp" value="<?= set_value('no_hp') ?>" autocomplete="off">
								</div>
							</div>
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
