<?php
/**
 * The main template file.
 *
 * @package Hewy_starter_theme
 *
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
					<!-- Hero Section -->
					<section class="hero">
						<div class="hero-slide">
							<div class="slide" style="background-image: url('<?php echo $thumb['0'];?>'),linear-gradient(-180deg, rgba(255, 255, 255, 0.6), rgba(0,0,0,0.5)); background-size: cover; background-position: center; background-blend-mode: multiply;"></div>
							<div class="slide" style="background-image: url('<?php echo $thumb['0'];?>'),linear-gradient(-180deg,rgba(255, 255, 255, 0.6), rgba(0,0,0,0.5)); background-size: cover; background-position: center; background-blend-mode: multiply;"></div>
							<div class="slide" style="background-image: url('<?php echo $thumb['0'];?>'),linear-gradient(-180deg, rgba(255, 255, 255, 0.6), rgba(0,0,0,0.5)); background-size: cover; background-position: center; background-blend-mode: multiply;"></div>
						</div>
						<div class="hero-text">
							<h1 class="hero-title">The Studio</h1>
							<h2 class="hero-subtitle">Make-Up Artist and Microblading Specialist</h2>
						</div>
					</section>
					<!-- About Section -->
					<section class="about">
						<div class="container">
							<div class="profile-container">
								<h2 class="about-title"><span>About </span><br/>Taylor Oxberry</h2>
								<div class="about-image">
									<img src="<?php echo get_template_directory_uri();?>/assets/images/taylor2.png" class="taylor" id="taylor"/>
								</div>
							</div>

							<div class="about-bio">
								<h3 class="about-title">TKO</h3>
								<p>After finshing college, I realised that there was more than just an interest building up inside me with Make up. At this point I was doing private work for friends and family, but after I finished my degree at the University of Brighton in 2017 I founded The Studio in my home town in Maldon.</p>
								<h3 class="about-title">The Studio</h3>
								<p>The Studio is the base where Taylor Oxberry(TKO) operates from, She is an ABT accredited MUA specialising in Microblading, Weddings, Theatrical and Special Occasion Makeup.</p>
							</div>
						</div><!-- end of container -->
					</section>

					<section class="services">
						<div class="container">
						<h1>Services</h1>
						<p>Below are the services that I provide, If something is missing you are looking for or would like some information on my services, please feel free to contact me.</p>
						<div class="services-box">
							<div class="service-wrapper">
								<div class="image-wrap">
									<img src="<?php echo get_template_directory_uri();?>/assets/images/micro3.png" class="service-image"/>
									<h3>Microblading</h3>
								</div>
							</div>
							<div class="service-wrapper">
								<div class="image-wrap">
									<img src="<?php echo get_template_directory_uri();?>/assets/images/weddings.jpg" class="service-image"/>
									<h3>Weddings</h3>
								</div>
							</div>
							<div class="service-wrapper">
								<div class="image-wrap">
									<img src="<?php echo get_template_directory_uri();?>/assets/images/skull.jpg" class="service-image"/>
									<h3>Special Occasion</h3>
								</div>
							</div>
							<div class="service-wrapper">
								<div class="image-wrap">
									<img src="<?php echo get_template_directory_uri();?>/assets/images/skull.jpg" class="service-image"/>
									<h3>Theatrical</h3>
								</div>
							</div>
						</div>
					</section>
					<section class="portfolio">
						<div class="container">
							<h1>View my <br/><span>portfolio</span></h1>
						</div>
						<div class="wrapper">
							<div class="portfolio-slider">
								<div class="portfolio-slide" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/images/skull.jpg')">
								</div>
								<div class="portfolio-slide" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/images/skull.jpg')">
								<div class="portfolio-slide" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/images/skull.jpg')"></div>
							</div>
							<div class="text-overlay">
								<a href="#">view all</a>
							</div>
						</div>
					</section>
				</article><!-- #post-## -->

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
