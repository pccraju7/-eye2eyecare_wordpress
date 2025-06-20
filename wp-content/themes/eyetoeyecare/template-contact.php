<?php
/**
 * Template Name: Contact Us Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>
<script type="text/javascript">
jQuery.noConflict();
</script>

<!-- Page Header Start -->
     <section class="hero1">
		<div class="container hero-content">
			<h1 data-aos="zoom-in-up" data-aos-duration="1000">Contact Us</h1>
			<p data-aos="zoom-in-up" data-aos-duration="1000">Home ➤ Contact Us</p>
			
		</div>
	</section>
	
 <section class="contact-touch-section">
        <div class="contact-cards">
            <div class="contact-card">
                <i class="fa fa-phone icon2"></i>
                <h4>Call/Text Us</h4>
                <p>(281) 565-3937</p>
            </div>
            <div class="contact-card">
                <i class="fa fa-envelope icon2"></i>
                <h4>E-Mail Us</h4>
                <p>contact@eyetoeyecaretx.com</p>
            </div>
            <div class="contact-card">
                <i class="fa fa-fax icon2"></i>
                <h4>Fax Us</h4>
                <p>281-565-9440</p>
            </div>
        </div>

        <div class="contact-form-wrapper">
            <h2>Get In Touch</h2>
            <div class="contact-touch-form">
                   <?php echo do_shortcode('[contact-form-7 id="68ca7af" title="Get in touch"] '); ?>
             </div>
        </div>
    </section>
<?php
get_footer();
