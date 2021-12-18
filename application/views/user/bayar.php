<section class="bg-5 h-500x main-slider pos-relative">
        <div class="triangle-up pos-bottom"></div>
        <div class="container h-100">
                <div class="dplay-tbl">
                        <div class="dplay-tbl-cell center-text color-white pt-90">
                                <h5><b>THE BEST IN TOWN</b></h5>
                                <h2 class="mt-30 mb-15">Menu</h2>
                        </div><!-- dplay-tbl-cell -->
                </div><!-- dplay-tbl -->
        </div><!-- container -->
</section> 

<section>

	<div class="container">
		<div class="heading">
        <img class="heading-img" src="<?= base_url() ; ?>assets/images/heading_logo.png" alt="">
        <h3>Payment</h3>
    </div>

<div class="container-fluid">
	<div class="row">
		<div class="m-auto col-md-6">
			<div class="btn-primaryc plr-25">

<?php $grand_total = 0;
if ($keranjang = $this->cart->contents())
{
	foreach ($keranjang as $item) {
		$grand_total = $grand_total + $item['subtotal'];
	}
	echo "<h6 class='center-text pt-20'>Total Belanja  Anda: Rp ".number_format($grand_total,0,',','.');


 ?>
 </div>
		<form method="post" action="<?php echo base_url() ?>user/pemesanan" class="font-weight-bold"> <br>

			<div class="form-group ">
				<label>Nama Lengkap</label>
				<input type="text" name="nama" placeholder="Nama Lengkap" class="form-control" required>
			</div>

			<div class="form-group">
				<label>Alamat Lengkap</label>
				<input type="text" name="alamat" placeholder="Alamat Lengkap" class="form-control" required>
			</div>

			<div class="form-group">
				<label>No Telepon</label>
				<input type="text" name="no_telepon" placeholder="Nomor Telepon" class="form-control" required>
			</div>

			<div class="form-group">
				<label>Jenis Pemesanan</label>
				<select class="form-control">
					<option>Take away</option>
					<option>Makan di tempat</option>
					<option>Delivery</option>
				</select>
			</div>

			<div class="form-group">
				<label>Metode Pembayaran</label>
				<select class="form-control">
					<option>ATM Transfer</option>
					<option>Bayar Ditempat</option>
				</select>
			</div>

			<button type="submit" class="btn-primaryc plr-25 ">Pesan</button>

		</form>
		<?php 
	}else{
		echo "Keranjang Kosong";
	}
		 ?>
		</div>
	</div>
</div>

</div>

</section>