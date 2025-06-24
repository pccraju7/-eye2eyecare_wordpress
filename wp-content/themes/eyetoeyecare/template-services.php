<?php
/**
 * Template Name: Services Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<!-- Page Header Start -->
    !-- Page Header Start -->
  <section class="hero1">
		<div class="container hero-content">
			<h1 data-aos="zoom-in-up" data-aos-duration="1000">Services</h1>
			<p data-aos="zoom-in-up" data-aos-duration="1000">Home ➤ Services</p>
			
		</div>
	</section>

<section class="our-services">
	<div class="container">
		<h2 class="section-title" data-aos="zoom-in-up" data-aos-duration="1000">
			<?php the_field('services_section_title'); ?>
		</h2>
		<p class="section-subtitle" data-aos="zoom-in-up" data-aos-duration="1000">
			<?php the_field('services_section_subtitle'); ?>
		</p>

		<div class="services-grid">
			<?php for ($i = 1; $i <= 6; $i++): 
    $slug = get_field('service_' . $i . '_link'); // slug only
    $url = home_url('/' . $slug); // convert to full URL
?>
    <a href="<?php echo esc_url($url); ?>" class="service-item" data-aos="zoom-in-up" data-aos-duration="1000">
        <img src="<?php the_field('service_' . $i . '_image'); ?>" alt="<?php the_field('service_' . $i . '_title'); ?>">
        <div class="service-content">
            <span class="service-number"><?php the_field('service_' . $i . '_number'); ?></span>
            <h3><?php the_field('service_' . $i . '_title'); ?></h3>
            <img style="height:30px; width:30px;" src="<?php echo get_template_directory_uri(); ?>/images/arrow-icon.png" alt="">
        </div>
    </a>
<?php endfor; ?>
		</div>

		<a href="<?php the_field('services_viewall_link'); ?>" class="view-all-button">
			<?php the_field('services_viewall_text'); ?><i class="bi bi-send-fill ms-2"></i>
		</a>
	</div>
</section>


<?php
get_footer();
