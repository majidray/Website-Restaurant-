     
<section class="bg-10 h-500x main-slider pos-relative">
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

                <?php echo $this->session->flashdata('message'); ?>

                <div class="row">
                        <div class="col-sm-12">
                                <ul class="selecton brdr-b-primary mb-70">
                                        <li><a class="active" href="#" data-select="all"><b>ALL</b></a></li>
                                        <li><a href="#" data-select="savories"><b>SAVOURIES</b></a></li>
                                        <li><a href="#" data-select="dumplings"><b>SNACKS</b></a></li>
                                        <li><a href="#" data-select="deserts"><b>DESERTS</b></a></li>
                                        <li><a href="#" data-select="drinks"><b>DRINKS</b></a></li>
                                </ul>
                        </div><!--col-sm-12-->
                </div><!--row-->


                <div class="row">
                        <?php foreach($resultAll as $menu) :?>
                        <div class="col-md-6 food-menu all">
                                <div class="sided-90x mb-30 ">
                                        <div class="s-left">
                                                <img class="br-3" src="<?= base_url() ; ?>assets/img/<?= $menu->gambar; ?>" alt="Menu Image">
                                                <p><b class="color-primary float-right">IDR. <?php echo $menu->harga; ?></b></p>
                                        </div><!--s-left-->
                                        <div class="s-right">
                                                <h5 class="mb-10"><b><?php echo $menu->nama; ?></b>
                                                <div class="float-right">
                                                <?php echo anchor('User/cart/'.$menu->id,'<button type="button" class="btn btn-danger">ORDER</button>')?></div></h5>
                                                <p class="pr-70"><?php echo $menu->keterangan; ?></p>
                                        </div><!--s-right-->
                                </div><!-- sided-90x -->
                        </div><!-- food-menu -->
                        <?php endforeach; ?> 

                        

                        <?php foreach($resultSavories as $menu1) :?>
                        <div class="col-md-6 food-menu savories">
                                <div class="sided-90x mb-30 ">
                                        <div class="s-left">
                                                <img class="br-3" src="<?= base_url() ; ?>assets/img/<?= $menu1->gambar; ?>" alt="Menu Image">
                                                <p><b class="color-primary float-right">IDR. <?php echo $menu1->harga; ?></b></p>
                                        </div><!--s-left-->
                                        <div class="s-right">
                                                <h5 class="mb-10"><b><?php echo $menu1->nama; ?></b>
                                                <div class="float-right">
                                                <?php echo anchor('User/cart/'.$menu->id,'<button type="button" class="btn btn-danger">ORDER</button>')?></div></h5>
                                                <p class="pr-70"><?php echo $menu1->keterangan; ?></p>
                                        </div><!--s-right-->
                                </div><!-- sided-90x -->
                        </div><!-- food-menu -->
                        <?php endforeach; ?> 

                        <?php foreach ($resultDumplings as $menu2)  :?>
                        <div class="col-md-6 food-menu dumplings">
                                <div class="sided-90x mb-30 ">
                                        <div class="s-left">
                                                <img class="br-3" src="<?= base_url() ; ?>assets/img/<?= $menu2->gambar; ?>" alt="Menu Image">
                                                <p><b class="color-primary float-right">IDR. <?php echo $menu2->harga; ?></b></p>
                                        </div><!--s-left-->
                                        <div class="s-right">
                                                <h5 class="mb-10"><b><?php echo $menu2->nama; ?></b>
                                                <div class="float-right">
                                                <?php echo anchor('User/cart/'.$menu->id,'<button type="button" class="btn btn-danger">ORDER</button>')?></div></h5>
                                                <p class="pr-70"><?php echo $menu2->keterangan; ?></p>
                                        </div><!--s-right-->
                                </div><!-- sided-90x -->
                        </div><!-- food-menu -->

                        <?php endforeach; ?> 
                        <?php foreach ($resultDeserts as $menu3)  :?>

                        <div class="col-md-6 food-menu deserts">
                                <div class="sided-90x mb-30 ">
                                        <div class="s-left">
                                                <img class="br-3" src="<?= base_url() ; ?>assets/img/<?= $menu3->gambar; ?>" alt="Menu Image">
                                                <p><b class="color-primary float-right">IDR. <?php echo number_format($menu3->harga, 0,',','.'); ?></b></p>
                                        </div><!--s-left-->
                                        <div class="s-right">
                                                <h5 class="mb-10"><b><?php echo $menu3->nama; ?></b>
                                                <div class="float-right">
                                                <?php echo anchor('User/cart/'.$menu->id,'<button type="button" class="btn btn-danger">ORDER</button>')?></div></h5>
                                                <p class="pr-70"><?php echo $menu3->keterangan; ?></p>
                                        </div><!--s-right-->
                                </div><!-- sided-90x -->
                        </div><!-- food-menu -->

                        <?php endforeach; ?> 
                        <?php foreach ($resultDrinks as $menu4)  :?>

                        <div class="col-md-6 food-menu drinks">
                                <div class="sided-90x mb-30">
                                        <div class="s-left">
                                                <img class="br-3" src="<?= base_url() ; ?>assets/img/<?= $menu4->gambar; ?>" alt="Menu Image">
                                                <p><b class="color-primary float-right">IDR. <?php echo $menu4->harga; ?></b></p>
                                        </div><!--s-left-->
                                        <div class="s-right">
                                                <h5 class="mb-10"><b><?php echo $menu4->nama; ?></b>
                                                <div class="float-right">
                                                <?php echo anchor('User/cart/'.$menu->id,'<button type="button" class="btn btn-danger">ORDER</button>')?></div></h5>
                                                <p class="pr-70"><?php echo $menu4->keterangan; ?></p>
                                        </div><!--s-right-->
                                </div><!-- sided-90x -->
                        </div><!-- food-menu -->
                        <?php endforeach; ?>  
                        </div><!-- row -->

                <div class="row">
                        <div class="col-md-6 food-menu all m-auto">
                                 <?= $pagination; ?>
                        </div>
                </div>


        </div><!-- container -->
</section>