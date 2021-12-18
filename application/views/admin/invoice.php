
<section class="bg-5 h-500x main-slider pos-relative">
        <div class="triangle-up pos-bottom"></div>
        <div class="container h-100">
                <div class="dplay-tbl">
                        <div class="dplay-tbl-cell center-text color-white pt-90">
                                <h5><b>USER ORDER HISTORY</b></h5>
                                <h2 class="mt-30 mb-15">Invoice</h2>
                        </div><!-- dplay-tbl-cell -->
                </div><!-- dplay-tbl -->
        </div><!-- container -->
</section> 

<section>
        <div class="container">

                <div class="heading">
                        <img class="heading-img" src="<?= base_url() ; ?>assets/images/heading_logo.png" alt="">
                        <h3>User's Invoice</h3>
                 </div>
                <table class="table mt-1">
                <thead class="bg-danger text-white">
                        <tr>
                                <th>Id</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Tanggal Pemesanan</th>

                        </tr>
                </thead>
                        <?php foreach($invoice as $inv) :?>
                                

                        <tr>
                                <td><?php echo $inv->id?></td>
                                <td><?php echo $inv->nama?></td>
                                <td><?php echo $inv->alamat?></td>
                                <td><?php echo $inv->tgl_pesan?></td>


                        </tr>
                        <?php endforeach; ?>
                </table>
        </div>  
</section>

<section>
        <div class="container">

                <div class="heading">
                        <img class="heading-img" src="<?= base_url() ; ?>assets/images/heading_logo.png" alt="">
                        <h3>User's Order</h3>
                 </div>
                <table class="table mt-1">
                <thead class="bg-danger text-white">
                        <tr>
                                <th>Id</th>
                                <th>Id_invoice</th>
                                <th>Id_Barang</th>
                                <th>Nama Barang</th>
                                <th>Jumlah</th>
                                <th>Harga</th>


                        </tr>
                </thead>
                        <?php foreach($pesanan as $pes) :?>
                                

                        <tr>
                                <td><?php echo $pes->id?></td>
                                <td><?php echo $pes->id_invoice?></td>
                                <td><?php echo $pes->id_brg?></td>
                                <td><?php echo $pes->nama_brg?></td>
                                <td><?php echo $pes->jumlah?></td>
                                <td><?php echo $pes->harga?></td>



                        </tr>
                        <?php endforeach; ?>
                </table>
        </div>  
</section>