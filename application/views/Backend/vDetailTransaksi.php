<!-- [ Main Content ] start -->
<div class="pc-container">
	<div class="pc-content">
		<!-- [ breadcrumb ] start -->
		<div class="page-header">
			<div class="page-block">
				<div class="row align-items-center">
					<div class="col-md-12">
						<div class="page-header-title">
							<h5 class="m-b-10">Home</h5>
						</div>
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="../dashboard/index.html">Home</a></li>
							<li class="breadcrumb-item"><a href="javascript: void(0)">Dashboard</a></li>
							<li class="breadcrumb-item" aria-current="page">Home</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- [ breadcrumb ] end -->
		<!-- [ Main Content ] start -->
		<div class="row">
			<!-- [ sample-page ] start -->

			<div class="col-md-12 col-xl-12">
				<h5 class="mb-3">Recent Orders</h5>
				<!-- Button trigger modal -->
				<?php
				if ($this->session->userdata('success')) {
				?>
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						<strong>Sukses!</strong> <?= $this->session->userdata('success') ?>
					</div>
				<?php
				}
				?>
				<div class="card tbl-card">
					<div class="card-body">
						<div class="card">
							<div class="card-body mx-4">
								<div class="container">
									<div class="card">
										<div class="card-header">
											Invoice
											<strong><?= $pesanan_saya->tgl_transaksi ?></strong>
											<span class="float-right"> <strong>Status:</strong> <?php
																								if ($pesanan_saya->stat_transaksi == '0') {
																									echo 'Belum Bayar';
																								} else if ($pesanan_saya->stat_transaksi == '1') {
																									echo 'Menunggu Konfirmasi';
																								} else {
																									echo 'Selesai';
																								}
																								?></span>

										</div>
										<div class="card-body">
											<div class="row mb-4">
												<div class="col-sm-6">
													<h6 class="mb-3">To:</h6>
													<div>
														<strong><?= $pesanan_saya->nama_pelanggan ?></strong>
													</div>
													<div><?= $pesanan_saya->no_hp ?></div>
													<div><?= $pesanan_saya->alamat_pengiriman ?></div>
												</div>
												<?php
												if ($pesanan_saya->stat_transaksi == '0') {

												?>
													<div class="col-sm-6">
														<?php
														echo form_open_multipart('Pelanggan/cPesananSaya/bayar/' . $pesanan_saya->id_transaksi)
														?>
														<h6 class="mb-3">Pembayaran:</h6>
														<div>
															<strong>Upload Bukti Pembayaran</strong>
														</div>
														<input type="file" name="gambar" class="form-control mb-3">
														<button type="submit" class="site-btn">Upload</button>
													</div>
												<?php
												} else {
												?>
													<div class="col-sm-6">
														<h6 class="mb-3">Pembayaran:</h6>
														<div>
															<a class="site-btn" href="<?= base_url('asset/bayar/' . $pesanan_saya->bukti_payment) ?>">Bukti Pembayaran</a>
														</div>
													</div>
												<?php
												}
												?>




											</div>

											<div class="table-responsive-sm">
												<table class="table table-striped">
													<thead>
														<tr>
															<th scope="col" colspan="2">Product</th>
															<th scope="col">Harga</th>
															<th scope="col">Quantity</th>
															<th scope="col">Total</th>
														</tr>
													</thead>
													<tbody>
														<?php
														foreach ($produk as $key => $value) {
														?>
															<tr>
																<td colspan="2"><span><?= $value->nama_produk ?></span></td>
																<td>Rp. <?= number_format($value->harga) ?></td>
																<td>x<?= $value->qty ?></td>
																<td> <span>Rp. <?= number_format($value->harga * $value->qty) ?></span></td>
															</tr>
														<?php
														}
														?>


													</tbody>

												</table>
											</div>
											<div class="row">
												<div class="col-lg-8 col-sm-5">

												</div>

												<div class="col-lg-4 col-sm-5 ml-auto">
													<table class="table table-clear">
														<tbody>
															<tr>
																<td class="left">
																	<strong>Subtotal</strong>
																</td>
																<td class="right">Rp. <?= number_format($pesanan_saya->total_transaksi) ?></td>
															</tr>
															<tr>
																<td class="left">
																	<strong>Ongkos Kirim</strong>
																</td>
																<td class="right">Rp. <?= number_format($pesanan_saya->ongkir) ?></td>
															</tr>
															<tr>
																<td class="left">
																	<strong>Total Pembayaran</strong>
																</td>
																<td class="right">Rp. <?= number_format($pesanan_saya->total_pembayaran) ?></td>
															</tr>

														</tbody>
													</table>
													<?php
													if ($pesanan_saya->stat_transaksi == '1') {
													?>
														<a href="<?= base_url('Backend/cTransaksiProduk/konfirmasi/' . $pesanan_saya->id_transaksi) ?>" class="btn btn-success">Konfirmasi Transaksi</a>
													<?php
													}
													?>

												</div>

											</div>

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>