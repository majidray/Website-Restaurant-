		 
<section class="bg-5 h-500x main-slider pos-relative">
        <div class="triangle-up pos-bottom"></div>
        <div class="container h-100">
                <div class="dplay-tbl">
                        <div class="dplay-tbl-cell center-text color-white pt-90">
                                <h5><b>THE BEST IN TOWN</b></h5>
                                <h2 class="mt-30 mb-15">Contact Admin</h2>
                        </div><!-- dplay-tbl-cell -->
                </div><!-- dplay-tbl -->
        </div><!-- container -->
</section>

<section>
  <div class="container">
    <div class="heading">
      <img class="heading-img" src="<?= base_url() ; ?>assets/images/heading_logo.png" alt="">
      <h2>Customer's Reviews</h2>
    </div>
        <?= $this->session->flashdata('message'); ?>
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Sender</th>
            <th scope="col">Email</th>
            <th scope="col">Subject</th>
            <th scope="col">Message</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>


          </tr>
        </thead>

        <tbody>
        <?php foreach($review as $r): ?>

          <tr>
            <th scope="row"><?= $r['name']; ?></th>
            <td><?= $r['email']; ?></td>
            <td><?= $r['subject']; ?></td>
            <td><?= $r['message']; ?></td>
            <td><?= $r['status']; ?></td>
            <td>

                    <a href="<?= base_url('admin/deleteReview/').$r['id']; ?>"><button type="button" class="btn btn-danger mb-5" onclick="return confirm('Anda yakin ingin menghapus menu ini?')">Delete</button></a>
                    <a href="<?= base_url('admin/updateStatus/').$r['id']; ?>"><button type="button" class="btn btn-success">Activation</button></a>
            </td>
          </tr>
        <?php endforeach; ?>
        </tbody>
      </table>



  </div>
</section>