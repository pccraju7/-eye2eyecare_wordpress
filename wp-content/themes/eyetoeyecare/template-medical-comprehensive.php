<?php
/**
 * Template Name: Medical & Comprehensive Eye Exams Template
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
			<h1 data-aos="zoom-in-up" data-aos-duration="1000"> Difference Between a Medical Eye Exam and a Comprehensive Eye Exam?
</h1>
			<p data-aos="zoom-in-up" data-aos-duration="1000">Home ➤ Medical & Comprehensive Eye Exams</p>
			
		</div>
	</section>
 <h1 class="eyeexam-heading mt-4" data-aos="zoom-in-up" data-aos-duration="1000">Understanding Eye Exams</h1>

  <div class="eyeexam-container">
    <div class="eyeexam-card" data-aos="zoom-in-up" data-aos-duration="1000">
      <h2 class="eyeexam-title" >Comprehensive Eye Exams: For Routine Vision Care</h2>
      <p class="eyeexam-text">A comprehensive eye exam is what most people think of as their yearly checkup. It’s focused on your vision and overall eye health.</p>
      <p class="eyeexam-text">During this exam, we check how well you can see, update your glasses or contact lens prescription if needed, and screen for common eye conditions like glaucoma, cataracts, and macular degeneration.</p>
      <p class="eyeexam-text">These exams are usually covered by <strong>vision insurance</strong> and are part of your regular preventive care.</p>
    </div>

    <div class="eyeexam-card" data-aos="zoom-in-up" data-aos-duration="1000">
      <h2 class="eyeexam-title">Medical Eye Exams: For Eye Problems or Health Conditions</h2>
      <p class="eyeexam-text">A medical eye exam is needed when you have a specific eye concern or a medical condition that affects your eyes.</p>
      <p class="eyeexam-text">This includes symptoms like eye pain, redness, sudden vision changes, dry eyes, infections, or monitoring chronic conditions like diabetes or glaucoma.</p>
      <p class="eyeexam-text">These exams are billed to your <strong>medical insurance</strong>, not your vision plan.</p>
    </div>
  </div>

  <div class="eyeexam-cta" data-aos="zoom-in-up" data-aos-duration="1000">
    <p class="eyeexam-cta-text"><strong>Not Sure Which One You Need?</strong><br />
    If you’re coming in for a general eye check or to update your prescription, a comprehensive exam is likely right. For discomfort or a diagnosed condition, go with a medical exam.</p>
    <a class="eyeexam-btn mb-4" href="<?php echo esc_url(home_url('appointment')); ?>">Apply Now</a>
  </div>
<?php
get_footer();
