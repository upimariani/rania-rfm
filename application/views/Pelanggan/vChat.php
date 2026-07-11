<!-- Shoping Cart Section Begin -->

<div class="container">

	<div class="card shadow chat-card">

		<div class="chat-header d-flex align-items-center">

			<div class="avatar">
				ADM
			</div>

			<div>
				<h5 class="mb-0">Customer Service</h5>
				<small>Sedang Online</small>
			</div>

		</div>

		<div class="chat-body" id="chatBody">

			<?php foreach ($chat as $c) { ?>

				<div class="message <?= $c->pengirim == 'pelanggan' ? 'customer' : 'admin'; ?>">

					<?php if ($c->pengirim == 'admin') { ?>
						<div class="avatar">ADM</div>
					<?php } ?>

					<div>

						<div class="bubble">
							<?= nl2br(htmlspecialchars($c->pesan)); ?>
						</div>

						<div class="<?= $c->pengirim == 'pelanggan' ? 'text-end' : ''; ?> time">
							<?= date('H:i', strtotime($c->waktu)); ?>
						</div>

					</div>

				</div>

			<?php } ?>

		</div>

		<div class="chat-footer">

			<form action="<?= base_url('Pelanggan/cChat/kirim') ?>" method="post">

				<div class="input-group">

					<textarea name="pesan" class="form-control" rows="2" placeholder="Ketik pesan..." required></textarea>

					<button type="submit" class="btn btn-success">
						Kirim
					</button>

				</div>

			</form>

		</div>

	</div>

</div>

<!-- Shoping Cart Section End -->