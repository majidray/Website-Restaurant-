		 
<section class="bg-5 h-500x main-slider pos-relative">
        <div class="triangle-up pos-bottom"></div>
        <div class="container h-100">
                <div class="dplay-tbl">
                        <div class="dplay-tbl-cell center-text color-white pt-90">
                                <h5><b>THE BEST IN TOWN</b></h5>
                                <h2 class="mt-30 mb-15">Add New Menu</h2>
                        </div><!-- dplay-tbl-cell -->
                </div><!-- dplay-tbl -->
        </div><!-- container -->
</section>

<section>
	<div class="container">
		<div class="row">
			<div class="col-md-8 m-auto">
		
				<form action="" method="post">

					<div class="form-group">
						<label for="nama">Nama</label>
						<input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Makanan" value="<?= set_value('nama'); ?>">
						<?= form_error('nama', '<p class="form-text text-danger">', '</p>') ?>
					</div>

					<div class="form-group">
						<label for="tipe">Tipe</label>
						<input type="number" class="form-control" name="tipe" id="tipe" placeholder="Tipe ([1]savoury/[2]dumpling/[3]desert/[4]drink)" value="<?= set_value('tipe'); ?>">
						<?= form_error('tipe', '<p class="form-text text-danger">', '</p>') ?>
					</div>

					<div class="form-group">
						<label for="keterangan">Keterangan</label>
						<textarea class="form-control" name="keterangan" id="keterangan" placeholder="Keterangan . . ."><?= set_value('keterangan'); ?></textarea>
						<?= form_error('keterangan', '<p class="form-text text-danger">', '</p>') ?>
					</div>

					<div class="form-group">
						<label for="harga">Harga</label>
						<input type="text" class="form-control" name="harga" id="harga" value="IDR. ">
						<?= form_error('harga', '<p class="form-text text-danger">', '</p>') ?>
					</div>

					<div class="form-group">
						<label for="gambar">Gambar</label>
						<input type="text" class="form-control" name="gambar" id="gambar" placeholder="Nama Gambar" value="<?= set_value('gambar'); ?>">
						<?= form_error('gambar', '<p class="form-text text-danger">', '</p>') ?>
					</div>

					<button type="submit" name="tambah" class="btn btn-info float-right my-3">Add</button>
					<a href="<?= base_url(); ?>admin/menuAdmin/"><button type="button" name="cancel" class="btn btn-danger float-left my-3">Cancel</button></a>
				
				</form>		<!-- tutup form -->

			</div>
		</div>
	</div>
</section>