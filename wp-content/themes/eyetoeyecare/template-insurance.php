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


   

	
	<section class="info-section">
  <div class="container">
    <h2 class="title" data-aos="zoom-in-up" data-aos-duration="1000">
      <?php the_field('info_title'); ?>
    </h2>
    <p class="description" data-aos="fade-down" data-aos-duration="1000">
      <?php the_field('info_description'); ?>
    </p>
  </div>
</section>

<section class="insurance-section-unique">
  <div class="insurance-card medical-card" data-aos="fade-right" data-aos-duration="1000">
    <div class="insurance-overlay">
      <h4 class="insurance-subheading"><?php the_field('medical_subheading'); ?></h4>
      <h2 class="insurance-title"><?php the_field('medical_title'); ?></h2>
      <p class="insurance-text"><?php the_field('medical_desc1'); ?></p>
      <p class="insurance-text"><?php the_field('medical_desc2'); ?></p>
      <ul class="insurance-list">
        <li>➤ <?php the_field('medical_list1'); ?></li>
        <li>➤ <?php the_field('medical_list2'); ?></li>
        <li>➤ <?php the_field('medical_list3'); ?></li>
        <li>➤ <?php the_field('medical_list4'); ?></li>
      </ul>
    </div>
  </div>

  <div class="insurance-card vision-card" data-aos="fade-left" data-aos-duration="1000">
    <div class="insurance-overlay">
      <h4 class="insurance-subheading"><?php the_field('vision_subheading'); ?></h4>
      <h2 class="insurance-title"><?php the_field('vision_title'); ?></h2>
      <p class="insurance-text"><?php the_field('vision_desc1'); ?></p>
      <p class="insurance-text"><?php the_field('vision_desc2'); ?></p>
      <ul class="insurance-list">
        <li>➤ <?php the_field('vision_list1'); ?></li>
        <li>➤ <?php the_field('vision_list2'); ?></li>
        <li>➤ <?php the_field('vision_list3'); ?></li>
        <li>➤ <?php the_field('vision_list4'); ?></li>
      </ul>
    </div>
  </div>
</section>

<section class="mi-section">
  <div class="mi-wrapper">
    <h2 class="mi-heading" data-aos="flip-up" data-aos-duration="1000">Medical Insurances</h2>
    <div class="mi-grid" data-aos="zoom-in-up" data-aos-duration="1000">
      <?php for ($i = 1; $i <= 6; $i++): 
        $logo = get_field("medical_logo_$i");
        $alt = get_field("medical_alt_$i");
        if ($logo): ?>
        <div class="mi-card">
          <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($alt); ?>">
        </div>
      <?php endif; endfor; ?>
    </div>
  </div>
</section>

<section class="vi-section">
  <div class="vi-wrapper">
    <h2 class="vi-heading" data-aos="flip-up" data-aos-duration="1000">Vision Insurances</h2>
    <div class="vi-grid" data-aos="zoom-in-up" data-aos-duration="1000">
      <?php for ($i = 1; $i <= 6; $i++): 
        $logo = get_field("vision_logo_$i");
        $alt = get_field("vision_alt_$i");
        if ($logo): ?>
        <div class="vi-card">
          <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($alt); ?>">
        </div>
      <?php endif; endfor; ?>
    </div>
  </div>
</section>



<?php
get_footer();
