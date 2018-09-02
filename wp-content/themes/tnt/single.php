<?php
    get_header();
?>
<div class="single">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
	            <?php
                    while ( have_posts() ) : the_post();
                        get_template_part( 'template-parts/post/content', get_post_format() );
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;
                        the_post_navigation( array(
                            'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'twentyseventeen' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Previous', 'twentyseventeen' ) . '</span> <span class="nav-title"><span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '</span>%title</span>',
                            'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'twentyseventeen' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Next', 'twentyseventeen' ) . '</span> <span class="nav-title">%title<span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ) . '</span></span>',
                        ) );
                    endwhile;
	            ?>
            </div>
        </div>

    </div>
</div>
<?php get_footer();
