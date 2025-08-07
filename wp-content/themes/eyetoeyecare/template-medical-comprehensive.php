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


	</section>
<h1 class="eyeexam-heading " data-aos="zoom-in-up" data-aos-duration="1000" style="
    margin-top: 130px;">
  <?php the_field('eyeexam_section_heading'); ?>
</h1>

<div class="eyeexam-container">
  <div class="eyeexam-card" data-aos="zoom-in-up" data-aos-duration="1000">
    <h2 class="eyeexam-title"><?php the_field('eyeexam_card1_title'); ?></h2>
    <p class="eyeexam-text"><?php the_field('eyeexam_card1_text1'); ?></p>
    <p class="eyeexam-text"><?php the_field('eyeexam_card1_text2'); ?></p>
    <p class="eyeexam-text"><?php the_field('eyeexam_card1_text3'); ?></p>
  </div>

  <div class="eyeexam-card" data-aos="zoom-in-up" data-aos-duration="1000">
    <h2 class="eyeexam-title"><?php the_field('eyeexam_card2_title'); ?></h2>
    <p class="eyeexam-text"><?php the_field('eyeexam_card2_text1'); ?></p>
    <p class="eyeexam-text"><?php the_field('eyeexam_card2_text2'); ?></p>
    <p class="eyeexam-text"><?php the_field('eyeexam_card2_text3'); ?></p>
  </div>
</div>

<div class="eyeexam-cta" data-aos="zoom-in-up" data-aos-duration="1000">
  <div class="eyeexam-cta-text"><?php the_field('eyeexam_cta_text'); ?></div>
  <a class="eyeexam-btn mb-4" href="<?php the_field('eyeexam_cta_button_link'); ?>">
    <?php the_field('eyeexam_cta_button_text'); ?>
  </a>
</div>

<?php
get_footer();
