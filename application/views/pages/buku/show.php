<main class="content">
	<div class="container-fluid p-0">

		<h1 class="h3 mb-3"><?= $title ?></h1>

		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<a href="<?= site_url('buku') ?>" class="btn btn-outline-secondary">Kembali</a>
					</div>
					<div class="card-body">

						<div class="row">
							<div class="col-md-6 col-sm-6 font-weight-bold">
								<p>Kode Buku</p>
							</div>
							<div class="col-md-6 col-sm-6 text-md-right text-sm-right">
								<p><?= $data->kode_buku ?></p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-6 font-weight-bold">
								<p>Judul</p>
							</div>
							<div class="col-md-6 col-sm-6 text-md-right text-sm-right">
								<p><?= $data->judul ?></p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-6 font-weight-bold">
								<p>Penulis</p>
							</div>
							<div class="col-md-6 col-sm-6 text-md-right text-sm-right">
								<p><?= $data->penulis ?></p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-6 font-weight-bold">
								<p>Penerbit</p>
							</div>
							<div class="col-md-6 col-sm-6 text-md-right text-sm-right">
								<p><?= $data->penerbit ?></p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-6 font-weight-bold">
								<p>Tahun diterbitkan</p>
							</div>
							<div class="col-md-6 col-sm-6 text-md-right text-sm-right">
								<p><?= $data->tahun ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</main>
