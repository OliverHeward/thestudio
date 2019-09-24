<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>
        <div class="entry-header">
            <div class="container">
                <h1 class="entry-title">Services</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa natus molestias inventore suscipit explicabo, vero quae perferendis asperiores fugit recusandae, praesentium distinctio. Reprehenderit veniam a rem ducimus magni reiciendis mollitia!</p>
            </div>
        </div>

        <section class="services-grid">
            <div class="container">
            <?php $args = array(
                'post_per_page' => 4,
                'post_type' => 'services',
                'post_status' => 'publish',
            );
            $query = new WP_Query($args);
            if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); {
                ?>
                <a href="<?php echo the_permalink();?>" class="service-link">
                    <div class="service-wrapper" style="background-image: url('<?php echo the_post_thumbnail_url();?>'), linear-gradient(#000, #000)">
                    <div class="shadow-overlay">
                        <h3 class="service-text"><?php echo the_title();?></h3>
                    </div>
                    </div>
                </a> 
            <?php }
            endwhile; endif;
            wp_reset_postdata(); ?>
            </div>
        </section>
        <?php endif; ?>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>