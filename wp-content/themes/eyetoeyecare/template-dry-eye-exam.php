<?php
	/**
		* Template Name:  Dry Eye Exam  Template
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
		<h1 data-aos="zoom-in-up" data-aos-duration="1000"> Dry Eye Exam</h1>
		<p data-aos="zoom-in-up" data-aos-duration="1000">Home ➤  Dry Eye Exam</p>
		
	</div>
</section>
<section class="cx-eyeexam mb-3 container">
	<p class="cx-eyeexam__text"></p>
	<div class="cx-eyeexam__wrapper">
		<!-- Left‑side imagery -->
		<figure class="cx-eyeexam__media" data-aos="zoom-in-up" data-aos-duration="1000">
			<!-- Main image -->
			<img src="<?php echo get_template_directory_uri(); ?>/images/Dry-and-red-eye.jpg" alt="Optometrist examining a patient"
			class="cx-eyeexam__main-img" />
			<!-- Overlapping (smaller) image -->
			
		</figure>
		<!-- Right‑side copy -->
		
		<div class="cx-eyeexam__content">
			
			<h2 class="cx-eyeexam__title" data-aos="zoom-in-up" data-aos-duration="1000">What Is a Dry Eye Exam?</h2>
			<p class="cx-eyeexam__text" data-aos="zoom-in-up" data-aos-duration="1000">
				A dry eye exam is a specialized evaluation designed to diagnose and manage dry eye disease. While a standard eye exam may touch on dryness symptoms, a dedicated dry eye exam goes deeper. We use advanced diagnostic tools and techniques to assess your tear production, tear film quality, and the overall health of the surface of your eyes.
				If your eyes often feel dry, itchy, irritated, watery, or tired, you may be dealing with dry eye syndrome. A dry eye exam helps us get to the root of the problem so we can provide relief and protect your long-term eye health.
				
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
					<span class="accordion-header-text">What Happens During the Exam?</span>
					<svg class="accordion-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24"
					xmlns="http://www.w3.org/2000/svg">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
						</path>
					</svg>
				</button>
				<div class="accordion-content">
					<p>
						Your visit will start with a detailed conversation about your symptoms, lifestyle, medications, and medical history—all of which can contribute to dry eye. From there, we’ll perform a series of non-invasive tests to evaluate how well your eyes produce and retain tears.
						
					</p>
					<p>
						These may include:
						<ul>
						<li>Measuring your tear quantity and stability</li>
						<li>Checking for signs of inflammation or damage on the surface of the eye</li>
						<li>Examining your eyelid glands (called Meibomian glands) to see if they are blocked or not functioning properly</li>
						</ul>
					</p>
					<p>
					We may also use imaging or special dyes to get a clearer picture of how your tears are interacting with the surface of your eye.

					</p>
				</div>
			</div>
			<div class="accordion-item">
				<button class="accordion-header">
					<span class="accordion-header-text">Why It Matters?</span>
					<svg class="accordion-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24"
					xmlns="http://www.w3.org/2000/svg">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
						</path>
					</svg>
				</button>
				<div class="accordion-content">
					<p>
						Dry eye may sound like a minor issue, but if left untreated, it can lead to discomfort, blurred vision, and even damage to the front of the eye. A proper diagnosis is key to treating the condition effectively. Everyone's dry eye is different, and the right treatment depends on understanding the cause—whether it's inflammation, poor tear quality, gland dysfunction, or something else.
						
					</p>
					
				</div>
			</div>
			<div class="accordion-item">
				<button class="accordion-header">
					<span class="accordion-header-text">Treatment Options</span>
					<svg class="accordion-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24"
					xmlns="http://www.w3.org/2000/svg">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
						</path>
					</svg>
				</button>
				<div class="accordion-content">
					<p>
						Based on your exam results, we’ll develop a personalized treatment plan that may include prescription or over-the-counter eye drops, lifestyle changes, in-office treatments, eyelid hygiene routines, or nutritional support. In some cases, we may recommend advanced options like tear duct plugs or light-based therapy.
						
					</p>
					
				</div>
			</div>
			<div class="accordion-item">
				<button class="accordion-header">
					<span class="accordion-header-text">Don’t Ignore Dry Eyes</span>
					<svg class="accordion-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24"
					xmlns="http://www.w3.org/2000/svg">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
						</path>
					</svg>
				</button>
				<div class="accordion-content">
					<p>
						If you're constantly using artificial tears or noticing persistent discomfort, it’s time to go beyond self-treatment. Schedule a dry eye exam today to get the relief and answers you deserve.
						
					</p>
					
				</div>
			</div>
		</div>
		<!-- Right Image Area -->
		<div class="image-wrapper" data-aos="fade-left" data-aos-duration="1000">
			<img src="<?php echo get_template_directory_uri(); ?>/images/Dry1.jpg" alt="Eye examination" class="responsive-image"
			onerror="this.onerror=null;this.src='https://placehold.co/600x400/cccccc/333333?text=Image+Not+Found';">
		</div>
	</div>
</section>
<?php
	get_footer();
