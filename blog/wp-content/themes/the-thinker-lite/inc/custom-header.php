<?php
/**
 * Sample implementation of the Custom Header feature
 * http://codex.wordpress.org/Custom_Headers
 *
 * You can add an optional custom header image to header.php like so ...

	<?php if ( get_header_image() ) : ?>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
		<img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
	</a>
	<?php endif; // End header image check. ?>

 *
 * @package Thinker
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses thinker_header_style()
 * @uses thinker_admin_header_style()
 * @uses thinker_admin_header_image()
 */
function thinker_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'thinker_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => '000000',
		'width'                  => 2600,
		'height'                 => 400,
		'flex-height'            => true,
		'wp-head-callback'       => 'thinker_header_style',
		'admin-head-callback'    => 'thinker_admin_header_style',
		'admin-preview-callback' => 'thinker_admin_header_image',
	) ) );
}
add_action( 'after_setup_theme', 'thinker_custom_header_setup' );

if ( ! function_exists( 'thinker_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see thinker_custom_header_setup().
 */
function thinker_header_style() {
	$header_text_color = get_header_textcolor();

	// If no custom options for text are set, let's bail
	// get_header_textcolor() options: HEADER_TEXTCOLOR is default, hide text (returns 'blank') or any hex value
	if ( HEADER_TEXTCOLOR == $header_text_color ) {
		return;
	}

	// If we get this far, we have custom styles. Let's do this.
	?>
	<style type="text/css">
	<?php
		// Has the text been hidden?
		if ( 'blank' == $header_text_color ) :
	?>
		.site-title,
		.site-description {
			position: absolute;
			clip: rect(1px, 1px, 1px, 1px);
		}
	<?php
		// If the user has set a custom color for the text use that
		else :
	?>
	.site-description {
			color: #<?php echo $header_text_color; ?>;
		}
	<?php endif; ?>
	</style>
	<?php
}
endif; // thinker_header_style

if ( ! function_exists( 'thinker_admin_header_style' ) ) :
/**
 * Styles the header image displayed on the Appearance > Header admin panel.
 *
 * @see thinker_custom_header_setup().
 */
function thinker_admin_header_style() {
?>
	<style type="text/css">
		.appearance_page_custom-header #headimg {
			border: none;
		}
		#headimg h1,
		#desc {
			text-align: center;
			font-family: 'Libre Baskerville', Georgia, serif;
		}
		#headimg h1 {
			clear: both;
			font-size: 40px;
		}
		#headimg h1 a {
			text-decoration: none;
			color: #000;
		}
		#desc {
			font-size: 14px;
			color: #707070;
			font-weight: 400;
			letter-spacing: .1em;
		}
		#headimg img {
			display: block;
			margin: 0 auto 15px auto;
		}
	</style>
<?php
}
endif; // thinker_admin_header_style

if ( ! function_exists( 'thinker_admin_header_image' ) ) :
/**
 * Custom header image markup displayed on the Appearance > Header admin panel.
 *
 * @see thinker_custom_header_setup().
 */
function thinker_admin_header_image() {
	$style = sprintf( ' style="color:#%s;"', get_header_textcolor() );
?>
	<div id="headimg">
		<?php if ( get_header_image() ) : ?>
            <img src="<?php header_image(); ?>" alt="">
		<?php endif; ?>
		<h1 class="displaying-header-text"><a id="name" onclick="return false;" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
		<div class="displaying-header-text" id="desc"<?php echo $style; ?>><?php bloginfo( 'description' ); ?></div>
	</div>
<?php
}
endif; // thinker_admin_header_image