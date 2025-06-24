<?php
/**
 * Template Name: Contact Lens Exam Template
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
			<h1 data-aos="zoom-in-up" data-aos-duration="1000">Contact Lens Exam</h1>
			<p data-aos="zoom-in-up" data-aos-duration="1000">Home ➤ Contact Lens Exam</p>
			
		</div>
	</section>
 <section class="cx-eyeexam mb-3 container">
 <p class="cx-eyeexam__text">If you're interested in wearing contact lenses, you'll need a specialized contact lens exam in addition to a standard Routine Eye Exam. Contact lenses require precise measurements and a personalized fitting to ensure they are safe, comfortable, and provide you with clear vision.</p>
        <div class="cx-eyeexam__wrapper">
            <!-- Left‑side imagery -->
            <figure class="cx-eyeexam__media" data-aos="zoom-in-up" data-aos-duration="1000">
                <!-- Main image -->
                <img src="<?php echo get_template_directory_uri(); ?>/images/contact-lenses.jpg" alt="Optometrist examining a patient"
                    class="cx-eyeexam__main-img" />
                <!-- Overlapping (smaller) image -->
                <img src="<?php echo get_template_directory_uri(); ?>/images/lens-exam.png"
                    alt="Patient looking through a phoropter" class="cx-eyeexam__sub-img" />
            </figure>
            <!-- Right‑side copy -->
			
            <div class="cx-eyeexam__content">
			
                <h2 class="cx-eyeexam__title" data-aos="zoom-in-up" data-aos-duration="1000">What Is a Contact Lens Exam?</h2>
                <p class="cx-eyeexam__text" data-aos="zoom-in-up" data-aos-duration="1000">
                   A contact lens exam is designed specifically to evaluate your eyes for contact lens wear. This includes checking your vision and eye health, but also involves additional testing to determine which type of contact lenses will work best for your eyes and lifestyle.
The doctor will assess the shape and curvature of your cornea, check your tear film quality to make sure your eyes can stay comfortably hydrated while wearing lenses, and evaluate the overall health of your eyes for contact lens use. Based on these results, the doctor will recommend lenses that match your vision needs and eye structure—whether you need soft lenses, rigid gas permeable lenses, toric lenses for astigmatism, or multifocal lenses for presbyopia.

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
                        <span class="accordion-header-text">Why You Need a Separate Contact Lens Prescription?</span>
                        <svg class="accordion-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                    </button>
                    <div class="accordion-content">
                        <p>
                            Your glasses and contact lens prescriptions are not the same. Contact lenses sit directly on your eyes, while glasses sit a short distance away, so the power and measurements must be adjusted accordingly. A contact lens prescription also includes lens brand, curvature (base curve), diameter, and other specifics that are unique to contact lenses.
                        </p>
                    </div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-header">
                        <span class="accordion-header-text">Ready to Try Contacts?</span>
                        <svg class="accordion-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                    </button>
                    <div class="accordion-content">
                        <p>
                            Whether you're interested in wearing contact lenses full time or just for special occasions, we offer a range of options tailored to your lifestyle and vision needs. From daily disposables and extended-wear lenses to specialty contacts for astigmatism or presbyopia, we’ll help you find the right fit.

                        </p>
                        <p>
                            If you’re already a contact lens wearer, it's still important to have regular exams to ensure your lenses continue to fit well and your eyes stay healthy.

                        </p>
                    </div>
                </div>
                
            </div>
            <!-- Right Image Area -->
            <div class="image-wrapper" data-aos="fade-left" data-aos-duration="1000">
                <img src="<?php echo get_template_directory_uri(); ?>/images/contact-lens-exam.jpg" alt="Eye examination" class="responsive-image"
                    onerror="this.onerror=null;this.src='https://placehold.co/600x400/cccccc/333333?text=Image+Not+Found';">
            </div>
        </div>
    </section>
<?php
get_footer();
