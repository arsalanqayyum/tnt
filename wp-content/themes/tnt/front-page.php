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
$new_arrivals = get_posts([
    'post_type'             => 'product',
    'post_status'           => 'publish',
    'posts_per_page'        => '12',
    'tax_query'             => [
        [
            'taxonomy'      => 'product_cat',
            'field'         => 'term_id',
            'terms'         => 30,
            'operator'      => '='
        ]
    ]
]);
$best_selling = get_posts([
    'post_type' => 'product',
    'meta_key' => 'total_sales',
    'orderby' => 'meta_value_num',
    'posts_per_page' => 12,
]);
if($sliders != null){ ?>
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
<?php } ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>most popular <span>products</span></h1>
                <div class="brdr"></div>
            </div>
        </div>
        <div class="row products--top-rated">
            <?php echo do_shortcode('[top_rated_products per_page="8"] '); ?>
        </div>
    </div>
    <hr>
<?php if($new_arrivals != null){ ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <h1>New <span> arrivals</span></h1>
                <div class="brdr"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="owl">
                    <div id="owl-demo">
                        <?php foreach ($new_arrivals as $new_arrival){ ?>
                            <div class="item">
                                <img src="<?php echo get_the_post_thumbnail_url($new_arrival->ID, 'thumbnail_500') ?>" class="img-responsive">
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } if($best_selling != null){ ?>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>best <span>seller</span></h1>
                <div class="brdr"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="discount">
                    <h2>get discount upto 50% off</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur at commodi cum dignissimos doloremque
                        dolorum eaque earum eius error explicabo laudantium magnam neque nulla, porro quis quos saepe ut voluptatem.
                    </p>
                </div>
            </div>
            <div class="col-lg-8 col-md-6 col-sm-6">
                <div class="owl">
                    <div id="owl-demo-2">
                        <?php foreach ($best_selling as $item) { ?>
                            <div class="item">
                                <img src="<?php echo get_the_post_thumbnail_url($item->ID, 'thumbnail_500') ?>" class="img-responsive">
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<?php get_footer();
