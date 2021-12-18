<section class="bg-5 h-500x main-slider pos-relative">
  <div class="triangle-up pos-bottom"></div>
  <div class="container h-100">
    <div class="dplay-tbl">
      <div class="dplay-tbl-cell center-text color-white pt-90">
        <h5><b>THE RESERVATONS</b></h5>
        <h2 class="mt-30 mb-15">All Reservations</h2>
        </div><!-- dplay-tbl-cell -->
    </div><!-- dplay-tbl -->
  </div><!-- container -->
</section>

<section>
  <div class="container">
    <div class="heading">
      <img class="heading-img" src="<?= base_url() ; ?>assets/images/heading_logo.png" alt="">
      <h3>All Resservations</h3>
    </div>

    <div class="row mb-40">
      <div class="col-lg-8">
        <form class="input-group my-2 my-lg-0" action="" method="post">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="keyword" value="<?= set_value('keyword'); ?>">
          <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </div>
    
    <?php if ( empty($allReservations) ): ?>
    <div class="row">
      <div class="col-md-6">
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          TIDAK ADA RESERVASI !
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </div>
      </div>
    </div>

    <div class="row">
			<?= $this->session->flashdata('message'); ?>
      
      <?php else: ?>
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Date</th>
            <th scope="col">Time</th>
            <th scope="col">Guest</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Action</th>

          </tr>
        </thead>

        <tbody>
        <?php foreach($allReservations as $ar): ?>
          <tr>
            <th scope="row"><?= $ar['date']; ?></th>
            <td><?= $ar['time']; ?></td>
            <td><?= $ar['guest']; ?></td>
            <td><?= $ar['name']; ?></td>
            <td><?= $ar['email']; ?></td>
            <td><?= $ar['no_hp']; ?></td>

            <td>
              <a href="<?= base_url('admin/deleteReservation/').$ar['id']; ?>"><button type="button" class="btn btn-danger mb-5" onclick="return confirm('Anda yakin ingin menghapus reservasi ini?')">Delete</button></a>
            </td>
          </tr>
        <?php endforeach; ?>
        </tbody>
      </table>

      <?php endif; ?>
    </div>

  </div><!-- container -->
</section>