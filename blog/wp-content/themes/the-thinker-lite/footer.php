<?php
/**
 * The template for displaying the footer.
 *
 * Contains the footer content
 *
 * @package Thinker
 */
?>
    <div class="footer">
        <div class="page hfeed site">
            <div class="footerwidgets">
				<?php get_sidebar( 'footer' ); ?>
            </div><!-- .footerwidgets -->
        </div><!-- .page -->
    </div><!-- .footer -->
    <footer id="colophon" class="site-footer clear" role="contentinfo">
        <div class="page hfeed site">
            <div class="site-info">
                <a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'thinker' ); ?>"><?php printf( __( 'Proudly powered by %s', 'thinker' ), 'WordPress' ); ?></a>
                <span class="sep"> | </span>
                <?php printf( __( 'Theme: %1$s by %2$s.', 'thinker' ), 'The Thinker Lite', '<a href="http://www.anarieldesign.com/the-thinker-lite-free-wordpress-theme/">Anariel Design</a>' ); ?>  
            </div>
            <!-- .site-info -->
            <?php if ( has_nav_menu( 'social' ) ) : // Check if there's a menu assigned to the 'social' location. ?>
            <?php wp_nav_menu(
                array(
                    'theme_location'  => 'social',
                    'container'       => 'div',
                    'container_id'    => 'menu-social',
                    'container_class' => 'menusocial',
                    'menu_id'         => 'menu-social-items',
                    'menu_class'      => 'menu-items',
                    'depth'           => 1,
                    'link_before'     => '<span class="text">',
                    'link_after'      => '</span>',
                    'fallback_cb'     => '',
                )
            ); ?>
		  <?php endif; // End check for menu. ?>
        </div><!-- #page -->
    </footer><!-- #colophon -->
    <?php wp_footer(); ?>
</body></html>