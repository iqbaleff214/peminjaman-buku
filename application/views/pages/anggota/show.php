<main class="content">
	<div class="container-fluid p-0">

		<h1 class="h3 mb-3"><?= $title ?></h1>

		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<a href="<?= site_url('anggota') ?>" class="btn btn-outline-secondary">Kembali</a>
					</div>
					<div class="card-body">

						<div class="row">
							<div class="col-md-6 col-sm-6 font-weight-bold">
								<p>No. Anggota</p>
							</div>
							<div class="col-md-6 col-sm-6 text-md-right text-sm-right">
								<p><?= $data->no_anggota ?></p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-6 font-weight-bold">
								<p>Nama</p>
							</div>
							<div class="col-md-6 col-sm-6 text-md-right text-sm-right">
								<p><?= $data->nama ?></p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-6 font-weight-bold">
								<p>Alamat</p>
							</div>
							<div class="col-md-6 col-sm-6 text-md-right text-sm-right">
								<p><?= $data->alamat ?></p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-6 font-weight-bold">
								<p>No. HP</p>
							</div>
							<div class="col-md-6 col-sm-6 text-md-right text-sm-right">
								<p><?= $data->no_hp ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</main>
