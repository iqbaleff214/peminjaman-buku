<main class="d-flex w-100">
	<div class="container d-flex flex-column">
		<div class="row vh-100">
			<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
				<div class="d-table-cell align-middle">

					<div class="text-center mt-4">
						<h1 class="h2">Selamat datang!</h1>
						<p class="lead">
							Silakan masuk untuk melanjutkan
						</p>
					</div>

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

					<div class="card">
						<div class="card-body">
							<div class="m-sm-4">
								<div class="text-center">
									<!--<img src="img/avatars/avatar.jpg" alt="Charles Hall"
										 class="img-fluid rounded-circle" width="132" height="132"/>-->
								</div>
								<form action="<?= current_url() ?>" method="post">
									<div class="mb-3">
										<!--<label class="form-label">Username</label>-->
										<input class="form-control form-control-lg <?= (form_error('username')) ? 'is-invalid' : '' ?>" type="text" name="username"
											   placeholder="Masukkan username"/>
									</div>
									<div class="mb-3">
										<!--<label class="form-label">Password</label>-->
										<input class="form-control form-control-lg <?= (form_error('password')) ? 'is-invalid' : '' ?>" type="password" name="password"
											   placeholder="Masukkan password"/>
									</div>
									<div class="text-md-right mt-3">
<!--										<a href="index.html" class="btn btn-lg btn-outline-primary">Sign in</a>-->
										 <button type="submit" class="btn btn-lg btn-outline-primary">Masuk</button>
									</div>
								</form>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</main>
