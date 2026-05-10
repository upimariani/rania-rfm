<!-- Product Section Begin -->
<section class="product spad">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<?php
				if ($this->session->userdata('success')) {
				?>
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						<strong>Sukses!</strong> <?= $this->session->userdata('success') ?>
					</div>
				<?php
				}
				?>
			</div>
			<div class="col-lg-3 col-md-5">
				<div class="sidebar">
					<div class="sidebar__item">
						<h4>Produk</h4>
						<ul>
							<?php
							foreach ($produk as $key => $value) {
							?>
								<li><a href="#"><?= $value->nama_produk ?></a></li>
							<?php
							}
							?>


						</ul>
					</div>

				</div>
			</div>
			<div class="col-lg-9 col-md-7">


				<div class="row">
					<?php
					foreach ($produk as $key => $value) {
						$dt_pelanggan = $this->db->query("SELECT*FROM pelanggan WHERE id_pelanggan='" . $this->session->userdata('id_pelanggan') . "'")->row();
						$lm = $dt_pelanggan->level_member;
						if ($lm == '1') {
							$disc = 0;
						} else if ($lm == '2') {
							$disc = 2;
						} else if ($lm == '3') {
							$disc = 4;
						} else if ($lm == '4') {
							$disc = 5;
						} else if ($lm == '5') {
							$disc = 7;
						}

						$harga = $value->harga - (($disc / 100) * $value->harga);
					?>

						<div class="col-lg-4 col-md-6 col-sm-6">
							<div class="product__item">
								<div class="product__item__pic set-bg" data-setbg="<?= base_url('asset/gambar/' . $value->foto) ?>">

									<?php
									if ($disc != 0) {
									?>
										<div class="badge badge-danger">
											<?= $disc ?>%</div>
									<?php
									}
									?>
									<ul class="product__item__pic__hover">

										<li><a href="<?= base_url('Pelanggan/cCart/addtocart/' . $value->id_produk . '/' . $harga) ?>"><i class="fa fa-shopping-cart"></i></a></li>
									</ul>
								</div>
								<div class="product__item__text">
									<h6><a href="#"><?= $value->nama_produk ?></a></h6>
									<?php
									if ($lm != '1') {
									?>
										<h5>Rp. <?= number_format($harga) ?> <del> Rp. <?= number_format($value->harga)  ?></del></h5>
									<?php
									} else {
									?>
										<h5>Rp. <?= number_format($harga) ?></h5>
									<?php
									}
									?>

								</div>
							</div>
						</div>
					<?php
					}
					?>


				</div>

			</div>
		</div>
	</div>
</section>
<!-- Product Section End -->