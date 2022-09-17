<?php
/*
Template Name: News
*/
get_header();

$args = array(
    'posts_per_page' => 10,
    'post_type' => 'news'
);

$query = new WP_Query( $args );?>

<section id="primary" class="content-area col-sm-12 col-lg-8">
		<div id="main" class="site-main" role="main">
			<?php if ( $query->have_posts() ) {
                while ( $query->have_posts() ) {
                    $query->the_post();
                    get_template_part( 'template-parts/content', 'news' );
                }
            }
            else {
                // Постов не найдено
            }?>
		</div><!-- #main -->
	</section><!-- #primary -->

<?php
get_sidebar();
get_footer();