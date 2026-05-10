<!-- Shoping Cart Section Begin -->
<section class="shoping-cart spad">
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
				<?php
				if ($this->session->userdata('error')) {
				?>
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<strong>Gagal!</strong> <?= $this->session->userdata('error') ?>
					</div>
				<?php
				}
				?>
				<div class="shoping__cart__table">
					<table>
						<thead>
							<tr>
								<th scope="col">Produk</th>
								<th scope="col">Harga</th>
								<th scope="col">Jumlah</th>
								<th scope="col">Total</th>
								<th scope="col">Hapus</th>
							</tr>
						</thead>
						<tbody>
							<form action="<?= base_url('Pelanggan/cCart/update_cart') ?>" method="POST">
								<?php
								$i = 1;
								foreach ($this->cart->contents() as $key => $value) {
								?>
									<tr>
										<th>
											<?= $value['name'] ?><br> <small>Stok. <?= $value['stok'] ?></small>
										</th>
										<td>
											Rp. <?= number_format($value['price']) ?>
										</td>
										<td>
											<div class="input-group quantity py-4" style="width: 100px;">

												x <input type="number" name="qty<?= $i++ ?>" class="form-control form-control-sm text-center border-0" value="<?= $value['qty'] ?>">

											</div>
										</td>
										<td>
											Rp. <?= number_format($value['qty'] * $value['price']) ?>
										</td>
										<td class="py-4">
											<a href="<?= base_url('Pelanggan/cCart/cart_delete/' . $value['rowid']) ?>" class="btn btn-md rounded-circle bg-light border">
												<i class="fa fa-times text-danger"></i>
											</a>
										</td>
									</tr>
								<?php
								}
								?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="shoping__cart__btns">
					<a href="<?= base_url('Pelanggan/cKatalog') ?>" class="primary-btn cart-btn">LANJUT BELANJA</a>
					<button type="submit" class="primary-btn cart-btn cart-btn-right"><span class="icon_loading"></span>
						PERBAHARUI KERANJANG</button>
				</div>
			</div>
			</form>

			<div class="col-lg-6">
				<div class="shoping__checkout">
					<h5>Total Keranjang</h5>
					<ul>
						<li>Subtotal <span>Rp. <?= number_format($this->cart->total()) ?></span></li>
						<li>Total <span>Rp. <?= number_format($this->cart->total()) ?></span></li>
					</ul>
					<a href="<?= base_url('Pelanggan/cCheckout') ?>" class="primary-btn">PROSES CHECKOUT</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Shoping Cart Section End -->