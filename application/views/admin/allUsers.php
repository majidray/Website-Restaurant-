 
<section class="bg-5 h-500x main-slider pos-relative">
  <div class="triangle-up pos-bottom"></div>
  <div class="container h-100">
    <div class="dplay-tbl">
      <div class="dplay-tbl-cell center-text color-white pt-90">
        <h5><b>THE REGISTERED USER</b></h5>
        <h3 class="mt-30 mb-15">All User</h3>
      </div><!-- dplay-tbl-cell -->
    </div><!-- dplay-tbl -->
  </div><!-- container -->
</section>

<section>
  <div class="container">
    <div class="heading">
            <img class="heading-img" src="<?= base_url() ; ?>assets/images/heading_logo.png" alt="">
            <h2>Our Users</h2>
    </div>

    <div class="row mb-40">
      <div class="col-lg-8">
        <form class="input-group my-2 my-lg-0" action="" method="post">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="keyword" value="<?= set_value('keyword'); ?>">
          <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </div>

    <?php if ( empty($allUsers) ): ?>

    <div class="row">
      <div class="col-md-6">
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          User yang anda cari tidak terdaftar
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
            <th scope="col">Name</th>
            <th scope="col">Username</th>
            <th scope="col">No. Hp</th>
            <th scope="col">Alamat</th>
            <th scope="col">Email</th>
            <th scope="col">Role_id</th>
            <th scope="col">Action</th>
          </tr>
        </thead>

        <tbody>
        <?php foreach($allUsers as $au): ?>
          <tr>
            <th scope="row"><?= $au['name']; ?></th>
            <td><?= $au['username']; ?></td>
            <td><?= $au['no_hp']; ?></td>
            <td><?= $au['alamat']; ?></td>
            <td><?= $au['email']; ?></td>
            <td><?= $au['role_id']; ?></td>
            <td>
              <a href="<?= base_url('admin/deleteUser/').$au['id']; ?>"><button type="button" class="btn btn-danger mb-5" onclick="return confirm('Anda yakin ingin menghapus akun ini?')">Delete</button></a>
            </td>
          </tr>
        <?php endforeach; ?>
        </tbody>
      </table>

      <?php endif; ?>
    </div>

  </div><!-- container -->
</section>