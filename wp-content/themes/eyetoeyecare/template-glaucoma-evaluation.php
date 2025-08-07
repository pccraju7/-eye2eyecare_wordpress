<?php
	/**
		* Template Name:  Glaucoma Evaluation  Template
		* Template Post Type: post, page
		*
		* @package WordPress
		* @subpackage Twenty_Twenty
		* @since Twenty Twenty 1.0
	*/
	get_header();
?>

<section class="cx-eyeexam mb-3 container">
    <div class="cx-eyeexam__text">
        <?php the_field('glaucoma_intro_text'); ?>
    </div>

    <div class="cx-eyeexam__wrapper">
        <figure class="cx-eyeexam__media" data-aos="zoom-in-up" data-aos-duration="1000">
            <?php
            $glaucoma_main_img_url = get_field('glaucoma_main_image');
            if ($glaucoma_main_img_url) {
                echo '<img src="' . esc_url($glaucoma_main_img_url) . '" alt="Glaucoma Examination" class="cx-eyeexam__main-img" />';
            } else {
                // Fallback image if ACF field is empty
                echo '<img src="' . get_template_directory_uri() . '/images/glaucoma.jpg" alt="Optometrist examining a patient" class="cx-eyeexam__main-img" />';
            }
            ?>
        </figure>
        <div class="cx-eyeexam__content">
            <h2 class="cx-eyeexam__title" data-aos="zoom-in-up" data-aos-duration="1000"><?php the_field('what_is_glaucoma_title'); ?></h2>
            <div class="cx-eyeexam__text" data-aos="zoom-in-up" data-aos-duration="1000">
                <?php the_field('what_is_glaucoma_content'); ?>
            </div>
        </div>
    </div>
    <div class="vision-section">
        <div class="vision-box">
            <h3>Normal Vision</h3>
            <?php
            $normal_vision_img_url = get_field('normal_vision_image');
            if ($normal_vision_img_url) {
                echo '<img src="' . esc_url($normal_vision_img_url) . '" alt="Normal Vision">';
            } else {
                echo '<img src="' . get_template_directory_uri() . '/images/normal-vision.png" alt="Normal Vision">';
            }
            ?>
        </div>
        <div class="vision-box">
            <h3>Loss of Peripheral Vision</h3>
            <?php
            $peripheral_vision_loss_img_url = get_field('peripheral_vision_loss_image');
            if ($peripheral_vision_loss_img_url) {
                echo '<img src="' . esc_url($peripheral_vision_loss_img_url) . '" alt="Loss of Peripheral Vision">';
            } else {
                echo '<img src="' . get_template_directory_uri() . '/images/peripheral-vision-loss.png" alt="Loss of Peripheral Vision">';
            }
            ?>
        </div>
    </div>
</section>

<section class="section-container1">
    <div class="section-container ">
        <div class="content-area" data-aos="fade-right" data-aos-duration="1000">
            <div class="accordion-item">
                <button class="accordion-header">
                    <span class="accordion-header-text"><?php the_field('accordion_glaucoma_item_1_title'); ?></span>
                    <svg class="accordion-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                        </path>
                    </svg>
                </button>
                <div class="accordion-content">
                    <?php the_field('accordion_glaucoma_item_1_content'); ?>
                </div>
            </div>
            <div class="accordion-item">
                <button class="accordion-header">
                    <span class="accordion-header-text"><?php the_field('accordion_glaucoma_item_2_title'); ?></span>
                    <svg class="accordion-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                        </path>
                    </svg>
                </button>
                <div class="accordion-content">
                    <?php the_field('accordion_glaucoma_item_2_content'); ?>
                </div>
            </div>
            <div class="accordion-item">
                <button class="accordion-header">
                    <span class="accordion-header-text"><?php the_field('accordion_glaucoma_item_3_title'); ?></span>
                    <svg class="accordion-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                        </path>
                    </svg>
                </button>
                <div class="accordion-content">
                    <?php the_field('accordion_glaucoma_item_3_content'); ?>
                </div>
            </div>
            <div class="accordion-item">
                <button class="accordion-header">
                    <span class="accordion-header-text"><?php the_field('accordion_glaucoma_item_4_title'); ?></span>
                    <svg class="accordion-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                        </path>
                    </svg>
                </button>
                <div class="accordion-content">
                    <?php the_field('accordion_glaucoma_item_4_content'); ?>
                </div>
            </div>
        </div>
        <div class="image-wrapper" data-aos="fade-left" data-aos-duration="1000">
            <?php
            $right_img_url_glaucoma = get_field('right_accordion_section_image_glaucoma');
            if ($right_img_url_glaucoma) {
                echo '<img src="' . esc_url($right_img_url_glaucoma) . '" alt="Glaucoma Eye Examination" class="responsive-image" />';
            } else {
                // Fallback image if ACF field is empty
                echo '<img src="' . get_template_directory_uri() . '/images/glaucoma12.jpg" alt="Eye examination" class="responsive-image" onerror="this.onerror=null;this.src=\'https://placehold.co/600x400/cccccc/333333?text=Image+Not+Found\';" />';
            }
            ?>
        </div>
    </div>
</section>
<?php
get_footer();