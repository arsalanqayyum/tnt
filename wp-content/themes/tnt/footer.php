<div class="policy">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <?php if ( is_active_sidebar( 'top-footer-1' ) ) : ?>
                    <?php dynamic_sidebar( 'top-footer-1' ); ?>
                <?php endif; ?>
            </div>
            <div class="col-sm-4">
                <?php if ( is_active_sidebar( 'top-footer-2' ) ) : ?>
                    <?php dynamic_sidebar( 'top-footer-2' ); ?>
                <?php endif; ?>
            </div>
            <div class="col-sm-4">
                <?php if ( is_active_sidebar( 'top-footer-3' ) ) : ?>
                    <?php dynamic_sidebar( 'top-footer-3' ); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-2">
                <?php if ( is_active_sidebar( 'bottom-footer-1' ) ) : ?>
                    <?php dynamic_sidebar( 'bottom-footer-1' ); ?>
                <?php endif; ?>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
                <?php if ( is_active_sidebar( 'bottom-footer-2' ) ) : ?>
                    <?php dynamic_sidebar( 'bottom-footer-2' ); ?>
                <?php endif; ?>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
                <?php if ( is_active_sidebar( 'bottom-footer-3' ) ) : ?>
                    <?php dynamic_sidebar( 'bottom-footer-3' ); ?>
                <?php endif; ?>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4">
                <h4>Get in touch</h4>
                <ul class="list-inline payment">
                    <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                </ul>
                <h4>payment method</h4>
                <ul class="list-inline payment">
                    <li>
                        <i class="fa fa-2x fa-cc-paypal"></i>
                    </li>
                    <li>
                        <i class="fa fa-2x fa-cc-visa"></i>
                    </li>
                    <li>
                        <i class="fa fa-2x fa-cc-mastercard"></i>
                    </li>
                </ul>
                <h4>subscribe</h4>
                <form>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Email us">
                        <div class="input-group-btn">
                            <button class="btn btn-warning" type="submit">
                                <i class="fa fa-send"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</footer>

<div class="bottom">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <p class="copy">copyrights <?php echo date('Y'); ?> all rights reserved</p>
                <p class="powered">designed by: <a href="">devwebs</a></p>
            </div>
        </div>
    </div>
</div>

<?php
    if ( !is_user_logged_in() ) {
        ?>
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Please Login</h4>
                    </div>
                    <div class="modal-body">
                        <?php wp_login_form(); ?>
                        <!--<form accept-charset="">
                            <label>Email Address or Username</label>
                            <input type="text" placeholder="email or username">
                            <label>Password</label>
                            <input type="password">
                            <button type="submit">PROCEED</button>
                        </form>-->
                        <a href="<?php echo home_url('my-account'); ?>">New to tnt? signup now</a>
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>

            </div>
        </div>
    <?php }
    wp_footer();
    require_once 'js/customjs.php';
?>
</body>
</html>
