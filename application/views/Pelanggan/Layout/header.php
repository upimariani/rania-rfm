<!DOCTYPE html>
<html lang="zxx">

<head>
	<meta charset="UTF-8">
	<meta name="description" content="Ogani Template">
	<meta name="keywords" content="Ogani, unica, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>RANIA SPORT - RFM</title>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Css Styles -->
	<link rel="stylesheet" href="<?= base_url('asset/ogani-master/') ?>css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="<?= base_url('asset/ogani-master/') ?>css/font-awesome.min.css" type="text/css">
	<link rel="stylesheet" href="<?= base_url('asset/ogani-master/') ?>css/elegant-icons.css" type="text/css">
	<!-- <link rel="stylesheet" href="<?= base_url('asset/ogani-master/') ?>css/nice-select.css" type="text/css"> -->
	<link rel="stylesheet" href="<?= base_url('asset/ogani-master/') ?>css/jquery-ui.min.css" type="text/css">
	<link rel="stylesheet" href="<?= base_url('asset/ogani-master/') ?>css/owl.carousel.min.css" type="text/css">
	<link rel="stylesheet" href="<?= base_url('asset/ogani-master/') ?>css/slicknav.min.css" type="text/css">
	<link rel="stylesheet" href="<?= base_url('asset/ogani-master/') ?>css/style.css" type="text/css">
	<style>
		.chat-card {
			max-width: 900px;
			margin: 30px auto;
			border-radius: 15px;
			overflow: hidden;
		}

		.chat-header {
			background: #7fad39;
			color: #fff;
			padding: 15px;
		}

		.chat-body {
			height: 500px;
			overflow-y: auto;
			background: #e9ecef;
			padding: 20px;
		}

		.message {
			display: flex;
			margin-bottom: 15px;
		}

		.message.customer {
			justify-content: flex-end;
		}

		.bubble {
			display: inline-block;
			max-width: 70%;
			min-width: 120px;
			padding: 12px 16px;
			border-radius: 15px;
			word-break: break-word;
			white-space: normal;
		}

		.admin .bubble {
			background: #fff;
			border: 1px solid #ddd;
		}

		.customer .bubble {
			background: #b4b350;
			color: #fff;
		}

		.time {
			font-size: 12px;
			color: #888;
			margin-top: 5px;
		}

		.chat-footer {
			background: #fff;
			padding: 15px;
			border-top: 1px solid #ddd;
		}

		textarea {
			resize: none;
		}

		.avatar {
			width: 40px;
			height: 40px;
			border-radius: 50%;
			background: #198754;
			color: white;
			display: flex;
			align-items: center;
			justify-content: center;
			font-weight: bold;
			margin-right: 10px;
		}

		.customer .avatar {
			display: none;
		}
	</style>

</head>

<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header Section Begin -->
	<header class="header">
		<div class="header__top">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-md-6">
						<div class="header__top__left">
							<ul>
								<?php
								if ($this->session->userdata('id_pelanggan')) {
									$dt_pelanggan = $this->db->query("SELECT*FROM pelanggan WHERE id_pelanggan='" . $this->session->userdata('id_pelanggan') . "'")->row();
									$lm = $dt_pelanggan->level_member;
									if ($lm == '1') {
										$lvm = 'Lost Customer';
										$dis = '0';
									} else if ($lm == '2') {
										$lvm = 'At Risk Customer';
										$dis = '2';
									} else if ($lm == '3') {
										$lvm = 'Potensial Customer';
										$dis = '4';
									} else if ($lm == '4') {
										$lvm = 'Loyal Customer';
										$dis = '5';
									} else if ($lm == '5') {
										$lvm = 'Champion Customer';
										$dis = '7';
									} else if ($lm == '0') {
										$lvm = 'New Customer';
										$dis = '0';
									} ?>
									<li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
									<li>Selamat Datang, <strong><?= $dt_pelanggan->nama_pelanggan ?></strong> Level Member Anda <strong><?= $lvm ?></strong> Diskon Produk sebesar <strong><?= $dis ?>%</strong></li>
								<?php
								}


								?>

							</ul>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="header__top__right">
							<div class="header__top__right__social">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-linkedin"></i></a>
								<a href="#"><i class="fa fa-pinterest-p"></i></a>
							</div>
							<div class="header__top__right__auth">
								<?php
								if ($this->session->userdata('id_pelanggan')) {
								?>
									<a href="<?= base_url('Pelanggan/cLogin/logout') ?>"><i class="fa fa-user"></i> Logout</a>
								<?php
								} else {
								?>
									<a href="<?= base_url('Pelanggan/cLogin') ?>"><i class="fa fa-user"></i> Login</a>
								<?php
								}
								?>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<div class="header__logo">
						<a href="./index.html"><img style="width: 180px;" src="<?= base_url('asset/rania.png') ?>" alt=""></a>

					</div>
				</div>
				<div class="col-lg-6">
					<nav class="header__menu">
						<ul>
							<li <?php if ($this->uri->segment(1) == 'Pelanggan' && $this->uri->segment(2) == 'cHome') {
									echo 'class="active"';
								}  ?>><a href="<?= base_url('Pelanggan/cHome') ?>">Home</a></li>
							<?php
							if ($this->session->userdata('id_pelanggan')) {
							?>
								<li <?php if ($this->uri->segment(1) == 'Pelanggan' && $this->uri->segment(2) == 'cKatalog') {
										echo 'class="active"';
									}  ?>><a href="<?= base_url('Pelanggan/cKatalog') ?>">Produk</a></li>

								<li <?php if ($this->uri->segment(1) == 'Pelanggan' && $this->uri->segment(2) == 'cPesananSaya') {
										echo 'class="active"';
									}  ?>><a href="<?= base_url('Pelanggan/cPesananSaya') ?>">Pesanan Saya</a></li>
								<li <?php if ($this->uri->segment(1) == 'Pelanggan' && $this->uri->segment(2) == 'cChat') {
										echo 'class="active"';
									}  ?>><a href="<?= base_url('Pelanggan/cChat') ?>">Chat</a></li>
							<?php
							}
							?>

						</ul>
					</nav>
				</div>
				<div class="col-lg-3">
					<?php
					if ($this->session->userdata('id_pelanggan')) {
					?>
						<div class="header__cart">
							<ul>
								<?php
								$qty = 0;
								foreach ($this->cart->contents() as $key => $value) {
									$qty += $value['qty'];
								}
								if ($qty != '0') {
								?>
									<li><a href="<?= base_url('Pelanggan/cCart') ?>"><i class="fa fa-shopping-bag"></i> <span><?= $qty ?></span></a></li>
							</ul>
							<div class="header__cart__price">item: <span>Rp. <?= number_format($this->cart->total()) ?></span>
							</div>
					<?php
								}
							}
					?>


						</div>
				</div>
			</div>
			<div class="humberger__open">
				<i class="fa fa-bars"></i>
			</div>
		</div>
	</header>
	<!-- Header Section End -->
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
								<span>layanan 24/7 jam</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Hero Section End -->
