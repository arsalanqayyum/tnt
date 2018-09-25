<?php get_header(); ?>
    <div class="container">
        <div class="page--search">
            <div class="row">
                <div class="col-sm-12">
                    <?php if ( have_posts() ) : ?>
                        <h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentyseventeen' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
                    <?php else : ?>
                        <h1 class="page-title"><?php _e( 'Nothing Found', 'twentyseventeen' ); ?></h1>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <?php
                if ( have_posts() ) :
                    while ( have_posts() ) : the_post();
                        get_template_part( 'template-parts/post/content', 'excerpt' );
                    endwhile;
                    the_posts_pagination( array(
                        'prev_text' => twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'twentyseventeen' ) . '</span>',
                        'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'twentyseventeen' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ),
                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyseventeen' ) . ' </span>',
                    ) );
                else : ?>
                    <p class="text-center"><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'twentyseventeen' ); ?></p>
                    <div class="text-center">
                        <?php get_search_form(); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>

    </div>
<?php
get_footer();
