<?php
/**
 * The main template file
 *
 * Template Name: Index
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); 
$args_news = array(
	'posts_per_page' => 3,
	'post_type' => 'news',
	'order'    => 'date',
	'orderby'  => 'ABC',
);
$args_prod = array(
	'posts_per_page' => 3,
	'post_type' => 'products',
	'orderby'  => 'ABC',
);

$query_news = new WP_Query( $args_news );
$query_products = new WP_Query( $args_prod );

?>
	<section id="primary" class="content-area col-sm-12 col-md-12 col-lg-8">
		<div id="main" class="site-main" role="main">
			<?php if ( $query_news->have_posts() ) {
				while ( $query_news->have_posts() ) {
						$query_news->the_post();
						get_template_part( 'template-parts/content', 'news' );
				}
			}
			else {
					echo "Новости отсутствуют";
			}
			wp_reset_postdata( );?>
		</div><!-- #main -->
		<h2>Блок с продуктами</h2>
		<div class="col-md-12 col-lg-8 col-sm-12">
			<?php if ( $query_products->have_posts() ) {
					while ( $query_products->have_posts() ) {
							$query_products->the_post();
							get_template_part( 'template-parts/content', 'product' );
					}
				}
				else {
						echo "Новости отсутствуют";
				}?>

		</div>
	</section><!-- #primary -->

<?php
get_sidebar();
get_footer();
