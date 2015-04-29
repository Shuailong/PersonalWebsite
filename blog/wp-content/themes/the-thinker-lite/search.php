<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Thinker
 */
get_header(); ?>
    <div class="page hfeed site center">
        <div class="main site-main">
            <div class="c-pass">
            <div class="f-center">
                <span class="pass-small red"></span>
                <span class="pass-small purple"></span>
                <span class="pass-small blue"></span>
                <span class="pass-small green"></span>
                <span class="pass-small yellow"></span>
            </div>
            </div>
            <h1 class="page-title">
                <?php
                    if ( have_posts() ) :
                        printf( __( 'Search Results for: %s', 'thinker' ), '<span>' . get_search_query() . '</span>' );
                    else :
                        _e( 'Nothing Found', 'thinker' );
                    endif;
                ?>
            </h1>
        </div><!-- #main -->
    </div><!-- .page -->
    <div class="page layout hfeed site defaulttemplate">
        <div class="main site-main">
            <section id="primary" class="content-area">
                <div id="content" class="site-content" role="main">
                <?php if ( have_posts() ) : ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php get_template_part( 'content', 'search' ); ?>
                    <?php endwhile; ?>
                    <?php thinker_content_nav( 'nav-below' ); ?>
                <?php else : ?>
                    <?php get_template_part( 'no-results', 'search' ); ?>
                <?php endif; ?>
                </div><!-- #content -->
            </section><!-- #primary -->
			<?php get_sidebar(); ?>
        </div><!-- #main -->
    </div><!-- .page -->
<?php get_footer(); ?>