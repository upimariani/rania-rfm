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

				<div class="card tbl-card">
					<div class="card-body">
						<div class="table-responsive">
							<h4>Periode : <?= date('F Y', strtotime($periode . '-01')); ?></h4>

							<table class="table table-bordered" id="myTable">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama Pelanggan</th>
										<th>Recency</th>
										<th>Frequency</th>
										<th>Monetary</th>
										<th>Level</th>
									</tr>
								</thead>

								<tbody>

									<?php
									$no = 1;
									foreach ($analisis as $row) {
									?>

										<tr>
											<td><?= $no++; ?></td>
											<td><?= $row->nama_pelanggan; ?></td>
											<td><?= $row->recency; ?> hari</td>
											<td><?= $row->frequency; ?> kali</td>
											<td>Rp <?= number_format($row->monetary, 0, ',', '.'); ?></td>
											<td><?= $row->kategori; ?></td>
										</tr>

									<?php } ?>

								</tbody>

							</table>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>