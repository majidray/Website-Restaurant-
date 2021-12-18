 
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
      <h2>Our Menu</h2>
    </div>

    <div class="row">
      <!-- <button type="button" class="plr-25 btn-primaryc mb-15 mr-5" data-toggle="modal" data-target="#exampleModal">Add Menu</button> -->
      <div class="col-md">
        <a href="<?= base_url(); ?>admin/addMenu/"><button type="button" class="plr-25 btn-primaryc mb-15 mr-5">Add Menu</button></a>
      </div>

      <div class="col-md-4 mb-20">
        <form class="input-group my-2 my-lg-0" action="" method="post">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="keyword" value="<?= set_value('keyword'); ?>">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </div>

    <?php if ( empty($allMenu) ): ?>

    <div class="row">
      <div class="col-md-6">
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          Menu yang anda cari tidak tersedia
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </div>
      </div>
    </div>

    <div class="row">
      <!-- Modal -->
      <!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
           <div class="modal-content">
             <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Add Menu</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button>
             </div>
             <div class="modal-body">
               <form action="<?= base_url(); ?>admin/addMenu" method="post">
                 <div class="form-group">
                     
                   <label for="nama">Nama</label>
                   <input type="text" class="form-control form-control-sm" id="nama" name="nama" placeholder="Nama Makanan" required>
       
                   <label for="tipe">Tipe</label>
                   <input type="number" class="form-control form-control-sm" id="tipe" name="tipe" placeholder="Tipe ([1]savoury/[2]dumpling/[3]desert/[4]drink)" required>
       
                   <label for="keterangan">Keterangan</label>
                   <textarea class="form-control form-control-sm" id="keterangan" name="keterangan" placeholder="Keterangan" required></textarea>
       
                   <label for="harga">Harga</label>
                   <input type="text" class="form-control form-control-sm" id="harga" name="harga" value="IDR. " required>
       
                   <label for="gambar">Gambar</label>
                   <input type="text" class="form-control form-control-sm" id="gambar" name="gambar" placeholder="Nama Gambar" required>
       
                 </div>
             </div>
       
             <div class="modal-footer">
               <button type="reset" class="btn btn-danger">Reset</button>
               <button type="submit" class="btn btn-primary">Add</button>
             </div>
               </form>
               
           </div>  modal-content
         </div>  modal-dialog
       </div> modal -->

      <?= $this->session->flashdata('message'); ?>
      <?php else: ?>
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Nama</th>
            <th scope="col">Tipe</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Harga</th>
            <th scope="col">Gambar</th>
            <th scope="col">Stok</th>
            <th scope="col">Action</th>
          </tr>
        </thead>

        <tbody>
        <?php foreach($allMenu as $am): ?>

          <tr>
            <th scope="row"><?= $am['nama']; ?></th>
            <td><?= $am['tipe']; ?></td>
            <td><?= $am['keterangan']; ?></td>
            <td><?= $am['harga']; ?></td>
            <td width="200"><img src="<?= base_url('assets/img/').$am['gambar']; ?>" alt=""></td>
            <td><?= $am['stok']; ?></td>
            <td>
                    <a href="<?= base_url('admin/deleteMenu/').$am['id']; ?>"><button type="button" class="btn btn-danger mb-5" onclick="return confirm('Anda yakin ingin menghapus menu ini?')">Delete</button></a>
                    <a href="<?= base_url('admin/updateMenu/').$am['id']; ?>"><button type="button" class="btn btn-success">Update</button></a>
            </td>
          </tr>

        <?php endforeach; ?>
        </tbody>
      </table>
      <?php endif; ?>

    </div>  <!-- row -->

  </div><!-- container -->
</section>