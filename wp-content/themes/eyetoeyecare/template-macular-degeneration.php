<?php
	/**
		* Template Name: Macular Degeneration Template
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
		<h1 data-aos="zoom-in-up" data-aos-duration="1000"> Macular Degeneration</h1>
		<p data-aos="zoom-in-up" data-aos-duration="1000">Home ➤  Macular Degeneration</p>
	</div>
</section>
<section class="cx-eyeexam mb-3 container">
	<p class="cx-eyeexam__text"></p>
	<div class="cx-eyeexam__wrapper">
		<!-- Left‑side imagery -->
		<figure class="cx-eyeexam__media" data-aos="zoom-in-up" data-aos-duration="1000">
			<!-- Main image -->
			<img src="<?php echo get_template_directory_uri(); ?>/images/mascular-degeneration.jpg" alt="Optometrist examining a patient"
			class="cx-eyeexam__main-img" />
			<!-- Overlapping (smaller) image -->
		</figure>
		<!-- Right‑side copy -->
		<div class="cx-eyeexam__content">
			<h2 class="cx-eyeexam__title" data-aos="zoom-in-up" data-aos-duration="1000">What Is Macular Degeneration?</h2>
			<p class="cx-eyeexam__text" data-aos="zoom-in-up" data-aos-duration="1000">
				Macular degeneration—also known as age-related macular degeneration or AMD—affects the macula, the part of the retina responsible for sharp central vision. There are two main types:
				<ul class="cx-eyeexam__text">
					<li>Dry AMD, the more common form, causes gradual vision loss over time.</li>
					<li>Wet AMD is less common but more serious and can lead to faster vision loss due to abnormal blood vessel growth in the retina.
					</li>
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
					<span class="accordion-header-text">Early Detection Matters</span>
					<svg class="accordion-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24"
					xmlns="http://www.w3.org/2000/svg">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
						</path>
					</svg>
				</button>
				<div class="accordion-content">
					<p>
						In its early stages, macular degeneration may not cause noticeable symptoms. That’s why regular eye exams are so important—especially as you age. During an exam, we check for early signs of AMD using specialized imaging and a close evaluation of the retina.
					</p>
					
				</div>
			</div>
			<div class="accordion-item">
				<button class="accordion-header">
					<span class="accordion-header-text">How We Manage It</span>
					<svg class="accordion-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24"
					xmlns="http://www.w3.org/2000/svg">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
						</path>
					</svg>
				</button>
				<div class="accordion-content">
					<p>
						While there is no cure for macular degeneration, early diagnosis and ongoing monitoring can slow its progression and help preserve vision. We offer personalized care plans that may include:
						<ul>
							<li>Nutritional recommendations or supplements (AREDS2 vitamins)</li>
							<li>Monitoring with advanced retinal imaging</li>
							<li>Referrals to retinal specialists for treatment, such as injections, in wet AMD cases</li>
							<li>Low vision aids or lifestyle tips to help you adapt to vision changes</li>
						</ul>
					</p>
					<p>
					If you’ve been diagnosed with AMD—or have a family history of the condition—regular follow-ups are essential to maintaining your vision and quality of life.

					</p>
				</div>
			</div>
			<div class="accordion-item">
				<button class="accordion-header">
					<span class="accordion-header-text">Schedule Your Eye Exam</span>
					<svg class="accordion-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24"
					xmlns="http://www.w3.org/2000/svg">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
						</path>
					</svg>
				</button>
				<div class="accordion-content">
					<p>
						Macular degeneration doesn’t have to mean losing your independence. With early detection and expert care, we can help you manage the condition and protect your vision. Contact us today to schedule your retinal exam.
					</p>
				</div>
			</div>
			
		</div>
		<!-- Right Image Area -->
		<div class="image-wrapper" data-aos="fade-left" data-aos-duration="1000">
			<img src="<?php echo get_template_directory_uri(); ?>/images/eye-macula.png" alt="Eye examination" class="responsive-image"
			onerror="this.onerror=null;this.src='https://placehold.co/600x400/cccccc/333333?text=Image+Not+Found';">
		</div>
	</div>
</section>
<?php
get_footer();