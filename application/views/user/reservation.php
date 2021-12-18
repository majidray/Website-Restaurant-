<section class="bg-4 h-500x main-slider pos-relative">
        <div class="triangle-up pos-bottom"></div>
        <div class="container h-100">
                <div class="dplay-tbl">
                        <div class="dplay-tbl-cell center-text color-white pt-90">
                                <h5><b>BOOK YOUR TABLE HERE</b></h5>
                                <h2 class="mt-30 mb-15">Reservation</h2>
                        </div><!-- dplay-tbl-cell -->
                </div><!-- dplay-tbl -->
        </div><!-- container -->
</section>

<section class="story-area">
        <div class="container">
                <div class="heading brdr-b-primary text-center">
                        <h3>Make a reservation</h3>
                </div>

                <?= $this->session->flashdata('message'); ?>
                <form class="form-style-1 placeholder-1" action="" method="post">
                        <div class="row text-center">
                                <div class="col-md-4">
                                        <label for="date" class="mb-10">Date</label>
                                        <input type="date" id="date" placeholder="Which Date?" name="date">
                                        <?= form_error('date','<small class="text-danger pl-3">','</small>'); ?>
                                </div>

                                <div class="col-md-4">
                                        <label for="time" class="mb-10">Time</label>
                                        <input type="time" id="time" placeholder="What Time?" name="time">
                                        <?= form_error('date','<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                <div class="col-md-4">
                                        <label for="guest" class="mb-10">Guest</label>
                                        <input type="number" id="guest" placeholder="How Many of You?" name="guest">
                                        <?= form_error('guest','<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                        </div>


                        <div class="row text-center mt-30">
                                <div class="col-md-4">
                                        <label for="name" class="mb-10">Name</label>
                                        <input type="text" id="name" placeholder="Your name, please?" name="name" value="<?= $user['name']; ?>">
                                        <?= form_error('name','<small class="text-danger pl-3">','</small>'); ?>
                                </div>

                                <div class="col-md-4">
                                        <label for="email" class="mb-10">Email</label>
                                        <input type="text" id="email" placeholder="Your email, please?" name="email" value="<?= $user['email']; ?>">
                                        <?= form_error('email','<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                <div class="col-md-4">
                                        <label for="phone" class="mb-10">Phone</label>
                                        <input type="text" id="phone" placeholder="Please enter your number" name="no_hp" value="<?= $user['no_hp']; ?>">
                                        <?= form_error('no_hp','<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                        </div>

                        <div class="row text-center mtb-30">
                                <button type="submit" name="submit" class="btn-primaryc plr-25 m-auto">Reserve</button>
                        </div>
                </form>

        </div>
</section>