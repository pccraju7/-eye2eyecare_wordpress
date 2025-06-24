<?php
	/**
		* Template Name: Home Template
		* Template Post Type: post, page
		*
		* @package WordPress
		* @subpackage Twenty_Twenty
		* @since Twenty Twenty 1.0
	*/
	
	get_header();
?>

<!-- Hero Section -->
<section class="hero" style="background: url('<?php the_field('hero_bg_image'); ?>') center center / cover no-repeat;">
	<div class="container hero-content">
		<h1 data-aos="zoom-in-up" data-aos-duration="1000">
			<?php the_field('hero_heading'); ?>
		</h1>
		<p data-aos="zoom-in-up" data-aos-duration="1000">
			<?php the_field('hero_subheading'); ?>
		</p>
		<a href="<?php the_field('hero_btn_link'); ?>" class="btn btn-appointment" data-aos="zoom-in-up" data-aos-duration="1000">
			<?php the_field('hero_btn_text'); ?> <i class="bi bi-send-fill ms-2"></i>
		</a>
	</div>
</section>

<section class="about-us-section text-center">
	<div class="container">
		<h2 class="heading" data-aos="zoom-in-up" data-aos-duration="1000">
			<?php the_field('about_heading'); ?>
		</h2>
		<p class="subheading" data-aos="zoom-in-up" data-aos-duration="1000">
			<?php the_field('about_subheading'); ?>
		</p>
		<p class="description" data-aos="zoom-in-up" data-aos-duration="1000">
			<?php the_field('about_description_1'); ?>
		</p>
		<p class="description" data-aos="zoom-in-up" data-aos-duration="1000">
			<?php the_field('about_description_2'); ?>
		</p>
		<a href="<?php the_field('about_btn_link'); ?>" class="btn-read-more" data-aos="zoom-in-up" data-aos-duration="1000">
			<?php the_field('about_btn_text'); ?> <i class="bi bi-send-fill ms-2"></i>
		</a>
	</div>
</section>

<!-- Our Services Section -->
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



<section class="insurance-section">
	<div class="insurance-wrapper">
		<div class="insurance-text" data-aos="zoom-in-up" data-aos-duration="1000">
			<h2><?php the_field('insurance_section_title'); ?></h2>
			<p><?php the_field('insurance_section_description'); ?></p>
			<a href="<?php the_field('insurance_button_link'); ?>" class="btn-md btn-readmore">
				<?php the_field('insurance_button_text'); ?>
				<i class="bi bi-send-fill ms-2"></i>
			</a>
		</div>
		
		<div class="insurance-images">
			<div class="image-box vision">
				<div class="overlay" data-aos="zoom-in-up" data-aos-duration="1000">
					<h3><?php the_field('vision_title'); ?></h3>
					<p><?php the_field('vision_subtitle'); ?></p>
					<a href="<?php echo esc_url(home_url('insurance')); ?>">
							<div class="icon2">➤</div>
						</a>
				</div>
			</div>
			<div class="image-box medical" data-aos="zoom-in-up" data-aos-duration="1000">
				<div class="overlay">
					<h3><?php the_field('medical_title'); ?></h3>
					<p><?php the_field('medical_subtitle'); ?></p>
					<a href="<?php echo esc_url(home_url('insurance')); ?>">
							<div class="icon2">➤</div>
						</a>
				</div>
			</div>
		</div>
	</div>
</section>



<section class="py-5 text-center">
	<div class="container">
		<h2 class="fw-bold mb-2" data-aos="zoom-in-up" data-aos-duration="1000">
			<?php the_field('eyewear_section_title'); ?>
		</h2>
		<p class="text-muted mb-5" data-aos="zoom-in-up" data-aos-duration="1000">
			<?php the_field('eyewear_section_desc'); ?>
		</p>

		<div class="row g-3">
			<!-- Carousel -->
			<div class="col-md-8">
				<div id="raybanCarousel" class="carousel slide carousel-wrapper position-relative" data-bs-ride="carousel" data-aos="zoom-in-up" data-aos-duration="1000">
					<div class="carousel-inner rounded">
						<?php 
							$carousel_images = [
								get_field('carousel_img_1'),
								get_field('carousel_img_2'),
								get_field('carousel_img_3')
							];
							foreach ($carousel_images as $i => $image):
								if ($image):
						?>
							<div class="carousel-item <?php if ($i == 0) echo 'active'; ?>">
								<img src="<?php echo esc_url($image['url']); ?>" class="d-block w-100" alt="<?php echo esc_attr($image['alt']); ?>">
							</div>
						<?php endif; endforeach; ?>
					</div>
					<div class="carousel-indicators">
						<?php for ($i = 0; $i < count($carousel_images); $i++): ?>
							<button type="button" data-bs-target="#raybanCarousel" data-bs-slide-to="<?php echo $i; ?>" <?php if ($i === 0) echo 'class="active" aria-current="true"'; ?>></button>
						<?php endfor; ?>
					</div>
				</div>
			</div>

			<!-- Brand Logos -->
			<?php for ($i = 1; $i <= 4; $i++): 
				$image = get_field("brand_img_$i");
				$alt = get_field("brand_alt_$i");
				if ($image):
			?>
			<div class="col-md-4 col-sm-6 col-6" data-aos="zoom-in-up" data-aos-duration="1000">
				<div class="brand-logo-card position-relative">
					<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($alt); ?>" class="img-fluid" style="max-height: 200px;">
					<div class="icon-circle"><span>➤</span></div>
				</div>
			</div>
			<?php endif; endfor; ?>
		</div>

		<!-- View All Button -->
		<div class="mt-4" data-aos="zoom-in-up" data-aos-duration="1000">
			<a href="<?php the_field('eyewear_view_all_link'); ?>" class="btn btn-dark px-4 py-2 d-inline-flex align-items-center btn-readmore">
				<?php the_field('eyewear_view_all_text'); ?> <i class="bi bi-send-fill ms-2"></i>
			</a>
		</div>
	</div>
</section>



<section class="testimonials-section">
	<div class="container">
		<h2 class="section-title" data-aos="zoom-in-up" data-aos-duration="1000">Real Stories. Real Vision.</h2>
		<p class="section-subtitle" data-aos="zoom-in-up" data-aos-duration="1000">
			Hear directly from patients about their experiences<br>
			and satisfaction with our care.
		</p>
<?php echo do_shortcode( '[grw id=188]' ); ?>
	</div>
</section>


<?php
	get_footer();
