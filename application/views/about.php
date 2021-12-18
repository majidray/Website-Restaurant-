


<section class="bg-4 h-500x main-slider pos-relative">
        <div class="triangle-up pos-bottom"></div>
        <div class="container h-100">
                <div class="dplay-tbl">
                        <div class="dplay-tbl-cell center-text color-white pt-90">
                                <h5><b>WANT TO KNOW MORE</b></h5>
                                <h2 class="mt-30 mb-15">About our Cafe</h2>
                        </div><!-- dplay-tbl-cell -->
                </div><!-- dplay-tbl -->
        </div><!-- container -->
</section>


<section class="story-area left-text center-sm-text">
        <div class="container">

                <div class="row">
                        <div class="col-md-3"><img class="mb-30" src="<?= base_url() ; ?>assets/images/NEW/33.jpeg" alt=""></div>
                        <div class="col-md-3"><img class="mb-30" src="<?= base_url() ; ?>assets/images/NEW/34.jpeg" alt=""></div>
                        <div class="col-md-3"><img class="mb-30" src="<?= base_url() ; ?>assets/images/NEW/35.jpeg" alt=""></div>
                        <div class="col-md-3"><img class="mb-30" src="<?= base_url() ; ?>assets/images/NEW/36.jpeg" alt=""></div>
                        <div class="col-md-12">
                                <div class="mt-50 mt-sm-30 mb-50 mb-sm-30 center-text"> <h2>We are Merah Jambu</h2> </div>

                        </div>
                        <div class="col-md-6">
                                <p class="mb-15">Merah Jambu(MJ) is a renowned lounge in USU area specializing in historical and traditional Aceh cuisine. It is our intention not only to provide the local Aceh community with the most authentic Aceh cuisine; but also for everyone to discover something new about Aceh cuisine. We hope that you enjoy the experience. MJ gathers the best dishes for customers..</p>
                        </div><!-- col-md-6 -->

                        <div class="col-md-6">
                                <p class="mb-15">This provides variety in our dishes as well as maintaining many of the truly historical Aceh dishes that have been enjoyed for many centuries. In order for MJ to achieve a truly authentic taste, we source the freshest ingredients and seasonings from around the globe as well as from Aceh. The spirit and ethos of the restaurant comes from Annie, who has over thirty years of experience in Aceh cuisine. All of this has created a truly uniq Aceh Cafe..</p>
                        </div><!-- col-md-6 -->
                </div><!-- row -->

                <h6 class="center-text mt-40 mt-sm-30 mb-20">
                        <a href="<?= base_url('main/menu/'); ?>" class="btn-primaryc plr-25 mb-10 mlr-5"><b>SEE TODAYS MENU</b></a>
                        <a href="<?= base_url('main/menu/'); ?>" class="btn-primaryc secondary plr-50 mlr-5 mb-10"><b>ORDER NOW</b></a>
                </h6>

        </div><!-- container -->
</section>


<section class="story-area bg-seller color-white pos-relative">
        <div class="pos-bottom triangle-up"></div>
        <div class="pos-top triangle-bottom"></div>
        <div class="container">
                <div class="heading">
                        <img class="heading-img" src="<?= base_url() ; ?>assets/images/heading_logo.png" alt="">
                        <h2>What Clients Say</h2>
                </div>

                <div class="swiper-container" data-slide-effect="slide" data-autoheight="false" data-swiper-speed="500" data-swiper-margin="25" data-swiper-slides-per-view="3"
                     data-swiper-breakpoints="true" data-scrollbar="true" data-swiper-loop="false" data-swpr-responsive="[1, 2, 2, 2]">

                        <div class="swiper-wrapper pb-90 pb-sm-60 left-text center-sm-text">
                             <?php foreach ($result as $comment) :?>
                                <?php if ($comment['status']=='activated') :?>
                                <div class="swiper-slide">
                                        <h3><?= $comment['subject']; ?></h3>
                                        <h5 class="color -ash mb-50 mb-sm-30 mt-20"><?= $comment['message']; ?></h5>
                                        
                                        <h5><b class="color-primary"><?= $comment['name']; ?></b>,<b class="color-ash">Customer</b>
                                        </h5>
                                </div><!-- swiper-slide -->
                            <?php endif; ?>
                            <?php endforeach; ?>
                        </div><!-- swiper-wrapper -->
                        <div class="swiper-pagination"></div>
                </div><!-- swiper-container -->
        </div><!-- container -->
</section>

