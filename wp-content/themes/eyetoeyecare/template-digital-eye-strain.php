<?php
	/**
		* Template Name:   Digital Eye Strain
		* Template Post Type: post, page
		*
		* @package WordPress
		* @subpackage Twenty_Twenty
		* @since Twenty Twenty 1.0
	*/
	
	get_header();
?>

<!-- Page Header Start -->
<section class="hero1">
	<div class="container hero-content">
		<h1 data-aos="zoom-in-up" data-aos-duration="1000">  Digital Eye Strain</h1>
		<p data-aos="zoom-in-up" data-aos-duration="1000">Home ➤   Digital Eye Strain</p>
		
	</div>
</section>
<section class="cx-eyeexam mb-3 container">
	<p class="cx-eyeexam__text" data-aos="zoom-in-up" data-aos-duration="1000">
		In today’s digital world, more people are spending long hours on screens—whether it’s computers, tablets, or smartphones. If you’ve experienced tired eyes, headaches, blurred vision, or neck and shoulder pain after screen time, you may be dealing with Digital Eye Strain, also known as Computer Vision Syndrome.
		
	</p>
	<p class="cx-eyeexam__text"></p>
	<div class="cx-eyeexam__wrapper">
		<!-- Left‑side imagery -->
		<figure class="cx-eyeexam__media" data-aos="zoom-in-up" data-aos-duration="1000">
			<!-- Main image -->
			<img src="<?php echo get_template_directory_uri(); ?>/images/Digital Eye Strain.jpg" alt="Optometrist examining a patient"
			class="cx-eyeexam__main-img" />
			<!-- Overlapping (smaller) image -->
			
		</figure>
		<!-- Right‑side copy -->
		
		<div class="cx-eyeexam__content" data-aos="zoom-in-up" data-aos-duration="1000">
			
			<h2 class="cx-eyeexam__title" >What Causes Digital Eye Strain?</h2>
			<p class="cx-eyeexam__text" data-aos="zoom-in-up" data-aos-duration="1000">
				Digital eye strain happens when your eyes work harder than usual to focus on screens. Factors like poor lighting, screen glare, improper posture, or uncorrected vision can all contribute. When you focus on screens, you also blink less often, which can lead to dryness and irritation.
				
			</p>
			<p class="cx-eyeexam__text">
				Common Symptoms
				<ul class="cx-eyeexam__text">
					<li>Eye fatigue or discomfort</li>
					<li>Blurry vision</li>
					<li>Dry or watery eyes</li>
					<li>Headaches</li>
					<li>Neck and shoulder tension</li>
					<li>Difficulty focusing between near and far distances</li>
				</ul>
			</p>
		</div>
	</div>
</section>
<section class="section-container1">
	<div class="section-container ">
		<!-- Left Content Area (Accordion) -->
		<div class="content-area" data-aos="fade-right" data-aos-duration="1000">
			<div class="accordion-item">
				<button class="accordion-header">
					<span class="accordion-header-text">How We Can Help</span>
					<svg class="accordion-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24"
					xmlns="http://www.w3.org/2000/svg">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
						</path>
					</svg>
				</button>
				<div class="accordion-content">
					<p>
						We offer comprehensive eye exams to evaluate your vision needs and screen for any underlying issues that may be contributing to digital strain. If needed, we can prescribe glasses specifically designed for screen use (often called computer glasses), recommend anti-glare lenses, and provide tips to reduce symptoms—like the 20-20-20 rule (every 20 minutes, look at something 20 feet away for 20 seconds).

						
					</p>
					<p>
						Proper screen ergonomics, lighting adjustments, and taking regular breaks can also make a big difference.

					</p>
					<p>
						We may also use imaging or special dyes to get a clearer picture of how your tears are interacting with the surface of your eye.
						
					</p>
				</div>
			</div>
			<div class="accordion-item">
				<button class="accordion-header">
					<span class="accordion-header-text">Give Your Eyes a Break</span>
					<svg class="accordion-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24"
					xmlns="http://www.w3.org/2000/svg">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
						</path>
					</svg>
				</button>
				<div class="accordion-content">
					<p>
						If your eyes feel tired after a day at the computer, don’t ignore the signs. Digital eye strain is common—but manageable with the right care. Schedule an exam today and let us help you work and see more comfortably.
						
					</p>
					
				</div>
			</div>
			
			
		</div>
		<!-- Right Image Area -->
		<div class="image-wrapper" data-aos="fade-left" data-aos-duration="1000">
			<img src="<?php echo get_template_directory_uri(); ?>/images/eyestrain.jpg" alt="Eye examination" class="responsive-image"
			onerror="this.onerror=null;this.src='https://placehold.co/600x400/cccccc/333333?text=Image+Not+Found';">
		</div>
	</div>
</section>
<?php
	get_footer();
