<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class('single-product-content-area'); ?>>
    <div id="container--upsell">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <?php
                    /**
                     * Hook: woocommerce_after_single_product_summary.
                     *
                     * @hooked woocommerce_output_product_data_tabs - 10
                     * @hooked woocommerce_upsell_display - 15
                     * @hooked woocommerce_output_related_products - 20
                     */
                    do_action( 'woocommerce_after_single_product_summary' );
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6 col-sm-12">
                <div class="product-gallery">
                    <?php
                    /**
                     * Hook: woocommerce_before_single_product_summary.
                     *
                     * @hooked woocommerce_show_product_sale_flash - 10
                     * @hooked woocommerce_show_product_images - 20
                     */
                    do_action( 'woocommerce_before_single_product_summary' );
                    ?>
                </div>
            </div>

            <div class="col-lg-5 col-md-6 col-sm-12 prod-heads">
                <div class="summary entry-summary">
                    <?php
                    /**
                     * Hook: woocommerce_single_product_summary.
                     *
                     * @hooked woocommerce_template_single_title - 5
                     * @hooked woocommerce_template_single_rating - 10
                     * @hooked woocommerce_template_single_price - 10
                     * @hooked woocommerce_template_single_excerpt - 20
                     * @hooked woocommerce_template_single_add_to_cart - 30
                     * @hooked woocommerce_template_single_meta - 40
                     * @hooked woocommerce_template_single_sharing - 50
                     * @hooked WC_Structured_Data::generate_product_data() - 60
                     */
                    do_action( 'woocommerce_single_product_summary' );
                    ?>
                </div>
            </div>
            <div class="col-lg-2 col-md-12 col-sm-12">
                <div class="related-product-container">
                    <?php
                    global $product;
                    $related_products = wc_get_related_products($product->get_id(), 6);
                    if($related_products != null){
                        ?>
                        <p class="related"><?php esc_html_e( 'Related products', 'woocommerce' ); ?></p>
                        <?php
                        woocommerce_product_loop_start();
                        foreach ( $related_products as $related_product ) {
                            $post_object = get_post( $related_product );
                            setup_postdata( $GLOBALS['post'] =& $post_object );
                            if(is_singular('product')){
                                $thumb = get_the_post_thumbnail_url($post_object->ID);
                                $product = wc_get_product( $post_object->ID );
                                $stock_status = $product->get_stock_status();
                                if(!empty($thumb)){
                                    ?>
                                    <a href="<?php echo get_permalink($post_object->ID); ?>">
                                        <div class="row related-product-item">
                                            <div class="col-xs-4 related-product">
                                                <img src="<?php echo $thumb; ?>">
                                            </div>
                                            <div class="col-xs-8 related-detail">
                                                <p class="head"><?php echo $post_object->post_title; ?></p>
                                                <p class="text"><?php echo ($stock_status == 'outofstock') ? 'Not Available' : 'Available'; ?></p>
                                                <p class="price"><?php echo $product->get_price_html(); ?></p>
                                            </div>
                                        </div>
                                    </a>
                                    <?php
                                }
                            } else{
                                wc_get_template_part( 'content', 'product' );
                            }
                        }
                        woocommerce_product_loop_end();
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
