
<div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body">
<h3 class="text-center">Registrasi</h3>
<br><hr>
<form class="form-style-1 placeholder-1" action="" method="post">

	<input type="text" name="name" placeholder="Full Name" value="<?= set_value('name'); ?>">
	<?= form_error('name','<small class="text-danger">', '</small>'); ?>

	<input class="mt-20" type="text" name="username" placeholder="Username" value="<?= set_value('username'); ?>">
	<?= form_error('username','<small class="text-danger">', '</small>'); ?>

        <input class="mt-20" type="text" name="no_hp" placeholder="Nomor Handphone" value="<?= set_value('no_hp'); ?>">
        <?= form_error('no_hp','<small class="text-danger">', '</small>'); ?>

        <textarea class="h-200x mt-20 ptb-20" placeholder="Alamat" name="alamat" value="<?= set_value('alamat'); ?>"></textarea>
        <?= form_error('alamat','<small class="text-danger">', '</small>'); ?>

	<input class="mt-20" type="text" name="email" placeholder="Email" value="<?= set_value('email'); ?>">
	<?= form_error('email','<small class="text-danger">', '</small>'); ?>

	<input class="mt-20" type="password" name="password" placeholder="Password">
	<?= form_error('password','<small class="text-danger">', '</small>'); ?>

	<input class="mt-20" type="password" name="confirm_password" placeholder="Confirm Password">
	<?= form_error('confirm_password','<small class="text-danger">', '</small>'); ?>

        <div class="text-center">
                <button class="mtb-20 btn-primaryc plr-25" type="submit" name="submit"><h6>Register</h6></button>
        </div>
</form>
	<div class="col-md-8 m-auto">
        <h5><a href="<?= base_url(); ?>auth/login/">Already have an account? Login</a></h5>
        <h5 class="text-center mt-20"><a href="<?= base_url(); ?>"><i class="ion-arrow-left-c"></i> Back to home</a></h5>
       </div>

</div>
</div>