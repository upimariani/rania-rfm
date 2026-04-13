<!-- [ Main Content ] start -->
<div class="pc-container">
	<div class="pc-content">
		<!-- [ breadcrumb ] start -->
		<div class="page-header">
			<div class="page-block">
				<div class="row align-items-center">
					<div class="col-md-12">
						<div class="page-header-title">
							<h5 class="m-b-10">Segmentasi Pelanggan</h5>
						</div>

					</div>
				</div>
			</div>
		</div>
		<!-- [ breadcrumb ] end -->
		<!-- [ Main Content ] start -->
		<div class="row">
			<!-- [ sample-page ] start -->

			<div class="col-md-12 col-xl-12">
				<h5 class="mb-3">Informasi Level Member Pelanggan</h5>
				<!-- Button trigger modal -->
				<?php
				if ($this->session->userdata('id_user') == '2') {
				?>
					<a class="btn btn-success mb-3" href="<?= base_url('Backend/cLaporan/pelanggan') ?>">Cetak Laporan</a>
				<?php } ?>
				<?php
				if ($this->session->userdata('success')) {
				?>
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						<strong>Sukses!</strong> <?= $this->session->userdata('success') ?>
					</div>
				<?php
				}
				?>
				<!-- Modal -->

				<div class="card tbl-card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="myTable" class="table table-hover table-borderless mb-0">
								<thead>
									<tr>
										<th>No.</th>
										<th>Nama Pelanggan</th>
										<th>Alamat</th>
										<th>Recency</th>
										<th>Frequency</th>
										<th>Monetary</th>
										<th class="text-end">Level Member</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($pelanggan as $key => $value) {
									?>
										<tr>
											<td><?= $no++ ?></td>
											<td><?= $value->nama_pelanggan ?></td>
											<td><?= $value->alamat ?></td>
											<td><?= $value->recency ?> hari</td>
											<td><?= $value->frequency ?> x</td>
											<td>Rp. <?= number_format($value->monetary)  ?></td>
											<td><?php if ($value->level_member == '1') {
													echo 'Lost Customer';
												} else if ($value->level_member == '2') {
													echo 'At Risk Customer';
												} else if ($value->level_member == '3') {
													echo 'Potensial Customer';
												} else if ($value->level_member == '4') {
													echo 'Loyal Customer';
												} else if ($value->level_member == '5') {
													echo 'Champion';
												} ?></td>
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

		</div>
	</div>
</div>