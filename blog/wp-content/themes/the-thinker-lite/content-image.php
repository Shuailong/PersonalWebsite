<?php
/**
 * @package Thinker
 */
?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php if ( has_post_thumbnail() ): ?>
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
        <?php endif; ?>
        <header class="entry-header">
            <?php
                if ( is_single() ) :
                    the_title( '<h1 class="entry-title">', '</h1>' );
                else :
                    the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
                endif;
            ?>
        </header><!-- .entry-header -->
        <?php if ( is_search() ) : // Only display Excerpts for Search ?>
        <div class="entry-summary">
            <?php the_excerpt(); ?>
        </div><!-- .entry-summary -->
        <?php else : ?>
        <div class="entry-content">
            <div class="entry-meta">
                <?php if ( false != get_post_format() ) : ?>
                <span class="entry-format"> <a href="<?php echo esc_url( get_post_format_link( get_post_format() ) ); ?>" title="<?php echo esc_attr( sprintf( __( 'All %s posts', 'thinker' ), get_post_format_string( get_post_format() ) ) ); ?>"><?php echo get_post_format_string( get_post_format() ); ?></a> </span>
                <?php endif; ?>
                <?php edit_post_link( __( 'Edit', 'thinker' ), '<span class="edit-link">', '</span>' ); ?>
                <?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
                <span class="comments-link">
                <?php comments_popup_link( __( 'Leave a comment', 'thinker' ), __( '1 Comment', 'thinker' ), __( '% Comments', 'thinker' ) ); ?>
                </span>
                <?php endif; ?>
                <?php
                    if ( 'post' == get_post_type() )
                        thinker_posted_on();
                ?>
            </div>
            <!-- .entry-meta -->
            <?php the_content( __( 'Read More', 'thinker' ) ); ?>
            <?php
                wp_link_pages( array(
                    'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'thinker' ) . '</span>',
                    'after'       => '</div>',
                    'link_before' => '<span>',
                    'link_after'  => '</span>'
                ) );
            ?>
        </div><!-- .entry-content -->
        <?php endif; ?>
    </article><!-- #post-## -->