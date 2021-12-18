<section class="bg-6 h-500x main-slider pos-relative">
	<div class="triangle-up pos-bottom"></div>
	
	<div class="container h-100">
    <div class="dplay-tbl">
      <div class="dplay-tbl-cell center-text color-white pt-90">
          <h5><b>HELLO</b></h5>
          <h3 class="mt-30 mb-15"><?= $user['name']; ?></h3>
      </div><!-- dplay-tbl-cell -->
    </div><!-- dplay-tbl -->
  </div><!-- container -->
</section>

<section class="story-area left-text center-sm-text pos-relative">
  <div class="abs-tbl bg-22 w-20 z--1 dplay-md-none"></div>
  <div class="abs-tbr bg-33 w-20 z--1 dplay-md-none"></div>
  <div class="container">
    
    <div class="heading">
      <img class="heading-img" src="<?= base_url() ; ?>assets/images/heading_logo.png" alt="">
      <h3>This Is Your Profile : </h3>
    </div>

    <div class="row">
    	<div class="col-md-12">
	    	<h4 class="center-text mb-50 mb-sm-30 plr-25"><?= $user['username']; ?></h4>
    	</div>

    	<div class="col-md-12">
	    	<h4 class="center-text mb-50 mb-sm-30 plr-25"><?= $user['no_hp']; ?></h4>
    	</div>

    	<div class="col-md-12">
	    	<h4 class="center-text mb-50 mb-sm-30 plr-25"><?= $user['alamat']; ?></h4>
    	</div>

    	<div class="col-md-12">
	    	<h4 class="center-text mb-50 mb-sm-30 plr-25"><?= $user['email']; ?></h4>
    	</div>

    </div><!-- row -->

  </div><!-- container -->
</section>