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



<section class="cx-eyeexam mb-3 container-fluid">
  <div class="cx-eyeexam__wrapper">
    <!-- Left Images -->
    <figure class="cx-eyeexam__media" data-aos="zoom-in-up" data-aos-duration="1000">
      <?php 
      $main_img = get_field('eye_exam_main_image');
      $sub_img = get_field('eye_exam_sub_image');
      ?>
      <?php if ($main_img): ?>
        <img src="<?php echo esc_url($main_img['url']); ?>" alt="<?php echo esc_attr($main_img['alt']); ?>" class="cx-eyeexam__main-img" />
      <?php endif; ?>
      <?php if ($sub_img): ?>
        <img src="<?php echo esc_url($sub_img['url']); ?>" alt="<?php echo esc_attr($sub_img['alt']); ?>" class="cx-eyeexam__sub-img" />
      <?php endif; ?>
    </figure>

    <!-- Right Content -->
    <div class="cx-eyeexam__content">
      <h2 class="cx-eyeexam__title" data-aos="zoom-in-up" data-aos-duration="1000">
        <?php the_field('eye_exam_title'); ?>
      </h2>
      <div class="cx-eyeexam__text" data-aos="zoom-in-up" data-aos-duration="1000">
        <?php the_field('eye_exam_description'); ?>
      </div>
    </div>
  </div>
</section>

<div class="section-container">
  <!-- Accordion Section -->
  <div class="content-area" data-aos="fade-right" data-aos-duration="1000">

    <!-- Accordion 1 -->
    <div class="accordion-item">
      <button class="accordion-header">
        <span class="accordion-header-text"><?php the_field('accordion_title_1'); ?></span>
        <svg class="accordion-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
        </svg>
      </button>
      <div class="accordion-content">
        <?php the_field('accordion_content_1'); ?>
      </div>
    </div>

    <!-- Accordion 2 -->
    <div class="accordion-item">
      <button class="accordion-header">
        <span class="accordion-header-text"><?php the_field('accordion_title_2'); ?></span>
        <svg class="accordion-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
        </svg>
      </button>
      <div class="accordion-content">
        <?php the_field('accordion_content_2'); ?>
      </div>
    </div>

    <!-- Accordion 3 -->
    <div class="accordion-item">
      <button class="accordion-header">
        <span class="accordion-header-text"><?php the_field('accordion_title_3'); ?></span>
        <svg class="accordion-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
        </svg>
      </button>
      <div class="accordion-content">
        <?php the_field('accordion_content_3'); ?>
      </div>
    </div>

  </div>

  <!-- Right Image Area -->
  <div class="image-wrapper" data-aos="fade-left" data-aos-duration="1000">
    <?php 
    $right_img = get_field('right_side_image');
    if ($right_img): ?>
      <img src="<?php echo esc_url($right_img['url']); ?>" alt="<?php echo esc_attr($right_img['alt']); ?>" class="responsive-image"
        onerror="this.onerror=null;this.src='https://placehold.co/600x400/cccccc/333333?text=Image+Not+Found';">
    <?php endif; ?>
  </div>
</div>

  
<?php
get_footer();
