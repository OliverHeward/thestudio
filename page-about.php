<?php
/**
 * The template for displaying the About Pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

            <section class="entry-header">
                <div class="container">
                    <h1><span>About</span> <br/>Taylor Oxberry</h1>
                    <div class="image-container">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/taylor2.png">
                    </div>
                </div>
            </section>

            <section class="about-section">
                <div class="container">
                    <div class="text-container">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cumque sit nostrum pariatur, laborum repellendus dolorem, quisquam atque omnis quia ipsam mollitia aperiam, natus doloribus. Cupiditate quis nulla nam totam! Perferendis.</p>
                    </div>
                </div>
            </section>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
