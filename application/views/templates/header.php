<!DOCTYPE HTML>
<html lang="en">
<head>
        <title><?= $title; ?></title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">

        <!-- Font -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
        <link rel="stylesheet" href="<?= base_url() ; ?>assets/fonts/beyond_the_mountains-webfont.css" type="text/css"/>
        <link rel="stylesheet" href="<?= base_url() ; ?>assets/fonts/amatic_sc_googleapis.css" type="text/css"/>

        <!-- Stylesheets -->
        <link href="<?= base_url() ; ?>assets/plugin-frameworks/bootstrap.min.css" rel="stylesheet">
        <link href="<?= base_url() ; ?>assets/plugin-frameworks/bootstrap.css" rel="stylesheet">
        <link href="<?= base_url() ; ?>assets/plugin-frameworks/swiper.css" rel="stylesheet">
        <link href="<?= base_url() ; ?>assets/fonts/ionicons.css" rel="stylesheet">
        <link href="<?= base_url() ; ?>assets/fonts/flaticon.css" rel="stylesheet">
        <link href="<?= base_url() ; ?>assets/common/styles.css" rel="stylesheet">

</head>
<body>

<header>
    <div class="container">
        <a class="logo" href="<?= base_url(); ?>"><h3>Mj<i class="ion-android-restaurant"></i></h3></a>
        
        <a class="menu-nav-icon float-right" data-menu="#main-menu" href="#"><i class="ion-navicon"></i></a>

        <ul class="main-menu font-mountainsre" id="main-menu">
            <li><a  href="<?= base_url() ; ?>">HOME</a></li>
            <li><a href="<?= base_url() ; ?>main/menu">MENU</a></li>
            <li><a href="<?= base_url() ; ?>main/about">ABOUT</a></li>

            <?php if ($this->session->userdata('role_id') == 1): ?>
            <li><a href="<?= base_url() ; ?>admin/contactAdmin">CONTACT</a></li>
            <li><a href="<?= base_url() ; ?>admin/reservation">RESERVATION</a></li>
            <?php elseif ($this->session->userdata('role_id') == 3): ?>
            <li><a href="<?= base_url() ; ?>main/contact">CONTACT</a></li>
            <li><a href="<?= base_url() ; ?>waiters/reservation">RESERVATION</a></li>
            <li><a href="<?= base_url() ; ?>waiters/invoice">INVOICE</a></li>

            <?php else: ?>
            <li><a href="<?= base_url() ; ?>main/contact">CONTACT</a></li>
            <li><a href="<?= base_url() ; ?>user/reservation">RESERVATION</a></li>

            
            <?php endif; ?>
           
            
            <?php if($this->session->userdata('username')): ?>
                <li class="drop-down float-right">

                <?php if($this->session->userdata('role_id') == 1): ?>
                    <!-- DROPDOWN -->
                    <a href="#">ADMIN <i class="ion-android-arrow-dropdown"></i></a>
                    <div class="drop-down-menu">
                        <a href="<?= base_url() ; ?>admin/invoice">INVOICE</a>
                        <a href="<?= base_url(); ?>admin/menuAdmin/">MENU ADMIN</a>
                        <a href="<?= base_url(); ?>admin/allUsers/">ALL USERS</a>
                        <div class="dropdown-divider"></div>
                        <a href="<?= base_url(); ?>auth/logout/">LOGOUT <i class="ion-log-out"></i></a>
                    </div>
                <?php elseif($this->session->userdata('role_id') == 2): ?>
                    <!-- DROPDOWN -->
                    <a href="#">USER <i class="ion-android-arrow-dropdown"></i></a>
                    <div class="drop-down-menu">
                        <a href="<?= base_url(); ?>user/profile/">USER PROFILE</a>
                        <?php $keranjang = '<i class="ion-android-cart"></i> : '.$this->cart->total_items(). ' items' ?>
                        <?php echo anchor('user/keranjang', $keranjang) ?>
                        <div class="dropdown-divider"></div>
                        <a href="<?= base_url(); ?>auth/logout/">LOGOUT <i class="ion-log-out"></i></a>
                    </div>
                </li>
                <?php else: ?>
                    <li class="float-right"><a href="<?= base_url(); ?>auth/logout/">LOGOUT <i class="ion-log-out"></i></a></li>
                <?php endif; ?>
            <?php else: ?>
            <li class="float-right"><a href="<?= base_url(); ?>auth/login/">LOGIN <i class="ion-log-in"></i></a></li>
            <?php endif; ?>
        </ul>

        <div class="clearfix"></div>
        
    </div><!-- container -->
</header>
