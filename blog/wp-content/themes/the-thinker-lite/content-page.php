<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Thinker
 */
?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="entry-content">
            <?php the_content(); ?>
            <?php
                wp_link_pages( array(
                    'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'thinker' ) . '</span>',
                    'after'       => '</div>',
                    'link_before' => '<span>',
                    'link_after'  => '</span>'
                ) );
            ?>
        </div><!-- .entry-content -->
        <?php edit_post_link( __( 'Edit', 'thinker' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
    </article><!-- #post-## -->