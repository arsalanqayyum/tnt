<?php
    get_header();
    global $post;
    $sliders = get_posts([
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'post_type' => 'slider',
        'orderby' => 'date',
        'order' => 'DESC'
    ]);
    if($sliders != null){
        ?>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <?php foreach ($sliders as $key => $slider){ ?>
                    <li data-target="#myCarousel" data-slide-to="<?php echo $key; ?>" class="<?php echo ($key == 0) ? 'active' : ''; ?>"></li>
                    <?php } ?>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
	                <?php foreach ($sliders as $key => $slider){ $image = get_the_post_thumbnail_url($slider->ID, 'full'); if(!empty($image)){ ?>
                        <div class="item <?php echo ($key == 0) ? 'active' : ''; ?>">
                            <img src="<?php echo $image; ?>" alt="<?php echo $slider->post_title; ?>">
                            <h1><?php echo $slider->post_title; ?></h1>
                            <div class="button">
                                <a href="<?php $url = get_field('detail_url'); echo (!empty($url)) ? $url : 'javascript:void(0);'; ?>">view detail</a>
                            </div>
                        </div>
	                <?php } } ?>
                </div>
                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-menu-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-menu-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
	    <?php
    }
    $top_rated_products = get_posts([
        'post_status' => 'publish',
        'posts_per_page' => 8,
        'post_type' => 'product',
        'meta_key' => '_wc_average_rating',
        'orderby' => 'meta_value_num',
        'order' => 'DESC'
    ]);
//    echo '<pre>'; print_r($top_rated_products); echo '</pre>';
    if($top_rated_products != null){
        ?>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1>most popular <span>products</span></h1>
                    <div class="brdr"></div>
                </div>
            </div>
            <div class="row">
                <?php foreach ($top_rated_products as $key => $top_rated_product){ ?>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="hover">
                        <img src="<?php echo get_the_post_thumbnail_url($top_rated_product->ID); ?>" class="img-responsive">
                        <div class="overlay">
                            <ul class="list-inline">
                                <li><a href=""><i class="glyphicon glyphicon-eye-open"></i></a></li>
                                <li><a href=""><i class="glyphicon glyphicon-heart-empty"></i></a></li>
                                <li><a href=""><i class="glyphicon glyphicon-option-vertical"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <p class="title"><?php echo $top_rated_product->post_title; ?></p>
                    <ul class="list-inline stars">
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star-half-empty"></i></li>
                    </ul>
                    <p class="price">&pound;187.99</p>
                    <div class="cart">
                        <a href=""><i class="fa fa-cart-plus"></i> add to cart</a>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <?php
    }
?>
<?php get_footer();
