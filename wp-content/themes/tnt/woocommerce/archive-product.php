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
        <div class="sidebar">
            <div class="row">
                <div class="col-lg-2 col-md-2 cat">
                    <p class="side-head">Categories</p>
                    <ul class="list-unstyled cats">
                        <li><a href="">wordpress<span>1,614</span></a></li>
                        <li><a href="">site template<span>1,133</span></a></li>
                        <li><a href="">PSD template<span>394</span></a></li>
                        <li><a href="">marketing<span>194</span></a></li>
                        <li><a href="">CMS themes<span>184</span></a></li>
                    </ul>
                    <hr>
                    <p class="side-head">tags</p>
                    <ul class="list-unstyled Checkboxes">
                        <li><label class="myCheckbox">
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <p>wordpress</p><span>1,614</span>
                        </li>
                        <li>
                            <label class="myCheckbox">
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <p>site template</p><span>1,133</span>
                        </li>
                        <li>
                            <label class="myCheckbox">
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <p>PSD template</p><span>394</span>
                        </li>
                        <li>
                            <label class="myCheckbox">
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <p>marketing</p><span>194</span>
                        </li>
                        <li>
                            <label class="myCheckbox">
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <p>CMS themes</p><span>184</span>
                        </li>
                    </ul>
                    <hr>

                    <p class="side-head">sizes</p>
                    <ul class="list-unstyled sizes">
                        <li><label class="myradiobtn">
                                <input type="radio" name="size">
                                <span class="radiomark"></span>
                            </label>
                            <p>wordpress</p><span>1,614</span>
                        </li>
                        <li>
                            <label class="myradiobtn">
                                <input type="radio" name="size">
                                <span class="radiomark"></span>
                            </label>
                            <p>site template</p><span>1,133</span>
                        </li>
                        <li>
                            <label class="myradiobtn">
                                <input type="radio" name="size">
                                <span class="radiomark"></span>
                            </label>
                            <p>PSD template</p><span>394</span>
                        </li>
                        <li>
                            <label class="myradiobtn">
                                <input type="radio" name="size">
                                <span class="radiomark"></span>
                            </label>
                            <p>marketing</p><span>194</span>
                        </li>
                        <li>
                            <label class="myradiobtn">
                                <input type="radio" name="size">
                                <span class="radiomark"></span>
                            </label>
                            <p>CMS themes</p><span>184</span>
                        </li>
                    </ul>

                </div>

                <div class="col-lg-10 col-md-10 col-sm-12">
                    <div class="right-side category-details">
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

                        <div class="row">
                            <div class="col-lg-3 col-sm-4 col-sm-6 col-xs-12">
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
                            </div>

                            <div class="col-lg-3 col-sm-4 col-sm-6 col-xs-12">
                                <div class="hover">
                                    <img src="images/img3.jpg" class="img-responsive">
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
                                        <li><i class="fa fa-star-half-empty"></i></li>
                                        <li><i class="fa fa-star-o"></i></li>
                                    </ul>
                                    <p class="price">&pound;187.99</p>
                                    <div class="cart">
                                        <a href=""><i class="fa fa-cart-plus"></i> add to cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-4 col-sm-6 col-xs-12">
                                <div class="hover">
                                    <img src="images/img2.jpg" class="img-responsive">
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
                                        <li><i class="fa fa-star-o"></i></li>
                                        <li><i class="fa fa-star-o"></i></li>
                                    </ul>
                                    <p class="price">&pound;187.99</p>
                                    <div class="cart">
                                        <a href=""><i class="fa fa-cart-plus"></i> add to cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-4 col-sm-6 col-xs-12">
                                <div class="hover">
                                    <img src="images/img1.jpg" class="img-responsive">
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
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <p class="price">&pound;187.99</p>
                                    <div class="cart">
                                        <a href=""><i class="fa fa-cart-plus"></i> add to cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-4 col-sm-6 col-xs-12">
                                <div class="hover">
                                    <img src="images/img5.jpg" class="img-responsive">
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
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <p class="price">&pound;187.99</p>
                                    <div class="cart">
                                        <a href=""><i class="fa fa-cart-plus"></i> add to cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-4 col-sm-6 col-xs-12">
                                <div class="hover">
                                    <img src="images/img6.jpg" class="img-responsive">
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
                                        <li><i class="fa fa-star-o"></i></li>
                                    </ul>
                                    <p class="price">&pound;187.99</p>
                                    <div class="cart">
                                        <a href=""><i class="fa fa-cart-plus"></i> add to cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-4 col-sm-6 col-xs-12">
                                <div class="hover">
                                    <img src="images/img7.jpg" class="img-responsive">
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
                                        <li><i class="fa fa-star-half-empty"></i></li>
                                        <li><i class="fa fa-star-o"></i></li>
                                    </ul>
                                    <p class="price">&pound;187.99</p>
                                    <div class="cart">
                                        <a href=""><i class="fa fa-cart-plus"></i> add to cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-4 col-sm-6 col-xs-12">
                                <div class="hover">
                                    <img src="images/img8.jpg" class="img-responsive">
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
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <p class="price">&pound;187.99</p>
                                    <div class="cart">
                                        <a href=""><i class="fa fa-cart-plus"></i> add to cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-4 col-sm-6 col-xs-12">
                                <div class="hover">
                                    <img src="images/img9.jpg" class="img-responsive">
                                    <div class="overlay">
                                        <ul class="list-inline">
                                            <li><a href=""><i class="glyphicon glyphicon-eye-open"></i></a></li>
                                            <li><a href=""><i class="glyphicon glyphicon-heart-empty"></i></a></li>
                                            <li><a href=""><i class="glyphicon glyphicon-option-vertical"></i></a></li>
                                        </ul>
                                    </div>
                                    <p class="title">Big & Tall Advantage Polo</p>
                                    <p class="price">&pound;187.99</p>
                                    <div class="cart">
                                        <a href=""><i class="fa fa-cart-plus"></i> add to cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-4 col-sm-6 col-xs-12">
                                <div class="hover">
                                    <img src="images/img10.jpg" class="img-responsive">
                                    <div class="overlay">
                                        <ul class="list-inline">
                                            <li><a href=""><i class="glyphicon glyphicon-eye-open"></i></a></li>
                                            <li><a href=""><i class="glyphicon glyphicon-heart-empty"></i></a></li>
                                            <li><a href=""><i class="glyphicon glyphicon-option-vertical"></i></a></li>
                                        </ul>
                                    </div>
                                    <p class="title">Big & Tall Advantage Polo</p>
                                    <p class="price">&pound;187.99</p>
                                    <div class="cart">
                                        <a href=""><i class="fa fa-cart-plus"></i> add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
