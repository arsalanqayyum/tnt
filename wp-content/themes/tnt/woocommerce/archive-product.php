<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

global $wp_query;
$cat = $wp_query->get_queried_object();
$thumbnail_id = get_woocommerce_term_meta( $cat->term_id, 'thumbnail_id', true );
$image = wp_get_attachment_url( $thumbnail_id );
?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 cat">
                <div id="filters"></div>
            </div>

            <div class="col-lg-9 col-md-9 col-sm-12">
                <div class="category-details">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="banner">
                                <img src="<?php echo !empty($image) ? $image : get_template_directory_uri().'/images/2560x1000_homepage_collections_ver2.jpg'; ?>" class="gallery">
                            </div>
                            <div class="breadcrumb">
                                <div class="col-lg-6 col-sm-6">
                                    <?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
                                        <h1><?php woocommerce_page_title(); ?></h1>
                                    <?php endif; ?>
                                </div>
                                <div class="col-sm-6">
                                    <?php
                                    do_action( 'woocommerce_before_main_content' );
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="products--top-rated">
                        <?php
                            if ( woocommerce_product_loop() ) {
                                ?>
                                <div class="col-sm-12" id="product--filters">
                                    <?php do_action( 'woocommerce_before_shop_loop' ); ?>
                                </div>
                                <?php
                                woocommerce_product_loop_start();
                                if ( wc_get_loop_prop( 'total' ) ) {
                                    while ( have_posts() ) {
                                        the_post();
                                        do_action( 'woocommerce_shop_loop' );
                                        wc_get_template_part( 'content', 'product' );
                                    }
                                }
                                woocommerce_product_loop_end();
                                ?>
                                <?php
                                do_action( 'woocommerce_after_shop_loop' );
                            } else {
                                do_action( 'woocommerce_no_products_found' );
                            }
                            do_action( 'woocommerce_after_main_content' );
                        ?>
                    </div>
                    <!--<div class="col-lg-3 col-sm-4 col-sm-6 col-xs-12">
                        <div class="hover">
                            <img src="images/img4.jpg" class="img-responsive">
                            <div class="overlay">
                                <ul class="list-inline">
                                    <li><a href=""><i class="glyphicon glyphicon-eye-open"></i></a></li>
                                    <li><a href=""><i class="glyphicon glyphicon-heart-empty"></i></a></li>
                                    <li><a href=""><i class="glyphicon glyphicon-option-vertical"></i></a></li>
                                </ul>
                            </div>
                            <p class="title">Big & Tall Advantage Polo</p>
                            <ul class="list-inline stars">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star-half-empty"></i></li>
                            </ul>
                            <p class="price">&pound;187.99</p>
                        </div>
                        <div class="cart">
                            <a href=""><i class="fa fa-cart-plus"></i> add to cart</a>
                        </div>
                    </div>-->

                </div>
            </div>


        </div>
    </div>


<?php






get_footer('shop');

exit;



/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */


?>
    <header class="woocommerce-products-header">
		<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
            <h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
		<?php endif; ?>

		<?php
		/**
		 * Hook: woocommerce_archive_description.
		 *
		 * @hooked woocommerce_taxonomy_archive_description - 10
		 * @hooked woocommerce_product_archive_description - 10
		 */
		do_action( 'woocommerce_archive_description' );
		?>
    </header>
<?php
if ( woocommerce_product_loop() ) {

	/**
	 * Hook: woocommerce_before_shop_loop.
	 *
	 * @hooked wc_print_notices - 10
	 * @hooked woocommerce_result_count - 20
	 * @hooked woocommerce_catalog_ordering - 30
	 */
	do_action( 'woocommerce_before_shop_loop' );

	woocommerce_product_loop_start();

	if ( wc_get_loop_prop( 'total' ) ) {
		while ( have_posts() ) {
			the_post();

			/**
			 * Hook: woocommerce_shop_loop.
			 *
			 * @hooked WC_Structured_Data::generate_product_data() - 10
			 */
			do_action( 'woocommerce_shop_loop' );

			wc_get_template_part( 'content', 'product' );
		}
	}

	woocommerce_product_loop_end();

	/**
	 * Hook: woocommerce_after_shop_loop.
	 *
	 * @hooked woocommerce_pagination - 10
	 */
	do_action( 'woocommerce_after_shop_loop' );
} else {
	/**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 */
	do_action( 'woocommerce_no_products_found' );
}

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
do_action( 'woocommerce_sidebar' );

get_footer( 'shop' );
