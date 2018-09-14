<?php
    get_header();
    while ( have_posts() ) : the_post();
?>
        <div class="container">
            <div class="mycart">
                <!--<div class="row">
                    <div class="col-sm-12">
                        <div class="alert alert-warning">
                            <strong>Warning!</strong> Indicates a warning that might need attention.
                        </div>
                    </div>
                </div>-->
                <div class="row">
                    <div class="col-sm-12">
                        <h3>my shopping cart (<?php echo WC()->cart->get_cart_contents_count(); ?> items)</h3>
                    </div>
                </div>
                <div class="row">
                    <?php the_content(); ?>
                </div>
            </div>

        </div>
<?php
    endwhile;
    get_footer();
