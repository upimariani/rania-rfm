<!-- Contact Form Begin -->
<div class="contact-form spad">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="contact__form__title">
					<h2>Login</h2>
				</div>
				<?php
				if ($this->session->userdata('success')) {
				?>
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						<strong>Sukses!</strong> <?= $this->session->userdata('success') ?>
					</div>
				<?php
				}
				?>
				<?php
				if ($this->session->userdata('error')) {
				?>
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<strong>Gagal!</strong> <?= $this->session->userdata('error') ?>
					</div>
				<?php
				}
				?>
			</div>
		</div>
		<form action="<?= base_url('Pelanggan/cLogin') ?>" method="POST">
			<div class="row">
				<div class="col-lg-6 col-md-6">
					<?= form_error('username', '<small class="text-danger">', '</small>') ?>
					<input type="text" name="username" placeholder="Username">
					<span class="text-muted">Apakah kamu belum memiliki akun? <u><a class="text-muted" href="<?= base_url('Pelanggan/cLogin/registrasi') ?>">Silahkan registrasi terlebih dahulu!</a></u></span><br>
				</div>
				<div class="col-lg-6 col-md-6">
					<?= form_error('password', '<small class="text-danger">', '</small>') ?>
					<input type="password" name="password" placeholder="Password">
				</div>
				<div class="col-lg-12 text-center">

					<button type="submit" class="site-btn">LOGIN</button>
				</div>
			</div>
		</form>
	</div>
</div>
<!-- Contact Form End -->