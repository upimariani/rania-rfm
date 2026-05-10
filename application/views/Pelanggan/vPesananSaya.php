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
					<table id="myTable" class="table table-borderless">
						<thead>
							<tr>
								<th scope="col">No</th>
								<th scope="col">Tanggal Transaksi</th>
								<th scope="col">Total Pembayaran</th>
								<th scope="col">Status</th>
								<th class="text-center" scope="col">Detail</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$no = 1;
							foreach ($pesanan_saya as $key => $value) {
							?>
								<tr>
									<td><?= $no++ ?></td>
									<td><?= $value->tgl_transaksi ?></td>
									<td>Rp. <?= number_format($value->total_pembayaran) ?></td>
									<td><?php if ($value->stat_transaksi == '0') {
											echo '<span class="badge badge-danger text-light">Belum Bayar</span>';
										} else if ($value->stat_transaksi == '1') {
											echo '<span class="badge badge-success text-warning">Menunggu Konfirmasi</span>';
										} else {
											echo '<span class="badge badge-success text-light">Selesai</span>';
										} ?></td>
									<td class="text-center"><a href="<?= base_url('Pelanggan/cPesananSaya/detail/' . $value->id_transaksi) ?>" class="btn btn-warning">...</a></td>
								</tr>
							<?php
							}
							?>

						</tbody>

					</table>
				</div>
			</div>
		</div>

	</div>
</section>
<!-- Shoping Cart Section End -->