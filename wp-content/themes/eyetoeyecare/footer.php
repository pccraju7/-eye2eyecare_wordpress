<?php
	/**
		* The template for displaying the footer
		*
		* Contains the opening of the #site-footer div and all content after.
		*
		* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
		*
		* @package WordPress
		* @subpackage Twenty_Twenty
		* @since Twenty Twenty 1.0
	*/
	
?>
<footer class="site-footer">
  <div class="footer-wrapper">
	  <img class="logoback" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="">
    <div class="container position-relative overflow-hidden">
     

      <div class="footer-columns">
		
        <!-- Address -->
        <div class="footer-col" data-aos="zoom-in-up" data-aos-duration="1000">
			
          <h4>Address</h4>
          <p>
            11579 Highway 6 South<br>
            Sugar Land<br>
            Texas, 77498
          </p>
        </div>

        <!-- Quick Contact -->
        <div class="footer-col" data-aos="zoom-in-up" data-aos-duration="1000">
          <h4>Quick Contact</h4>
          <p>
            Toll Free: 281-565-EYES (3937)<br>
            Email: contact@eyetoeyecaretx.com<br>
            Fax: 281-565-9440
          </p>
        </div>

        <!-- Office Hours -->
        <div class="footer-col" data-aos="zoom-in-up" data-aos-duration="1000">
          <h4>Office Hours</h4>
          <p>
            Mon – Fri: 9:00 a.m. – 6:00 p.m<br>
            Sat – Sun: Closed<br>
            <span class="note">(closed from 1pm – 2pm)</span>
          </p>
        </div>
      </div>

      <hr />

      <div class="footer-bottom">
	  <a href="<?php echo esc_url(home_url('patient-forms')); ?>" class="btn-register">

  Registration Forms <i class="bi bi-send-fill ms-2"></i>
</a>
        <div class="footer-links">
         <a href="<?php echo get_template_directory_uri(); ?>/docs/Policy Forms.pdf"  target="_blank" >Privacy Policy</a>
        </div>
        <div class="footer-social">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-x-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
      </div>
    </div>
  </div>
</footer>



<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
	AOS.init();
</script>
<?php wp_footer(); ?>
</body>
</html>
