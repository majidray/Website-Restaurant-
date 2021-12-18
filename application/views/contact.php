


<section class="bg-11 h-500x main-slider pos-relative">
        <div class="triangle-up pos-bottom"></div>
        <div class="container h-100">
                <div class="dplay-tbl">
                        <div class="dplay-tbl-cell center-text color-white pt-90">
                                <h5><b>SAY HELLO</b></h5>
                                <h3 class="mt-30 mb-15">Contact</h3>
                        </div><!-- dplay-tbl-cell -->
                </div><!-- dplay-tbl -->
        </div><!-- container -->
</section>


<section class="story-area left-text center-sm-text">
        <div class="container">
                <div class="heading">
                        <img class="heading-img" src="<?= base_url() ; ?>assets/images/heading_logo.png" alt="">
                        <h2>Say hello</h2>
                        <h5 class="mt-10 mb-30">Say hello, send us a message</h5>
                        <p class="mx-w-700x mlr-auto">Proin dictum viverra varius. Etiam vulputate libero dui, at pretium elit elementum quis. Enean porttitor eros non ultrices convallis.
                                Vivamus quis dolor ut arcu lobortis finibus a vitae leo. Sed eget tempus sem.
                                Nullam sed lacus sed metus tincidunt lobortis lobortis at nibh. Morbi euismod, arcu in gravida rhoncus</p>
                </div>

                <div class="row mtb-50">
                        <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="contact-box center-text">
                                        <h3 class="ion-clock color-ccc"></h3>
                                        <h5>Open Hours</h5>
                                        <div class="text-left font-11">
                                                <p>Monday - Thursday <span class="float-right">16 - 03 A.M.</span></p>
                                                <p>Friday <span class="float-right">16 - 04 A.M.</span></p>
                                                <p>Saturday <span class="float-right">16 - 04 A.M.</span></p>
                                                <p>Sunday <span class="float-right">16 - 04 A.M.</span></p>
                                        </div>
                                </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="contact-box center-text">
                                        <h3 class="ion-android-restaurant color-ccc"></h3>
                                        <h5>Address</h5>
                                        <p class="font-12">Jalan Pembangunan,Medan Selayang,Medan.</p>
                                </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="contact-box center-text">
                                        <h3 class="ion-android-call color-ccc"></h3>
                                        <h5>Phone</h5>
                                        <p class="font-12">(+62) 822 7464 9905</p>
                                </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="contact-box center-text">
                                        <h3 class="ion-email color-ccc"></h3>
                                        <h5>Email</h5>
                                        <p class="font-12">mjcafe@gmail.com</p>
                                </div>
                        </div>
                        
                </div>

                <form class="form-style-1 placeholder-1" action="" method="post">
                         <?= $this->session->flashdata('message'); ?>
                        <div class="row">
                                <div class="col-md-6">
                                        <input class="" type="text" placeholder="Name" name="name">
                                        <?= form_error('name', '<small class = "text-danger">', '</small>'); ?>
                                </div>
                                <div class="col-md-6">
                                        <input class="" type="text" placeholder="E-mail" name="email">
                                        <?= form_error('email', '<small class = "text-danger">', '</small>'); ?>
                                </div>
                                <div class="col-md-12">
                                        <input class="mt-20" type="text" placeholder="Subject" name="subject">
                                        <?= form_error('subject', '<small class = "text-danger">', '</small>'); ?>
                                </div>
                                <div class="col-md-12">
                                        <textarea class="h-200x mt-20 ptb-20" placeholder="Message" name="message"></textarea>
                                        <?= form_error('message', '<small class = "text-danger">', '</small>'); ?>
                                </div>
                        </div><!-- row -->
                        <div class="text-center"><button class="mtb-30 btn-primaryc plr-25" type="submit" name="submit"><h6>SEND MESSAGE</h6></button></div>
                </form>
        </div><!-- container -->
</section>
