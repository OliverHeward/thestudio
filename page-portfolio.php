<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

            <section class="entry-header">
                <div class="container">
                    <h1><span>My</span><br/>portfolio</h1>
                </div>
            </section>
            <section class="filter-section">
                <div class="container">
                    <div class="filter-container">
                        <div class="filter">All Photo's</div>
                        <div class="filter">Microblading</div>
                        <div class="filter">Weddings</div>
                        <div class="filter">Theatrical</div>
                        <div class="filter">Special Occasion</div>
                    </div>
                </div>
            </section>

            <section class="portfolio-grid">
                <div class="container">
                    <div id="modal" class="modal">
                        <span class="close">&times;</span>
                        <img class="modal-image" id="img">
                    </div>
                <?php 
                    $args = array (
                            'posts_per_page' => -1,
                            'post_type' => 'gallery',
                            'post_status' => 'publish',
                    );
                    $query = new WP_Query($args);
                    if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); { ?>
                    <?php $cat = get_the_category(); ?>
                        <div class="item-wrapper Microblading" data-title="<?php echo the_title();?>" data-type="<?php echo $cat[0]->cat_name;?>">
                            <img src="<?php the_post_thumbnail_url();?>" id="theImage">
                            <div class="text-shadow">
                                <p><?php echo the_title(); ?></p>
                            </div>
                        </div>
                         <?php } 
                        endwhile; endif;
                        wp_reset_postdata(); ?>
                </div>
            </section>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
    </div><!-- #primary -->

<?php get_footer(); ?>
