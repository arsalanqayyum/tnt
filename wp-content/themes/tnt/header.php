<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="topnav">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-6 col-xs-12">
                <ul class="list-inline">
                    <li><a href="#"><i class="fa fa-phone"></i> +1 2223 4567</a> </li>
                    <li><a href="#"><i class="fa fa-envelope"></i> email@example.com</a></li>
                </ul>
            </div>
            <div class="col-lg-6 col-sm-6 col-xs-12">
                <ul class="list-inline right">
                    <?php if ( is_user_logged_in() ){ ?>
                        <li><a href="<?php echo wp_logout_url( home_url() ); ?>"><i class="fa fa-user"></i> logout </a></li>
                    <?php } else{ ?>
                        <li><a href="javascript:void(0);" data-toggle="modal" data-target="#myModal"><i class="fa fa-user"></i> sign in </a></li>
                    <?php } ?>

                    <li><a href="<?php echo home_url('wishlist'); ?>"><span><i class="fa fa-heart"></i></span> wish list</a></li>
                    <li><a href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><i class="fa fa-shopping-cart"></i> cart <span class="badge"><?php echo WC()->cart->get_cart_contents_count(); ?></span></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<header class="main-menu">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                    wp_nav_menu( array(
                        'theme_location'  => 'top'
                    ) );
                    ?>
            </div>
        </div>
    </div>
</header>

<div class="mynav" data-offset="500"><!--data-spy="affix"-->
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-xs-4">
                <div class="hamburger" style="text-align: left;"><i class="fa fa-bars"></i> </div>
                <div class="cross" style="display: none; text-align: left;"><i class="fa fa-close"></i></div>
            </div>
            <div class="col-sm-4 col-xs-4">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" class="img-responsive logo">
            </div>
            <div class="col-sm-4 col-xs-4 search">
                <div class="show-magnifier" style="text-align: right;"><i class="fa fa-search"></i></div>
                <div class="show-cross" style="display: none;text-align: right;"><i class="fa fa-close"></i></div>
                <form style="display: none; z-index: 11;top: 48px;margin-left: -66px;position: absolute;right: 0;left: 0;" method="get" action="<?php echo home_url(); ?>">
                    <input type="text" name="s" value="<?php echo isset($_REQUEST['s']) ? $_REQUEST['s'] : ''; ?>" placeholder="hit enter to search" style="text-align: left;">
                </form>
            </div>
        </div>
    </div>
    <div class="sidemenu">
        <div class="panel-group" id="accordion">
            <?php
                wp_nav_menu( array(
                    'theme_location'  => 'top'
                ) );
            ?>
        </div>
    </div>
</div>