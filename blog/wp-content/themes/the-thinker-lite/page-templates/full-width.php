<?php
/**
 * Template Name: Full Width Page
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
                <?php the_title(); ?>
            </h1>
        </div><!-- #main -->
    </div><!-- .page -->
    <div class="page hfeed site defaulttemplate">
        <div class="main site-main">
			<?php while ( have_posts() ) : the_post(); ?>
            <?php if ( has_post_thumbnail() ): ?>
            <?php the_post_thumbnail(); ?>
            <?php endif; ?>
            <?php get_template_part( 'content', 'page' ); ?>
            <?php
                        // If comments are open or we have at least one comment, load up the comment template
                        if ( comments_open() || '0' != get_comments_number() )
                            comments_template();
                    ?>
            <?php endwhile; // end of the loop. ?>
        </div><!-- #main -->
    </div><!-- .page -->
<?php get_footer(); ?>