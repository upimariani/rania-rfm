<!-- Checkout Section Begin -->
<section class="checkout spad">
	<div class="container">

		<div class="checkout__form">
			<h4>Billing Details</h4>
			<form action="<?= base_url('Pelanggan/cCheckout/order_lain') ?>" method="POST">
				<div class="row">
					<div class="col-lg-8 col-md-6">
						<div class="checkout__input">
							<p>Provinsi<span>*</span></p>
							<select name="provinsi" class="form-control" required>

							</select>
						</div>
						<div class="checkout__input">
							<p>Kota/Kab<span>*</span></p>
							<select name="kota" class="form-control" required>

							</select>
						</div>
						<div class="checkout__input">
							<p>Kecamatan<span>*</span></p>
							<select name="kecamatan" class="form-control" required>

							</select>
						</div>
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
							<input type="text" name="alamat" placeholder="Masukkan alamat lengkap anda.">
						</div>
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
<!-- Footer Section Begin -->
<footer class="footer spad">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="footer__about">
					<div class="footer__about__logo">
						<a href="./index.html"><img src="img/logo.png" alt=""></a>
					</div>
					<ul>
						<li>Address: 60-49 Road 11378 New York</li>
						<li>Phone: +65 11.188.888</li>
						<li>Email: hello@colorlib.com</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
				<div class="footer__widget">
					<h6>Useful Links</h6>
					<ul>
						<li><a href="#">About Us</a></li>
						<li><a href="#">About Our Shop</a></li>
						<li><a href="#">Secure Shopping</a></li>
						<li><a href="#">Delivery infomation</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Our Sitemap</a></li>
					</ul>
					<ul>
						<li><a href="#">Who We Are</a></li>
						<li><a href="#">Our Services</a></li>
						<li><a href="#">Projects</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="#">Innovation</a></li>
						<li><a href="#">Testimonials</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-4 col-md-12">
				<div class="footer__widget">
					<h6>Join Our Newsletter Now</h6>
					<p>Get E-mail updates about our latest shop and special offers.</p>
					<form action="#">
						<input type="text" placeholder="Enter your mail">
						<button type="submit" class="site-btn">Subscribe</button>
					</form>
					<div class="footer__widget__social">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-instagram"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-pinterest"></i></a>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="footer__copyright">
					<div class="footer__copyright__text">
						<p>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							Copyright &copy;<script>
								document.write(new Date().getFullYear());
							</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib <?= $this->session->userdata('id_pelanggan') ?></a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
					</div>
					<div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- Footer Section End -->

<!-- Js Plugins -->
<script src="<?= base_url('asset/ogani-master/') ?>js/jquery-3.3.1.min.js"></script>
<script src="<?= base_url('asset/ogani-master/') ?>js/bootstrap.min.js"></script>
<!-- <script src="<?= base_url('asset/ogani-master/') ?>js/jquery.nice-select.min.js"></script> -->
<script src="<?= base_url('asset/ogani-master/') ?>js/jquery-ui.min.js"></script>
<!-- <script src="<?= base_url('asset/ogani-master/') ?>js/jquery.slicknav.js"></script> -->
<!-- <script src="<?= base_url('asset/ogani-master/') ?>js/mixitup.min.js"></script> -->
<!-- <script src="<?= base_url('asset/ogani-master/') ?>js/owl.carousel.min.js"></script> -->
<script src="<?= base_url('asset/ogani-master/') ?>js/main.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

<script>
	$(document).ready(function() {
		$('#myTable').DataTable();
	});
</script>
<script>
	$(document).ready(function() {
		$.ajax({
			type: "POST",
			url: "http://localhost/rania-rfm/Pelanggan/Ongkirlain/provinsi",
			success: function(hasil_provinsi) {
				// console.log(hasil_provinsi);
				$("select[name=provinsi]").html(hasil_provinsi);
			}
		});
		$("select[name=provinsi]").on("change", function() {
			var id_provinsi_terpilih = $("option:selected", this).attr("id_provinsi");
			$.ajax({
				type: "POST",
				url: "http://localhost/rania-rfm/Pelanggan/Ongkirlain/kota",
				data: 'id_provinsi=' + id_provinsi_terpilih,
				success: function(hasil_kota) {
					$("select[name=kota]").html(hasil_kota);
				}
			});
		});
		$("select[name=kota]").on("change", function() {
			var id_kota_terpilih = $("option:selected", this).attr("id_kota");
			$.ajax({
				type: "POST",
				url: "http://localhost/rania-rfm/Pelanggan/Ongkirlain/kecamatan",
				data: 'id_kota=' + id_kota_terpilih,
				success: function(hasil_kecamatan) {
					console.log(hasil_kecamatan);
					$("select[name=kecamatan]").html(hasil_kecamatan);
				}
			});
		});

		$("select[name=kecamatan]").on("change", function() {
			$.ajax({
				type: "POST",
				url: "http://localhost/rania-rfm/Pelanggan/Ongkirlain/expedisi",
				success: function(hasil_expedisi) {
					$("select[name=expedisi]").html(hasil_expedisi);

				}
			});
		});


		$("select[name=expedisi]").on("change", function() {
			//mendapatkan expedisi terpilih
			var expedisi_terpilih = $("select[name=expedisi]").val()

			//mendapatkan id kota tujuan terpilih
			var id_kecamatan_tujuan_terpilih = $("option:selected", "select[name=kecamatan]").attr('id_kecamatan');

			//alert(total_berat);
			$.ajax({
				type: "POST",
				url: "http://localhost/rania-rfm/Pelanggan/Ongkirlain/paket",
				data: 'expedisi=' + expedisi_terpilih + '&id_kecamatan=' + id_kecamatan_tujuan_terpilih + '&berat=1',
				success: function(hasil_paket) {
					console.log(hasil_paket);
					$("select[name=paket]").html(hasil_paket);
					$("input[name=kec]").val(id_kecamatan_tujuan_terpilih);
				}
			});
		});


		$("select[name=paket]").on("change", function() {
			//menampilkan ongkir
			var dataongkir = $("option:selected", this).attr('ongkir');
			var reverse = dataongkir.toString().split('').reverse().join(''),
				ribuan_ongkir = reverse.match(/\d{1,3}/g);
			ribuan_ongkir = ribuan_ongkir.join(',').split('').reverse().join('');
			//alert(dataongkir);
			$("#ongkir").html("Rp. " + ribuan_ongkir);


			//menghitung total bayar
			var ongkir = $("option:selected", this).attr('ongkir');




			var total_bayar = parseInt(ongkir) + parseInt(<?= $this->cart->total() ?>);

			var reverse2 = total_bayar.toString().split('').reverse().join(''),
				ribuan_total = reverse2.match(/\d{1,3}/g);
			ribuan_total = ribuan_total.join(',').split('').reverse().join('');
			$(".ttl_bayar").html("Rp. " + ribuan_total);
			$(".bayar").html("Rp. " + ribuan_total);
			// console.log(ribuan_total);

			//estimasi dan ongkir
			var estimasi = $("option:selected", this).attr('estimasi');
			$("input[name=estimasi]").val(estimasi);
			$("input[name=ongkir]").val(dataongkir);
			$("input[name=total_pembayaran]").val(total_bayar);

		});

	});
</script>


</body>

</html>