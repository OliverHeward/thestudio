<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

        <header class="entry-header">
            <div class="hero-image" style="background-image: url('<?php echo the_post_thumbnail_url();?>');">
        </header><!-- .entry-header -->

        <div class="entry-content">
            <div class="container">
                <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            <?php the_content(); ?>
            <?php
                wp_link_pages( array(
                    'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
                    'after'  => '</div>',
                ) );
            ?>
                </div>
                </div>
            <section class="gallery-section">
                <div class="container">
                    <h2>View More <?php echo the_title(); ?> Pieces</h2>
                </div>
                <div class="gallery-services">
                <?php 
                $args = array (
                    'posts_per_page' => 3,
                    'post_type' => 'gallery',
                    'post_status' => 'publish',
                    'category_name' => get_the_title(),
                );
                $query = new WP_Query($args);
                if($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); { ?>
                    <div class="item-wrapper" style="background-image: url('<?php echo the_post_thumbnail_url();?>')"></div>
                <?php }
                endwhile; endif;
                wp_reset_postdata(); ?>
                <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'portfolio' ) ) ); ?>" class="float-cta cta">View More</a>
                </div>
            </section>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>