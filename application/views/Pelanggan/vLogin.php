<!-- Hero Section Begin -->
<section class="hero hero-normal">
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<div class="hero__categories">
					<div class="hero__categories__all">
						<i class="fa fa-bars"></i>
						<span>Alat Olah Raga</span>
					</div>

				</div>
			</div>
			<div class="col-lg-9">
				<div class="hero__search">

					<div class="hero__search__phone">
						<div class="hero__search__phone__icon">
							<i class="fa fa-phone"></i>
						</div>
						<div class="hero__search__phone__text">
							<h5>+65 11.188.888</h5>
							<span>support 24/7 time</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Hero Section End -->





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