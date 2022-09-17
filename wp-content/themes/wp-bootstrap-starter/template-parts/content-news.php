<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */
$thumbnail_id = carbon_get_post_meta( get_the_ID(), 'img_news');
$thumbnail_url = wp_get_attachment_image_url( $thumbnail_id );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>class="post_class">
	<?php
	$enable_vc = get_post_meta(get_the_ID(), '_wpb_vc_js_status', true);
	if(!$enable_vc ) {
		?>
		<header class="entry-header">
			<h3><?php echo carbon_get_post_meta( get_the_ID(), 'title_news' );?></h3>
		</header><!-- .entry-header -->
	<?php }
	?>
	<div class="entry-content">
		<img src="<?php echo $thumbnail_url; ?>" alt="" />
		<div class="">
			<?php
			echo carbon_get_post_meta( get_the_ID(), 'textarea_news' );
			?>
		</div>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() && !$enable_vc ) : ?>
		<footer class="entry-footer">

			<?php
			echo carbon_get_post_meta( get_the_ID(), 'date_news' );

			edit_post_link(
				sprintf(
				/* translators: %s: Name of current post */
					esc_html__( 'Edit %s', 'wp-bootstrap-starter' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
		<hr>
	<?php endif; ?>
</article><!-- #post-## -->
