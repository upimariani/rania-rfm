<!-- Checkout Section Begin -->
<section class="checkout spad">
	<div class="container">

		<div class="checkout__form">
			<h4>Billing Details</h4>
			<form action="<?= base_url('Pelanggan/cCheckout/order') ?>" method="POST">
				<div class="row">
					<div class="col-lg-8 col-md-6">
						<div class="checkout__input">
							<p>Expedisi<span>*</span></p>
							<select name="expedisi" class="form-control" required>

							</select>
						</div>
						<div class="checkout__input">
							<p>Paket<span>*</span></p>
							<select name="paket" class="form-control" required>

							</select>
						</div>
						<?php
						$pelanggan = $this->db->query("SELECT * FROM `pelanggan` WHERE id_pelanggan='" . $this->session->userdata('id_pelanggan') . "'")->row();
						?>
						<div class="checkout__input">
							<p>Alamat Lengkap<span>*</span></p>
							<input type="text" value="<?= $pelanggan->alamat ?>" name="alamat" placeholder="Masukkan alamat lengkap anda.">
						</div>
						<a href="<?= base_url('Pelanggan/cCheckout/alamat_lain') ?>" class="site-btn">Alamat Lain</a>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="checkout__order">
							<h4>Orderan</h4>
							<div class="checkout__order__products">Produk <span>Total</span></div>
							<ul>
								<?php
								foreach ($this->cart->contents() as $key => $value) {
								?>
									<li><?= $value['name'] ?><span>Rp. <?= number_format($value['price'] * $value['qty']) ?></span></li>
								<?php
								}
								?>

							</ul>
							<div class="checkout__order__subtotal">Subtotal <span>Rp. <?= number_format($this->cart->total()) ?></span></div>
							<div class="checkout__order__subtotal">Ongkos Kirim <span id="ongkir"></span></div>
							<div class="checkout__order__total">Total <span class="ttl_bayar"></span></div>
							<input type="text" name="ongkir" hidden>
							<input type="text" name="total_pembayaran" hidden>
							<input type="text" name="ongkir" hidden>
							<button type="submit" class="site-btn">ORDER</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>
<!-- Checkout Section End -->
<!-- Footer Section Begin -->