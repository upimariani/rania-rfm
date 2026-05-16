<!-- [ Main Content ] start -->
<div class="pc-container">
	<div class="pc-content">
		<!-- [ breadcrumb ] start -->
		<div class="page-header">
			<div class="page-block">
				<div class="row align-items-center">
					<div class="col-md-12">
						<div class="page-header-title">
							<h5 class="m-b-10">Dashboard</h5>
						</div>

					</div>
				</div>
			</div>
		</div>
		<!-- [ breadcrumb ] end -->
		<!-- [ Main Content ] start -->
		<div class="row">
			<?php
			$p1 = $this->db->query("SELECT COUNT(id_pelanggan) as jml FROM `pelanggan` WHERE level_member='1'")->row();
			$p2 = $this->db->query("SELECT COUNT(id_pelanggan) as jml FROM `pelanggan` WHERE level_member='2'")->row();
			$p3 = $this->db->query("SELECT COUNT(id_pelanggan) as jml FROM `pelanggan` WHERE level_member='3'")->row();
			$p4 = $this->db->query("SELECT COUNT(id_pelanggan) as jml FROM `pelanggan` WHERE level_member='4'")->row();
			$p5 = $this->db->query("SELECT COUNT(id_pelanggan) as jml FROM `pelanggan` WHERE level_member='5'")->row();
			$p6 = $this->db->query("SELECT COUNT(id_pelanggan) as jml FROM `pelanggan` WHERE level_member='0'")->row();
			?>
			<!-- [ sample-page ] start -->
			<div class="col-md-6 col-xl-2">
				<div class="card">
					<div class="card-body">
						<h6 class="mb-2 f-w-400 text-muted">New Customer</h6>
						<h4 class="mb-3"><?= $p6->jml ?> <span class="badge bg-light-danger border border-danger"><i class="ti ti-trending-up"></i> Pelanggan</span></h4>

					</div>
				</div>
			</div>
			<div class="col-md-6 col-xl-2">
				<div class="card">
					<div class="card-body">
						<h6 class="mb-2 f-w-400 text-muted">Lost</h6>
						<h4 class="mb-3"><?= $p1->jml ?> <span class="badge bg-light-primary border border-primary"><i class="ti ti-trending-up"></i> Pelanggan</span></h4>

					</div>
				</div>
			</div>
			<div class="col-md-6 col-xl-2">
				<div class="card">
					<div class="card-body">
						<h6 class="mb-2 f-w-400 text-muted">At Risk</h6>
						<h4 class="mb-3"><?= $p2->jml ?><span class="badge bg-light-success border border-success"><i class="ti ti-trending-up"></i> Pelanggan</span></h4>

					</div>
				</div>
			</div>
			<div class="col-md-6 col-xl-2">
				<div class="card">
					<div class="card-body">
						<h6 class="mb-2 f-w-400 text-muted">Potensial</h6>
						<h4 class="mb-3"><?= $p3->jml ?><span class="badge bg-light-warning border border-warning"><i class="ti ti-trending-down"></i> Pelanggan</span></h4>

					</div>
				</div>
			</div>
			<div class="col-md-6 col-xl-2">
				<div class="card">
					<div class="card-body">
						<h6 class="mb-2 f-w-400 text-muted">Loyal</h6>
						<h4 class="mb-3"><?= $p4->jml ?><span class="badge bg-light-danger border border-danger"><i class="ti ti-trending-up"></i> Pelanggan</span></h4>

					</div>
				</div>
			</div>
			<div class="col-md-6 col-xl-2">
				<div class="card">
					<div class="card-body">
						<h6 class="mb-2 f-w-400 text-muted">Champion</h6>
						<h4 class="mb-3"><?= $p5->jml ?><span class="badge bg-light-primary border border-primary"><i class="ti ti-trending-up"></i> Pelanggan</span></h4>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>