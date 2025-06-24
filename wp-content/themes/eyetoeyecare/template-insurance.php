<?php
/**
 * Template Name: Insurance Template
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
			<h1 data-aos="zoom-in-up" data-aos-duration="1000">Insurance</h1>
			<p data-aos="zoom-in-up" data-aos-duration="1000">Home ➤ Insurance</p>
			
		</div>
	</section>
	
	<section class="info-section">
		<div class="container">
			<h2 class="title" data-aos="zoom-in-up" data-aos-duration="1000">Understanding Medical Insurance<br>vs. Vision Insurance</h2>
			<p class="description" data-aos="fade-down" data-aos-duration="1000">
				When it comes to eye care, it's important to know the difference between<br>
				medical insurance and vision insurance—they cover different services<br>
				and are billed differently.
			</p>
		</div>
	</section>

	<section class="insurance-section-unique ">
		<div class="insurance-card medical-card" data-aos="fade-right" data-aos-duration="1000">
			<div class="insurance-overlay">
				<h4 class="insurance-subheading">Medical Insurance:</h4>
				<h2 class="insurance-title">Eye Health &amp; Conditions</h2>
				<p class="insurance-text">Medical insurance covers the diagnosis and treatment of eye-related health
					issues or symptoms caused by a medical condition.</p>
				<p class="insurance-text">What it typically covers:</p>
				<ul class="insurance-list">
					<li>➤ Eye infections, injuries, or pain</li>
					<li>➤ Sudden vision changes or blurry vision</li>
					<li>➤ Diabetic eye exams</li>
					<li>➤ Glaucoma, cataracts, and other eye diseases</li>
				</ul>
			</div>
		</div>

		<div class="insurance-card vision-card" data-aos="fade-left" data-aos-duration="1000">
			<div class="insurance-overlay">
				<h4 class="insurance-subheading">Vision Insurance:</h4>
				<h2 class="insurance-title">Routine EyeCare &amp; Eyewear</h2>
				<p class="insurance-text">Vision insurance is designed to help you maintain healthy eyesight and save on
					routine eye care.</p>
				<p class="insurance-text">What it typically covers:</p>
				<ul class="insurance-list">
					<li>➤ Annual routine eye exams</li>
					<li>➤ Glasses (frames &amp; lenses)</li>
					<li>➤ Contact lenses</li>
					<li>➤ Discounts on lens upgrades (like anti-glare or progressive)</li>
				</ul>
			</div>
		</div>
	</section>
	<section class="mi-section">
		<div class="mi-wrapper">
			<h2 class="mi-heading" data-aos="flip-up" data-aos-duration="1000">Medical Insurances</h2>
			<div class="mi-grid" data-aos="zoom-in-up" data-aos-duration="1000">
				<div class="mi-card" >
					<img src="<?php echo get_template_directory_uri(); ?>/images/Aetna-logo.png" alt="Aetna">
				</div>
				<div class="mi-card">
					<img src="<?php echo get_template_directory_uri(); ?>/images/Blue-Cross.png" alt="BlueCross BlueShield">
				</div>
				<div class="mi-card">
					<img src="<?php echo get_template_directory_uri(); ?>/images/Cigna-Logo.png" alt="Cigna">
				</div>
				<div class="mi-card">
					<img src="<?php echo get_template_directory_uri(); ?>/images/Humana-logo.png" alt="Humana">
				</div>
				<div class="mi-card">
					<img src="<?php echo get_template_directory_uri(); ?>/images/united-health.png" alt="United Healthcare">
				</div>
				<div class="mi-card">
					<img src="<?php echo get_template_directory_uri(); ?>/images/medicaid.png" alt="Medicaid">
				</div>
			</div>
		</div>
	</section>

	<section class="vi-section">
		<div class="vi-wrapper">
			<h2 class="vi-heading" data-aos="flip-up" data-aos-duration="1000">Vision Insurances</h2>
			<div class="vi-grid" data-aos="zoom-in-up" data-aos-duration="1000">
				<div class="vi-card">
					<img src="<?php echo get_template_directory_uri(); ?>/images/eyemed-vision.png" alt="Aetna">
				</div>
				<div class="vi-card">
					<img src="<?php echo get_template_directory_uri(); ?>/images/vsp.png" alt="BlueCross BlueShield">
				</div>
				<div class="vi-card">
					<img src="<?php echo get_template_directory_uri(); ?>/images/spectara.png" alt="Cigna">
				</div>
				<div class="vi-card">
					<img src="<?php echo get_template_directory_uri(); ?>/images/sv.png" alt="Humana">
				</div>
				<div class="vi-card">
					<img src="<?php echo get_template_directory_uri(); ?>/images/vba-eyewear.jpg" alt="United Healthcare">
				</div>
				<div class="vi-card">
					<img src="<?php echo get_template_directory_uri(); ?>/images/medicaid.png" alt="Medicaid">
				</div>
			</div>
		</div>
	</section>

<?php
get_footer();
