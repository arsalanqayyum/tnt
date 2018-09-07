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

<nav class="navbar navbar-inverse" data-spy="affix" data-offset="500">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" class="logo img-responsive"></a>
        </div>
        <ul class="nav navbar-nav">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">men
                    <span class="caret"></span></a>
                <div class="mega-drop-down-menu">
                    <div class="container">
                        <ul class="dropdown-menu col-sm-4">
                            <li><img src="<?php echo get_template_directory_uri(); ?>/images/img15.jpg" class="img-responsive"> </li>
                        </ul>

                        <ul class="dropdown-menu col-sm-3">
                            <li class="head"><a href="#">product header</a></li>
                            <li><a href="#">Submenu link 1</a></li>
                            <li><a href="#">Submenu link 2</a></li>
                            <li><a href="#">Submenu link 3</a></li>
                            <li><a href="#">Submenu link 4</a></li>
                        </ul>

                        <ul class="dropdown-menu col-sm-3">
                            <li class="head"><a href="#">product header</a></li>
                            <li><a href="#">Submenu link 1</a></li>
                            <li><a href="#">Submenu link 2</a></li>
                            <li><a href="#">Submenu link 3</a></li>
                            <li><a href="#">Submenu link 4</a></li>
                        </ul>
                    </div>

                </div>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">ladies
                    <span class="caret"></span></a>
                <div class="mega-drop-down-menu">
                    <div class="container">
                        <ul class="dropdown-menu col-sm-4">
                            <li><img src="<?php echo get_template_directory_uri(); ?>/images/img14.jpg" class="img-responsive"> </li>
                        </ul>

                        <ul class="dropdown-menu col-sm-3">
                            <li class="head"><a href="#">product header</a></li>
                            <li><a href="#">Submenu link 1</a></li>
                            <li><a href="#">Submenu link 2</a></li>
                            <li><a href="#">Submenu link 3</a></li>
                            <li><a href="#">Submenu link 4</a></li>
                        </ul>

                        <ul class="dropdown-menu col-sm-3">
                            <li class="head"><a href="#">product header</a></li>
                            <li><a href="#">Submenu link 1</a></li>
                            <li><a href="#">Submenu link 2</a></li>
                            <li><a href="#">Submenu link 3</a></li>
                            <li><a href="#">Submenu link 4</a></li>
                        </ul>

                        <ul class="dropdown-menu col-sm-2">
                            <li class="head"><a href="#">product header</a></li>
                            <li><a href="#">Submenu link 1</a></li>
                            <li><a href="#">Submenu link 2</a></li>
                            <li><a href="#">Submenu link 3</a></li>
                            <li><a href="#">Submenu link 4</a></li>
                        </ul>
                    </div>

                </div>
            </li>
            <li><a href="#">handicrafts</a></li>
            <li><a href="#">collection</a></li>
            <li><a href="#">sale</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li>
                <div class="nav-magnifier"><i class="fa fa-search"></i> </div>
                <form>
                    <input type="text" placeholder="Search">
                </form>
            </li>
        </ul>
    </div>
</nav>

<div class="mynav" data-spy="affix" data-offset="500">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-xs-4">
                <div class="hamburger"><i class="fa fa-bars"></i> </div>
                <div class="cross" style="display: none"><i class="fa fa-close"></i></div>
            </div>
            <div class="col-sm-4 col-xs-4">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" class="img-responsive logo">
            </div>
            <div class="col-sm-4 col-xs-4 search">
                <div class="show-magnifier"><i class="fa fa-search"></i></div>
                <div class="show-cross" style="display: none;"><i class="fa fa-close"></i></div>
                <form style="display: none">
                    <input type="text" placeholder="hit enter to search">
                </form>
            </div>
        </div>
    </div>
    <div class="sidemenu">
        <div class="panel-group" id="accordion">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#men">
                            men <span><i class="fa fa-caret-down"></i> </span></a>
                    </h4>
                </div>
                <div id="men" class="panel-collapse collapse" aria-expanded="false">
                    <ul class="panel-body list-unstyled">
                        <li><a href="">submenu link1</a></li>
                        <li><a href="">submenu link1</a></li>
                        <li><a href="">submenu link1</a></li>
                        <li><a href="">submenu link1</a></li>
                        <li><a href="">submenu link1</a></li>
                    </ul>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#women">
                            ladies <span><i class="fa fa-caret-down"></i> </span></a>
                    </h4>
                </div>
                <div id="women" class="panel-collapse collapse">
                    <ul class="panel-body list-unstyled">
                        <li><a href="">submenu link1</a></li>
                        <li><a href="">submenu link1</a></li>
                        <li><a href="">submenu link1</a></li>
                        <li><a href="">submenu link1</a></li>
                        <li><a href="">submenu link1</a></li>
                    </ul>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#">
                            handicraft</a>
                    </h4>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#">
                            collection</a>
                    </h4>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#">
                            sale</a>
                    </h4>
                </div>
            </div>


        </div>
    </div>
</div>