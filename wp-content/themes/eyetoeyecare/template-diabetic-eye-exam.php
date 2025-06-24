<?php
	/**
		* Template Name:  Diabetic Eye Exam  Template
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
		<h1 data-aos="zoom-in-up" data-aos-duration="1000"> Diabetic Eye Exam</h1>
		<p data-aos="zoom-in-up" data-aos-duration="1000">Home ➤  Diabetic Eye Exam</p>
	</div>
</section>
<section class="cx-eyeexam mb-3 container">
	<p class="cx-eyeexam__text"></p>
	<div class="cx-eyeexam__wrapper">
		<!-- Left‑side imagery -->
		<figure class="cx-eyeexam__media" data-aos="zoom-in-up" data-aos-duration="1000">
			<!-- Main image -->
			<img src="<?php echo get_template_directory_uri(); ?>/images/Diabetic-Eye-Exam.jpg" alt="Optometrist examining a patient"
			class="cx-eyeexam__main-img" />
			<!-- Overlapping (smaller) image -->
		</figure>
		<!-- Right‑side copy -->
		<div class="cx-eyeexam__content">
			<h2 class="cx-eyeexam__title" data-aos="zoom-in-up" data-aos-duration="1000">What Is a Diabetic Eye Exam?</h2>
			<p class="cx-eyeexam__text" data-aos="zoom-in-up" data-aos-duration="1000">
				A diabetic eye exam is a special type of medical eye exam focused on detecting changes in the eyes caused by diabetes. The most common concern is diabetic retinopathy, a condition that affects the blood vessels in the retina (the light-sensitive layer at the back of the eye). Left untreated, it can lead to vision loss or even blindness—but in many cases, early detection and treatment can prevent serious damage.
				Unlike a routine vision exam, a diabetic eye exam looks closely at the internal structures of the eye to check for signs of bleeding, swelling, or damage to the retina and optic nerve.
				If you have diabetes, taking care of your eyes is just as important as managing your blood sugar. Diabetes can increase your risk for serious eye conditions that may lead to vision loss—but with regular diabetic eye exams, we can catch problems early and help protect your sight.
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
					<span class="accordion-header-text">Why Is It Important?</span>
					<svg class="accordion-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24"
					xmlns="http://www.w3.org/2000/svg">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
						</path>
					</svg>
				</button>
				<div class="accordion-content">
					<p>
						Diabetes often causes eye damage without obvious symptoms in the early stages. You may not notice any changes in your vision until the condition has progressed. That's why annual diabetic eye exams are recommended—even if your vision seems fine.
					</p>
					<p>
						Early detection allows us to take steps to slow or stop the progression of diabetic eye disease. In some cases, we may coordinate care with your primary doctor or endocrinologist to help better manage your overall health.
						
					</p>
					
				</div>
			</div>
			<div class="accordion-item">
				<button class="accordion-header">
					<span class="accordion-header-text">What to Expect During the Exam</span>
					<svg class="accordion-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24"
					xmlns="http://www.w3.org/2000/svg">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
						</path>
					</svg>
				</button>
				<div class="accordion-content">
					<p>
						The exam typically includes:
						<ul>
							<li>A review of your medical history and blood sugar control</li>
							<li>A comprehensive eye health check</li>
							<li>Pupil dilation to allow a better view of the retina and optic nerve</li>
							<li>Retinal imaging or other advanced diagnostic tests if needed</li>
						</ul>
						
					</p>
					<p>
					The dilation may cause temporary light sensitivity or blurred near vision for a few hours, so you may want to bring sunglasses and arrange for someone to drive you home.
					</p>
				</div>
			</div>
			<div class="accordion-item">
				<button class="accordion-header">
					<span class="accordion-header-text">Take Control of Your Eye Health</span>
					<svg class="accordion-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24"
					xmlns="http://www.w3.org/2000/svg">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
						</path>
					</svg>
				</button>
				<div class="accordion-content">
					<p>
						Managing your diabetes is a team effort, and your eyes are an important part of that. Regular diabetic eye exams help protect your vision and keep you on top of your health. If it’s been over a year since your last exam, now is the time to schedule.
					</p>
				</div>
			</div>
			
		</div>
		<!-- Right Image Area -->
		<div class="image-wrapper" data-aos="fade-left" data-aos-duration="1000">
			<img src="<?php echo get_template_directory_uri(); ?>/images/Diabetic-Eye-Exam1.jpg" alt="Eye examination" class="responsive-image"
			onerror="this.onerror=null;this.src='https://placehold.co/600x400/cccccc/333333?text=Image+Not+Found';">
		</div>
	</div>
</section>
<?php
get_footer();