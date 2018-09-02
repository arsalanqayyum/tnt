<?php get_header(); ?>
<div class="container mt50">
    <div class="row">
        <?php
        while ( have_posts() ) : the_post();
            the_content();
            /*if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
            the_post_navigation( array(
                'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'twentyseventeen' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Previous', 'twentyseventeen' ) . '</span> <span class="nav-title"><span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '</span>%title</span>',
                'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'twentyseventeen' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Next', 'twentyseventeen' ) . '</span> <span class="nav-title">%title<span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ) . '</span></span>',
            ) );*/
        endwhile;
        ?>
    </div>
    <!--<div class="row">
        <div class="col-lg-5 col-md-6 col-sm-12">
            <img id="single" src="images/img1.jpg" class="img-responsive">
            <img id="small" src="images/img1.jpg" style="display: none;">
            <ul class="list-inline single-images">
                <li><img src="images/img2.jpg" class="img-responsive thumbnail"> </li>
                <li><img src="images/img4.jpg" class="img-responsive thumbnail"> </li>
                <li><img src="images/img5.jpg" class="img-responsive thumbnail"> </li>
                <li><img src="images/img7.jpg" class="img-responsive thumbnail"> </li>
            </ul>
            <div>
                <label>Rating</label>
                <div class="progress">
                    <div class="progress-bar progress-bar-danger" role="progressbar"
                         aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                        Average Rating 4 stars
                    </div>
                </div>
                <label>Sales</label>
                <div class="progress">
                    <div class="progress-bar progress-bar-success" role="progressbar"
                         aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                        40% Complete (success)
                    </div>
                </div>
                <label>Available Stock</label>
                <div class="progress">
                    <div class="progress-bar progress-bar-success" role="progressbar" style="width:40%">
                        Sold
                    </div>
                    <div class="progress-bar progress-bar-warning" role="progressbar" style="width:60%">
                        Available
                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-5 col-md-6 col-sm-12 prod-heads">
            <h1>single <span>product 001</span></h1>
            <ul class="list-inline gal-star">
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
            </ul>
            <p class="old-price">&dollar; 99.99</p>
            <p class="new-price">&dollar; 90.99</p>
            <h4>availablilty: <span>in stock</span></h4>
            <h4>product code: <span>000111</span></h4>
            <h4>Tags: <span>men, fashion, T-shirts</span></h4>
            <hr>
            <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, commodi consectetur cupiditate,
                deleniti distinctio doloremque error exercitationem in laborum minima modi non, officia placeat possimus
                sed sint temporibus vero voluptatibus?
                <a>more information <span><i class="glyphicon glyphicon-menu-down"></i></span></a>
            </p>
            <p class="text hide-tab" style="display: none">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, commodi consectetur cupiditate,
                deleniti distinctio doloremque error exercitationem in laborum minima modi non, officia placeat possimus
                sed sint temporibus vero voluptatibus?
            </p>
            <hr>
            <label>Size</label>
            <ul class="list-inline size-align" data-toggle="buttons">
                <li>
                    <label class="btn active">
                        <input type="checkbox" autocomplete="off">
                        <span class="glyphicon glyphicon-ok"></span>
                    </label>
                    <p class="size">small</p>
                </li>
                <li>
                    <label class="btn">
                        <input type="checkbox" autocomplete="off">
                        <span class="glyphicon glyphicon-ok"></span>
                    </label>
                    <p class="size">medium</p>
                </li>
                <li>
                    <label class="btn">
                        <input type="checkbox" autocomplete="off">
                        <span class="glyphicon glyphicon-ok"></span>
                    </label>
                    <p class="size">large</p>
                </li>
                <li>
                    <label class="btn">
                        <input type="checkbox" autocomplete="off">
                        <span class="glyphicon glyphicon-ok"></span>
                    </label>
                    <p class="size">XL</p>
                </li>
                <li>
                    <label class="btn">
                        <input type="checkbox" autocomplete="off">
                        <span class="glyphicon glyphicon-ok"></span>
                    </label>
                    <p class="size">XXL</p>
                </li>
            </ul>
            <hr>
            <label>Color</label>
            <ul class="list-inline colors">
                <li>
                    <span class="blue"></span>
                </li>
                <li>
                    <span class="dark-blue"></span>
                </li>
            </ul>
            <hr>
            <label>Quantity</label>
            <div>
                <form>
                    <div class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value">-</div>
                    <input type="number" id="number" value="0" />
                    <div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value">+</div>
                </form>
            </div>
            <div class="cart cart-align">
                <a href=""><i class="fa fa-cart-plus"></i> add to cart</a>
            </div>
            <div class="cart cart-align">
                <a href=""><i class="fa fa-heart"></i> add to wishlist</a>
            </div>
        </div>

    </div>-->
</div>
<hr>
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Please Login</h4>
            </div>
            <div class="modal-body">
                <form>
                    <label>Email Address or Username</label>
                    <input type="text" placeholder="email or username">
                    <label>Password</label>
                    <input type="password">
                    <button type="submit">PROCEED</button>
                </form>
                <a href="#">New to svc? signup now</a>
            </div>
            <div class="modal-footer">
            </div>
        </div>

    </div>
</div>
<?php get_footer();
