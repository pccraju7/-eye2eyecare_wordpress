<?php
/**
 * Template Name: Comprehensive-eye-exam Template
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
			<h1 data-aos="zoom-in-up" data-aos-duration="1000">Comprehensive-Eye-Exam</h1>
			<p data-aos="zoom-in-up" data-aos-duration="1000">Home ➤ Comprehensive-Eye-Exam</p>
			
		</div>
	</section>
 <section class="cx-eyeexam mb-3 container-fluid">
        <div class="cx-eyeexam__wrapper">
            <!-- Left‑side imagery -->
            <figure class="cx-eyeexam__media" data-aos="zoom-in-up" data-aos-duration="1000">
                <!-- Main image -->
                <img src="<?php echo get_template_directory_uri(); ?>/images/woman-getting-eye-exam.jpg" alt="Optometrist examining a patient"
                    class="cx-eyeexam__main-img" />
                <!-- Overlapping (smaller) image -->
                <img src="<?php echo get_template_directory_uri(); ?>/images/examined-visual-test-using-bifocal-optometry-eyesight.jpg"
                    alt="Patient looking through a phoropter" class="cx-eyeexam__sub-img" />
            </figure>
            <!-- Right‑side copy -->
            <div class="cx-eyeexam__content">
                <h2 class="cx-eyeexam__title" data-aos="zoom-in-up" data-aos-duration="1000">What Is a Comprehensive Eye
                    Exam?</h2>
                <p class="cx-eyeexam__text" data-aos="zoom-in-up" data-aos-duration="1000">
                    A comprehensive eye exam is more than just a vision check—it’s a complete assessment of your eye health and visual system. During the exam, the doctor evaluates how well you see, checks for prescription needs, and looks for any early signs of eye conditions or general health issues that may show up in the eyes. Whether you're experiencing changes in your vision or just maintaining your routine care, this type of exam helps ensure your eyes stay healthy for the long term.
                </p>
            </div>
        </div>
    </section>
    
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
                            Comprehensive eye exams do more than help you see clearly. They are essential for detecting
                            diseases and conditions that can develop without noticeable symptoms. Many eye conditions
                            can be treated or managed effectively when caught early. In some cases, the doctor may even
                            spot signs of health issues such as high blood pressure or diabetes during the
                            exam—sometimes before you or your primary care physician are aware of them.
                        </p>
                    </div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-header">
                        <span class="accordion-header-text">How Often Should You Schedule One?</span>
                        <svg class="accordion-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                    </button>
                    <div class="accordion-content">
                        <p>
                            Regular eye exams are essential for children, even if they don't show signs of vision problems. Good vision is crucial for learning, as about 80% of what kids learn in school is visual. Since children often don’t realize they have a vision issue, early eye checks can catch problems like nearsightedness, astigmatism, or lazy eye before they affect learning, sports, or social activities. Early detection improves treatment outcomes, as the visual system is still developing until around age 7. Eye exams are recommended at 6–12 months, age 3, before school, and then every year.
                        </p>
                        <p>
                            For most adults between the ages of 18 and 60, an eye exam every year is recommended. If you’re over 60 or have certain risk factors—such as diabetes, a family history of eye disease, or existing vision problems—you should schedule annual exams. Children should have their eyes checked at least once before starting school and continue with regular exams as recommended by the doctor.

                        </p>
                    </div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-header">
                        <span class="accordion-header-text">What Else Should You Know?</span>
                        <svg class="accordion-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                    </button>
                    <div class="accordion-content">
                        <p>
                           A comprehensive eye exam is a painless, straightforward process that usually takes between 30 and 60 minutes. If dilation is needed, your vision may be blurry and sensitive to light for a few hours afterward, so consider bringing sunglasses or arranging for someone to drive you home.

                        </p>
                        <p>
                           Before your visit, it’s helpful to bring your current glasses or contact lenses, a list of any medications you’re taking, and your insurance information. If you have any questions or concerns, your eye care team will be happy to walk you through the process and explain each step along the way. 
                        </p>
                    </div>
                </div>
            </div>
            <!-- Right Image Area -->
            <div class="image-wrapper" data-aos="fade-left" data-aos-duration="1000">
                <img src="<?php echo get_template_directory_uri(); ?>/images/eye-exam-side.jpg" alt="Eye examination" class="responsive-image"
                    onerror="this.onerror=null;this.src='https://placehold.co/600x400/cccccc/333333?text=Image+Not+Found';">
            </div>
        </div>
  
<?php
get_footer();