<section class="counter-section section center-text" id="counter">
        <div class="container">
            <div class="heading">
                        <h2>Meet</h2>
                        <h3>Our Team</h3>
                </div>
                <div class="row">
                        <div class="col-sm-6 col-md-3 col-lg-3">
                            <div class="card_profile">
                              <img src="<?= base_url(); ?>/assets/images/quoto-2-200x200.jpg" alt="John" style="width:50%" class="mb-20">
                              <h3>Majidray</h3>
                              <p class="title mt-20">CEO & Founder</p>
                              <p>University of Northern Sumatra</p>
                              <div style="margin: 24px 0;">
                                <a href="#"><i class="ion-social-pinterest"></i></a> 
                                <a href="#"><i class="ion-social-twitter"></i></a>  
                                <a href="#"><i class="ion-social-instagram"></i></a>  
                                <a href="#"><i class="ion-social-facebook"></i></a> 
                              </div>
                              <p><button>Contact</button></p>
                            </div>
  
                        </div><!-- col-md-3-->

                        <div class="col-sm-6 col-md-3 col-lg-3">
                            <div class="card_profile">
                              <img src="<?= base_url(); ?>/assets/images/quoto-2-200x200.jpg" alt="John" style="width:50%" class="mb-20">
                              <h3>M.Fadli Lubis </h3>
                              <p class="title mt-20">CEO & Founder</p>
                              <p>University of Northern Sumatra</p>
                              <div style="margin: 24px 0;">
                                <a href="#"><i class="ion-social-pinterest"></i></a> 
                                <a href="#"><i class="ion-social-twitter"></i></a>  
                                <a href="#"><i class="ion-social-instagram"></i></a>  
                                <a href="#"><i class="ion-social-facebook"></i></a> 
                              </div>
                              <p><button>Contact</button></p>
                            </div>
                        </div><!-- col-md-3-->

                        <div class="col-sm-6 col-md-3 col-lg-3">
                            <div class="card_profile">
                              <img src="<?= base_url(); ?>/assets/images/quoto-2-200x200.jpg" alt="John" style="width:50%" class="mb-20">
                              <h3>Arya Ahmad </h3>
                              <p class="title mt-20">CEO & Founder</p>
                              <p>University of Northern Sumatra</p>
                              <div style="margin: 24px 0;">
                                <a href="#"><i class="ion-social-pinterest"></i></a> 
                                <a href="#"><i class="ion-social-twitter"></i></a>  
                                <a href="#"><i class="ion-social-instagram"></i></a>  
                                <a href="#"><i class="ion-social-facebook"></i></a> 
                              </div>
                              <p><button>Contact</button></p>
                            </div>
                        </div><!-- col-md-3-->

                        <div class="col-sm-6 col-md-3 col-lg-3">
                            <div class="card_profile">
                              <img src="<?= base_url(); ?>/assets/images/quoto-2-200x200.jpg" alt="John" style="width:50%" class="mb-20">
                              <h3>Fikri Fadhillah </h3>
                              <p class="title mt-20">CEO & Founder</p>
                              <p>University of Northern Sumatra</p>
                              <div style="margin: 24px 0;">
                                <a href="#"><i class="ion-social-pinterest"></i></a> 
                                <a href="#"><i class="ion-social-twitter"></i></a>  
                                <a href="#"><i class="ion-social-instagram"></i></a>  
                                <a href="#"><i class="ion-social-facebook"></i></a> 
                              </div>
                              <p><button>Contact</button></p>
                            </div>
                        </div><!-- col-md-3-->

                        <div class="col-sm-6 col-md-3 col-lg-3">
                            <div class="card_profile">
                              <img src="<?= base_url(); ?>/assets/images/quoto-2-200x200.jpg" alt="John" style="width:50%" class="mb-20">
                              <h3>M.Zaid   </h3>
                              <p class="title mt-20">CEO & Founder</p>
                              <p>University of Northern Sumatra</p>
                              <div style="margin: 24px 0;">
                                <a href="#"><i class="ion-social-pinterest"></i></a> 
                                <a href="#"><i class="ion-social-twitter"></i></a>  
                                <a href="#"><i class="ion-social-instagram"></i></a>  
                                <a href="#"><i class="ion-social-facebook"></i></a> 
                              </div>
                              <p><button>Contact</button></p>
                            </div>
                        </div><!-- col-md-3-->

                </div><!-- row-->
        </div><!-- container-->
</section><!-- counter-section-->


