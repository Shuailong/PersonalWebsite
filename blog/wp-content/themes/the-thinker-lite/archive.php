<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Thinker
 */
get_header(); ?>
    <div class="page hfeed site center">
        <div class="main site-main archive">
            <div class="c-pass">
            <div class="f-center">
                <span class="pass-small red"></span>
                <span class="pass-small purple"></span>
                <span class="pass-small blue"></span>
                <span class="pass-small green"></span>
                <span class="pass-small yellow"></span>
            </div>
            </div>
			<?php if ( have_posts() ) : ?>
                <h1 class="page-title">
                <?php
                    if ( is_category() ) :
                        single_cat_title();
                    elseif ( is_tag() ) :
                        single_tag_title();
                    elseif ( is_author() ) :
                        printf( __( 'Author: %s', 'thinker' ), '<span class="vcard">' . get_the_author() . '</span>' );
                    elseif ( is_day() ) :
                        printf( __( 'Day: %s', 'thinker' ), '<span>' . get_the_date() . '</span>' );
                    elseif ( is_month() ) :
                        printf( __( 'Month: %s', 'thinker' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'thinker' ) ) . '</span>' );
                    elseif ( is_year() ) :
                        printf( __( 'Year: %s', 'thinker' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'thinker' ) ) . '</span>' );
                    elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
                        _e( 'Asides', 'thinker' );
                    elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) :
                        _e( 'Galleries', 'thinker' );
                    elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
                        _e( 'Images', 'thinker' );
                    elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
                        _e( 'Videos', 'thinker' );
                    elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
                        _e( 'Quotes', 'thinker' );
                    elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
                        _e( 'Links', 'thinker' );
                    elseif ( is_tax( 'post_format', 'post-format-status' ) ) :
                        _e( 'Statuses', 'thinker' );
                    elseif ( is_tax( 'post_format', 'post-format-audio' ) ) :
                        _e( 'Audios', 'thinker' );
                    elseif ( is_tax( 'post_format', 'post-format-chat' ) ) :
                        _e( 'Chats', 'thinker' );
                    else :
                        _e( 'Archives', 'thinker' );
                    endif;
                ?>
                </h1>
                <?php
                // Show an optional term description.
                $term_description = term_description();
                if ( ! empty( $term_description ) ) :
                    printf( '<div class="taxonomy-description">%s</div>', $term_description );
                endif;
            ?>
        </div><!-- #main -->
    </div><!-- .page -->
    <div class="page layout hfeed site defaulttemplate">
        <div class="main site-main">
            <section id="primary" class="content-area">
                <div id="content" class="site-content" role="main">
                <?php /* Start the Loop */ ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php
                            /* Include the Post-Format-specific template for the content.
                             * If you want to override this in a child theme, then include a file
                             * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                             */
                            get_template_part( 'content', get_post_format() );
                        ?>
                    <?php endwhile; ?>
                    <?php thinker_content_nav( 'nav-below' ); ?>
                <?php else : ?>
                    <?php get_template_part( 'content', 'none' ); ?>
                <?php endif; ?>
                </div><!-- #content -->
            </section><!-- #primary -->
            <?php get_sidebar(); ?>
        </div><!-- #main -->
    </div><!-- .page -->
<?php get_footer(); ?>