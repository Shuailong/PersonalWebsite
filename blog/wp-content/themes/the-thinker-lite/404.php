<?php
/**
 * The template for displaying 404 pages (Not Found).
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
                <?php _e( 'Oops! That page can&rsquo;t be found.', 'thinker' ); ?>
            </h1>
        </div><!-- #main -->
    </div><!-- .page --> 
    <div class="page layout hfeed site defaulttemplate">
        <div class="main site-main">
            <div id="primary" class="content-area full-width">
                <div id="content" class="site-content" role="main">
                    <article id="post-0" class="post error404 not-found">
                        <div class="entry-content">
                            <p><?php _e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'thinker' ); ?></p>
                            <?php get_search_form(); ?>
                            <div class="widget-container">
                                <?php the_widget( 'WP_Widget_Recent_Posts' ); ?>
                                <?php if ( thinker_categorized_blog() ) : // Only show the widget if site has multiple categories. ?>
                                <div class="widget widget_categories">
                                    <h2 class="widgettitle"><?php _e( 'Most Used Categories', 'thinker' ); ?></h2>
                                    <ul>
                                    <?php
                                        wp_list_categories( array(
                                            'orderby'    => 'count',
                                            'order'      => 'DESC',
                                            'show_count' => 1,
                                            'title_li'   => '',
                                            'number'     => 10,
                                        ) );
                                    ?>
                                    </ul>
                                </div><!-- .widget -->
                                <?php endif; ?>
                                <?php
                                /* translators: %1$s: smiley */
                                $archive_content = '<p>' . sprintf( __( 'Try looking in the monthly archives. %1$s', 'thinker' ), convert_smilies( ':)' ) ) . '</p>';
                                the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );
                                ?>
                                <?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>
                            </div><!-- .widget-container -->
                        </div><!-- .entry-content -->
                    </article><!-- #post-0 .post .error404 .not-found -->
                </div><!-- #content -->
            </div><!-- #primary -->
        </div><!-- #main -->
    </div><!-- .page -->
<?php get_footer(); ?>