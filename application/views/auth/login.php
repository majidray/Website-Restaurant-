
<?= $this->session->flashdata('message'); ?>
  <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body">
<form class="form-style-1 placeholder-1" action="" method="post">
        <h3 class="text-center">Login Page</h3>
        <br>
        <hr>
        <div class="col-md-7 m-auto">
                <input type="text" name="username" placeholder="Username" value="<?= set_value('username'); ?>">
                <?= form_error('username', '<small class = "text-danger">', '</small>'); ?>
        </div>

        <div class="col-md-7 m-auto">
                <input class="mt-20" type="password" name="password" placeholder="Password">
                <?= form_error('password', '<small class = "text-danger">', '</small>'); ?>
        </div>
        
        <div class="col-md-7 center-text m-auto">
                <button class="mtb-30 btn-primaryc plr-25" type="submit" name="submit"><h6>Login</h6></button>
        </div>
</form>

<div class="col-md-8 m-auto">        
        <h5><a href="<?= base_url(); ?>auth/register/">Don't have an account? Register</a></h5>
        <h5 class="text-center mt-20"><a href="<?= base_url(); ?>"><i class="ion-arrow-left-c"></i> Back to home</a></h5>
        </div>
</div>
</div>