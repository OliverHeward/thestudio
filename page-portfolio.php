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
                    <div class="item-wrapper Microblading">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/skull.jpg">
                        <div class="text-shadow">
                            <p>Microblading</p>
                        </div>
                    </div>
                    <div class="item-wrapper Weddings">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/skull.jpg">
                        <div class="text-shadow">
                            <p>Weddings</p>
                        </div>
                    </div>
                    <div class="item-wrapper Theatrical">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/skull.jpg">
                        <div class="text-shadow">
                            <p>Theatrical</p>
                        </div>
                    </div>
                    <div class="item-wrapper Special Occasion">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/skull.jpg">
                        <div class="text-shadow">
                            <p>Special Occasion</p>
                        </div>
                    </div>
                </div>
            </section>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
