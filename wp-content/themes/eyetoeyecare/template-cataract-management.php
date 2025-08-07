<?php
/**
 * Template Name: Cataract Management Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */
get_header();
?>
<!-- Page Header Start -->

 <section class="cx-eyeexam mb-3 container-fluid">
    <div class="cx-eyeexam__wrapper">
        <figure class="cx-eyeexam__media" data-aos="zoom-in-up" data-aos-duration="1000">
            <?php
            $main_img_url = get_field('cataract_main_image');
            if ($main_img_url) {
                echo '<img src="' . esc_url($main_img_url) . '" alt="Cataract Management" class="cx-eyeexam__main-img" />';
            } else {
                // Fallback image if ACF field is empty
                echo '<img src="' . get_template_directory_uri() . '/images/normal-eye-vs-cataract.jpg" alt="Optometrist examining a patient" class="cx-eyeexam__main-img" />';
            }
            ?>
            </figure>
        <div class="cx-eyeexam__content">
            <h2 class="cx-eyeexam__title" data-aos="zoom-in-up" data-aos-duration="1000"><?php the_field('cataract_management_title'); ?></h2>
            <div class="cx-eyeexam__text" data-aos="zoom-in-up" data-aos-duration="1000">
                <?php the_field('cataract_management_description'); ?>
            </div>
        </div>
    </div>
</section>

<section class="section-container1">
    <div class="section-container ">
        <div class="content-area" data-aos="fade-right" data-aos-duration="1000">
            <div class="accordion-item">
                <button class="accordion-header">
                    <span class="accordion-header-text"><?php the_field('accordion_item_1_title'); ?></span>
                    <svg class="accordion-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                        </path>
                    </svg>
                </button>
                <div class="accordion-content">
                    <?php the_field('accordion_item_1_content'); ?>
                </div>
            </div>
            <div class="accordion-item">
                <button class="accordion-header">
                    <span class="accordion-header-text"><?php the_field('accordion_item_2_title'); ?></span>
                    <svg class="accordion-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                        </path>
                    </svg>
                </button>
                <div class="accordion-content">
                    <?php the_field('accordion_item_2_content'); ?>
                </div>
            </div>
            <div class="accordion-item">
                <button class="accordion-header">
                    <span class="accordion-header-text"><?php the_field('accordion_item_3_title'); ?></span>
                    <svg class="accordion-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                        </path>
                    </svg>
                </button>
                <div class="accordion-content">
                    <?php the_field('accordion_item_3_content'); ?>
                </div>
            </div>
            <div class="accordion-item">
                <button class="accordion-header">
                    <span class="accordion-header-text"><?php the_field('accordion_item_4_title'); ?></span>
                    <svg class="accordion-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                        </path>
                    </svg>
                </button>
                <div class="accordion-content">
                    <?php the_field('accordion_item_4_content'); ?>
                </div>
            </div>
            <div class="accordion-item">
                <button class="accordion-header">
                    <span class="accordion-header-text"><?php the_field('accordion_item_5_title'); ?></span>
                    <svg class="accordion-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                        </path>
                    </svg>
                </button>
                <div class="accordion-content">
                    <?php the_field('accordion_item_5_content'); ?>
                </div>
            </div>
        </div>
        <div class="image-wrapper" data-aos="fade-left" data-aos-duration="1000">
            <?php
            $right_image_url = get_field('right_accordion_section_image');
            if ($right_image_url) {
                echo '<img src="' . esc_url($right_image_url) . '" alt="Cataract Eye Examination" class="responsive-image" />';
            } else {
                // Fallback image if ACF field is empty
                echo '<img src="' . get_template_directory_uri() . '/images/cataract-eye.jpg" alt="Eye examination" class="responsive-image" onerror="this.onerror=null;this.src=\'https://placehold.co/600x400/cccccc/333333?text=Image+Not+Found\';" />';
            }
            ?>
        </div>
    </div>
</section>
<?php
get_footer();