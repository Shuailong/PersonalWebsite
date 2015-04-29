<?php
/**
 * The footer widget areas.
 *
 * @package Thinker
 */
?>
<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
    <div class="clear widget-area optional-widget-area footer-widget-area" role="complementary">
        <div class="<?php thinker_widget_counter( 'sidebar-2' ); ?>">
            <?php dynamic_sidebar( 'sidebar-2' ); ?>
        </div>
    </div>
<?php endif; ?>