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
						<h1 class="entry-title">Contact</h1>
						<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis consequatur quas, repellat, nemo atque rem laudantium, inventore voluptates molestiae dicta ad repudiandae possimus eaque qui facilis. Ad perspiciatis dolorem blanditiis.</p>
					</div>
				</section>

				<section class="contact-grid">
					<div class="container">
						<form action="submit.php" method="post">
							<div class="inputs">
								<input type="text" class="input" name="fname" id="fname">
								<input type="text" class="input" name="lname" class="name-input" id="lname">
								<input type="number" class="input" name="number" id="number">
								<input type="email" class="input" name="email" id="email">
							</div>
							<textarea name="message" class="message" id="" cols="30" rows="10"></textarea>
							<button type="submit" value="Submit" class="cta"></button>
						</form>
					</div>
				</section>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
