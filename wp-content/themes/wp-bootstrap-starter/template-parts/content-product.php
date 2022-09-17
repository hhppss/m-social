<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */
$slides = carbon_get_post_meta( get_the_ID(), 'img_slider_product');
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>class="post_class">
	<?php
	$enable_vc = get_post_meta(get_the_ID(), '_wpb_vc_js_status', true);
	if(!$enable_vc ) {
		?>
		<header class="entry-header">
			<h3><?php echo carbon_get_post_meta( get_the_ID(), 'title_product' );?></h3>
		</header><!-- .entry-header -->
	<?php } ?>
	<div class="entry-content">
        <div class="carousel">
	        <?php
	        if ( $slides ) {
		        foreach( $slides as $slide ) {
			        if( ! $slide[ 'img' ] ) {
				        continue;
			        }
			        echo wp_get_attachment_image( $slide[ 'img' ] );
		        }
	        }
	        ?>
        </div>
		<div class="">
			<?php
			echo carbon_get_post_meta( get_the_ID(), 'textarea_product' );
			?>
		</div>
        <div class="product_complect">
            <i>Комплектация продукта: <?php echo carbon_get_post_meta( get_the_ID(), 'comp_product' );?></i>
        </div>
        <div class="product_factory">
            <i>Производитель: <?php echo carbon_get_post_meta( get_the_ID(), 'select_product' );?></i>
        </div>
        <div class="product_price">
            <h4>Стоимость: <?php echo carbon_get_post_meta( get_the_ID(), 'price_product' );?> Руб.</h4>
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
