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
            <h1 class="entry-title"><?php the_title(); ?></h1>
        </header><!-- .entry-header -->
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
        </div><!-- .entry-meta -->
        <div class="entry-content">
            <?php the_content(); ?>
            <?php
                wp_link_pages( array(
                    'before' => '<div class="page-links">' . __( 'Pages:', 'thinker' ),
                    'after'  => '</div>',
                ) );
            ?>
        </div><!-- .entry-content -->
        <footer class="entry-footer">
          <?php
              /* translators: used between list items, there is a space after the comma */
              $category_list = get_the_category_list( __( ', ', 'thinker' ) );
              /* translators: used between list items, there is a space after the comma */
              $tag_list = get_the_tag_list( '', __( ', ', 'thinker' ) );
              if ( ! thinker_categorized_blog() ) {
                  // This blog only has 1 category so we just need to worry about tags in the meta text
                  if ( '' != $tag_list ) {
                      $meta_text = __( 'This entry was tagged %2$s. Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'thinker' );
                  } else {
                      $meta_text = __( 'Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'thinker' );
                  }
              } else {
                  // But this blog has loads of categories so we should probably display them here
                  if ( '' != $tag_list ) {
                      $meta_text = __( 'This entry was posted in %1$s and tagged %2$s. Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'thinker' );
                  } else {
                      $meta_text = __( 'This entry was posted in %1$s. Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'thinker' );
                  }
              } // end check for categories on this blog
              printf(
                  $meta_text,
                  $category_list,
                  $tag_list,
                  esc_url( get_permalink() )
              );
          ?>
          <?php edit_post_link( __( 'Edit', 'thinker' ), '<span class="edit-link">', '</span>' ); ?>
        </footer><!-- .entry-footer -->
    </article><!-- #post-## -->