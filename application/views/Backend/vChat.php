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
		<div class="row">
			<div class="col-md-4">
				<div class="card">
					<div class="card-header">
						Daftar Chat
					</div>
					<ul class="list-group list-group-flush">
						<?php foreach ($pelanggan as $p) { ?>
							<a href="<?= base_url('Backend/cChat/detail/' . $p->id_pelanggan) ?>" class="list-group-item list-group-item-action">
								<strong><?= $p->nama_pelanggan ?></strong>
								<br>
								<small><?= $p->pesan ?></small>
							</a>
						<?php } ?>
					</ul>
				</div>
			</div>
			<div class="col-md-8">
				<div class="card">
					<div class="card-header bg-success text-white">
						Customer Service
					</div>
					<div class="card-body" style="height:500px;overflow-y:auto;background:#f5f5f5;">
						<?php foreach ($chat as $c) { ?>
							<div class="mb-3 <?= ($c->pengirim == 'admin') ? 'text-end' : '' ?>">
								<span class="badge <?= ($c->pengirim == 'admin') ? 'bg-info' : 'bg-success text-light' ?> p-3">
									<?= nl2br(htmlspecialchars($c->pesan)) ?>
								</span>
								<br>
								<small><?= date('d/m/Y H:i', strtotime($c->waktu)) ?></small>
							</div>
						<?php } ?>
					</div>
					<div class="card-footer">
						<?php if ($id_pelanggan != null) { ?>
							<form method="post" action="<?= base_url('Backend/cChat/kirim') ?>">
								<input type="hidden" name="id_pelanggan" value="<?= $id_pelanggan ?>">
								<div class="input-group">

									<input type="text" name="pesan" class="form-control" placeholder="Ketik balasan..." required>

									<button class="btn btn-success">

										Kirim

									</button>

								</div>

							</form>

						<?php } ?>

					</div>

				</div>

			</div>

		</div>

	</div>
</div>