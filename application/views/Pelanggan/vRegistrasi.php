<!-- Contact Form Begin -->
<div class="contact-form spad">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="contact__form__title">
					<h2>Registrasi</h2>
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
		<form action="<?= base_url('Pelanggan/cLogin/registrasi') ?>" method="POST">
			<div class="row">
				<div class="col-lg-6 col-md-6">
					<?= form_error('nama', '<small class="text-danger">', '</small>') ?>
					<input type="text" name="nama" placeholder="Nama Pelanggan">

				</div>
				<div class="col-lg-6 col-md-6">
					<?= form_error('no_hp', '<small class="text-danger">', '</small>') ?>
					<input type="number" name="no_hp" placeholder="Nomor Telepon">
				</div>
				<hr>
				<div class="col-lg-12 form-group">
					<label class="form-label">Provinsi<sup class="text-danger">*</sup></label>
					<select name="provinsi" class="form-control">

					</select>
				</div>
				<div class="col-lg-12 form-group">
					<label class="form-label">Kota/Kabupaten<sup class="text-danger">*</sup></label>
					<select name="kota" class="form-control">

					</select>
				</div>
				<div class="col-lg-12 form-group">
					<label class="form-label">Kecamatan<sup class="text-danger">*</sup></label>
					<select name="kecamatan" class="form-control">

					</select>
				</div>
				<input type="text" name="id_kec" hidden>
				<div class="col-lg-12 col-md-12">
					<?= form_error('alamat', '<small class="text-danger">', '</small>') ?>
					<label class="form-label">Alamat Lengkap<sup class="text-danger">*</sup></label>
					<input type="text" name="alamat" placeholder="Alamat">
				</div>
				<hr>
				<div class="col-lg-6 col-md-6">
					<?= form_error('username', '<small class="text-danger">', '</small>') ?>
					<input type="text" name="username" placeholder="Username">
					<span class="text-muted">Apakah kamu sudah memiliki akun? <u><a class="text-muted" href="<?= base_url('Pelanggan/cLogin') ?>">Silahkan Login!</a></u></span><br>
				</div>
				<div class="col-lg-6 col-md-6">
					<?= form_error('password', '<small class="text-danger">', '</small>') ?>
					<input type="password" name="password" placeholder="Password">
				</div>
				<div class="col-lg-12 text-center">

					<button type="submit" class="site-btn">REGISTRASI</button>
				</div>
			</div>
		</form>
	</div>
</div>
<!-- Contact Form End -->