		 
<section class="bg-5 h-500x main-slider pos-relative">
        <div class="triangle-up pos-bottom"></div>
        <div class="container h-100">
                <div class="dplay-tbl">
                        <div class="dplay-tbl-cell center-text color-white pt-90">
                                <h5><b>THE BEST IN TOWN</b></h5>
                                <h2 class="mt-30 mb-15">Update Menu</h2>
                        </div><!-- dplay-tbl-cell -->
                </div><!-- dplay-tbl -->
        </div><!-- container -->
</section>

<section>
	<div class="container">
		
			<form action="" method="post">

				<div class="card-body">

					<input type="hidden" name="id" value="<?= $result['id']; ?>">

					<div class="form-group">
						<label for="nama">Nama</label>
						<input type="text" class="form-control" name="nama" id="nama" value="<?= $result['nama']; ?>">
						<small class="form-text text-danger"><?= form_error('nama') ?></small>
					</div>

					<div class="form-group">
						<label for="tipe">Tipe</label>
						<input type="number" class="form-control" name="tipe" id="tipe" value="<?= $result['tipe']; ?>">
						<small class="form-text text-danger"><?= form_error('tipe') ?></small>
					</div>

					<div class="form-group">
						<label for="keterangan">Keterangan</label>
						<textarea class="form-control" name="keterangan" id="keterangan"><?= $result['keterangan']; ?></textarea>
						<small class="form-text text-danger"><?= form_error('keterangan') ?></small>
					</div>

					<div class="form-group">
						<label for="harga">Harga</label>
						<input type="text" class="form-control" name="harga" id="harga" value="<?= $result['harga']; ?>">
						<small class="form-text text-danger"><?= form_error('harga') ?></small>
					</div>

					<div class="form-group">
						<label for="gambar">Gambar</label>
						<input type="text" class="form-control" name="gambar" id="gambar" value="<?= $result['gambar']; ?>">
						<small class="form-text text-danger"><?= form_error('gambar') ?></small>
					</div>

					<div class="form-group">
						<label for="stok">Stok</label>
						<input type="text" class="form-control" name="stok" id="stok" value="<?= $result['stok']; ?>">
						<small class="form-text text-danger"><?= form_error('stok') ?></small>
					</div>

					<button type="submit" name="tambah" class="btn btn-info float-right my-3">Update</button>
					<a href="<?= base_url(); ?>admin/menuAdmin/"><button type="button" name="cancel" class="btn btn-danger float-left my-3">Cancel</button></a>
				</div>

			</form>		<!-- tutup form -->
	</div>

</section>