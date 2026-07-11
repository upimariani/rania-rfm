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
							<table id="myTable" class="table table-hover table-borderless mb-0">
								<thead>
									<tr>
										<th>No.</th>
										<th>Periode</th>
										<th>Jumlah Pelanggan</th>
										<th>Lost </th>
										<th>At Risk </th>
										<th>Potensial </th>
										<th>Loyal </th>
										<th>Champion </th>
										<th>View </th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($periode as $p) {
									?>
										<tr>
											<td><?= $no++; ?></td>
											<td><?= date('F Y', strtotime($p->periode . '-01')); ?></td>
											<td><?= $p->jumlah_pelanggan; ?></td>
											<td><?= $p->lost; ?></td>
											<td><?= $p->at_risk; ?></td>
											<td><?= $p->potensial; ?></td>
											<td><?= $p->loyal; ?></td>
											<td><?= $p->champion; ?></td>
											<td>
												<a href="<?= base_url('Backend/cAnalisis/detail/' . $p->periode); ?>" class="btn btn-primary btn-sm">
													Detail
												</a>
											</td>
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