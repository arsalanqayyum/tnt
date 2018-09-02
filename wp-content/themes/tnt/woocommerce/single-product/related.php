<?php
/**
 * Related Products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/related.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( $related_products ) : ?>
    <div class="related products col-lg-2 col-md-12 col-sm-11 col-xs-11">
        <h5 class="related"><?php esc_html_e( 'Related products', 'woocommerce' ); ?></h5>
	    <?php woocommerce_product_loop_start(); ?>
	    <?php foreach ( $related_products as $related_product ) : ?>
		    <?php
                $post_object = get_post( $related_product->get_id() );
                setup_postdata( $GLOBALS['post'] =& $post_object );
                if(is_singular('product')){
                    $thumb = get_the_post_thumbnail_url($post_object->ID);
	                $product = wc_get_product( $post_object->ID );
	                $stock_status = $product->get_stock_status();
	                if(!empty($thumb)){
	                    ?>
                            <div class="related-product">
                                <img src="<?php echo $thumb; ?>">
                            </div>
                            <div class="related-detail">
                                <p class="head"><?php echo $post_object->post_title; ?></p>
                                <p class="text"><?php echo ($stock_status == 'outofstock') ? 'Not Available' : 'Available'; ?></p>
                                <p class="price"><?php echo $product->get_price_html(); ?></p>
                            </div>
                        <?php
                    }
                } else{
	                wc_get_template_part( 'content', 'product' );
                }
		    ?>
	    <?php endforeach; ?>
	    <?php woocommerce_product_loop_end(); ?>
    </div>
<?php endif;
wp_reset_postdata();
