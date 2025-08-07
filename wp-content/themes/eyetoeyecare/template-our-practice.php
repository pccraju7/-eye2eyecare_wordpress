<?php
/**
 * Template Name: Our Practice Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>


	


<section class="about-us-section py-5 ">
  <div class="container">
    <h2 class="section-title text-center mb-4" data-aos="zoom-in-up" data-aos-duration="1000">
      <?php the_field('about_title'); ?>
    </h2>
    <div class="about-content" data-aos="zoom-in-up" data-aos-duration="1000">
      <?php the_field('about_content'); ?>
    </div>
  </div>
</section>

<section class="meet-doctor-section py-5">
  <div class="container">
    <div class="row align-items-center">

      <!-- Doctor Image -->
      <div class="col-lg-4 text-center mb-4 mb-lg-0" data-aos="zoom-in-up" data-aos-duration="1000">
        <div class="doctor-photo-wrapper">
          <?php
          $doctor_image = get_field('doctor_image');
          if ($doctor_image):
          ?>
            <img class="img-fluid doctor-photo" src="<?php echo esc_url($doctor_image['url']); ?>" alt="<?php echo esc_attr($doctor_image['alt']); ?>" />
          <?php endif; ?>
        </div>
      </div>

      <!-- Doctor Info -->
      <div class="col-lg-8" data-aos="zoom-in-up" data-aos-duration="1000">
        <h2 class="section-title2"><?php the_field('doctor_section_title'); ?></h2>
        <h3 class="doctor-name"><?php the_field('doctor_name'); ?></h3>
        <?php the_field('doctor_bio'); ?>
      </div>

    </div>
  </div>
</section>


<?php
get_footer();
