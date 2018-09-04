<?php get_header(); ?>
<?php
while ( have_posts() ) : the_post();
    the_content();
    if ( comments_open() || get_comments_number() ) :
        comments_template();
    endif;
    the_post_navigation( array(
        'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'twentyseventeen' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Previous', 'twentyseventeen' ) . '</span> <span class="nav-title"><span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '</span>%title</span>',
        'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'twentyseventeen' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Next', 'twentyseventeen' ) . '</span> <span class="nav-title">%title<span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ) . '</span></span>',
    ) );
endwhile;
?>

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
