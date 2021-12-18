<section class="bg-9 h-500x main-slider pos-relative">
        <div class="triangle-up pos-bottom"></div>
        <div class="container h-100">
                <div class="dplay-tbl">
                        <div class="dplay-tbl-cell center-text color-white pt-90">
                                <h5><b>ALL YOUR ITEMS GOES HERE</b></h5>
                                <h2 class="mt-30 mb-15">Cart</h2>
                        </div><!-- dplay-tbl-cell -->
                </div><!-- dplay-tbl -->
        </div><!-- container -->
</section> 

<section>

	<div class="container">
		<div class="heading">
        <img class="heading-img" src="<?= base_url() ; ?>assets/images/heading_logo.png" alt="">
        <h3>Your Cart</h3>
    </div>
	<!-- Cart -->
	
	<table class="table mt-1">
		<thead class="bg-danger text-white">
		<tr>
			<th scope="col">No</th>
			<th scope="col">Nama</th>
			<th scope="col">Jumlah</th>
			<th scope="col">Harga</th>
			<th scope="col">Sub Total</th>
		</tr>
	</thead>
		<?php $no=1; foreach ($this->cart->contents() as $items): ?>
	<tbody>
		<tr>
			<th scope="row"><?php echo $no++ ?></th>
			<td><?php echo $items['name'] ?></td>
			<td><?php echo $items['qty'] ?></td>
			<td align="rights">IDR. <?php echo number_format($items['price'], 0,',','.') ?></td>
			<td >IDR. <?php echo number_format($items['subtotal'], 0,',','.') ?></td>
		</tr>

	<?php endforeach; ?>
	<tr class="table-secondary">
			<th colspan="4" class="center-text " scope="col" >Total Harga</th>
			<th>IDR. <?php echo number_format($this->cart->total(), 0,',','.') ?></th>
	</tr>
	</tbody>
	</table>
	<div class="center-text">
		<a href="<?php echo base_url('user/hapus') ?>"><div class="btn-primaryc plr-25">Hapus Keranjang</div></a>
		<a href="<?php echo base_url('main/menu') ?>"><div class="btn-primaryc plr-25">Lanjutkan Belanja</div></a>
		<a href="<?php echo base_url('user/bayar') ?>"><div class="btn-primaryc plr-25">Pembayaran</div></a>
	</div>
	

</section>