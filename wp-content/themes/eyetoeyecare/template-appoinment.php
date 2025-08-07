<?php
/**
 * Template Name: Appoinment Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>


	 <section class="appointment-section">
    <div class="form-wrapper">
      <h4>BOOK</h4>
      <h1>Appointment</h1>

         <?php echo do_shortcode('[contact-form-7 id="ba761d9" title="appointment-form"] '); ?>
	
    </div>
  </section>

<?php
get_footer();
