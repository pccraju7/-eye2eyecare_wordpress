<?php
/**
 * Template Name: Eyewaear Template
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
			<h1 data-aos="zoom-in-up" data-aos-duration="1000">Eyewaear</h1>
			<p data-aos="zoom-in-up" data-aos-duration="1000">Home ➤ Eyewaear</p>
			
		</div>
	</section>
	
	 <section class="py-5 text-center">
		<div class="container">
			<!-- Title -->
			<h2 class="fw-bold mb-2" data-aos="zoom-in-up" data-aos-duration="1000">Style Meets Clarity</h2>
			<p class="text-muted mb-5" data-aos="zoom-in-up" data-aos-duration="1000">Explore a curated selection of
				designer and functional eyewear for every style and budget.</p>
			<!-- Row 1: Carousel + One card -->
			<div class="row g-3">
				<!-- Left: Carousel (Ray-Ban) -->
				<div class="col-md-8">
					<div id="raybanCarousel" class="carousel slide carousel-wrapper position-relative"
						data-bs-ride="carousel" data-aos="zoom-in-up" data-aos-duration="1000">
						<div class="carousel-inner rounded">
							<div class="carousel-item active">
								<img src="<?php echo get_template_directory_uri(); ?>/images/rayban1.jpg" class="d-block w-100" alt="Ray-Ban Slide 1">
							</div>
							<div class="carousel-item">
								<img src="<?php echo get_template_directory_uri(); ?>/images/rayban2.jpg" class="d-block w-100" alt="Ray-Ban Slide 2">
							</div>
							
							<div class="carousel-item">
								<img src="<?php echo get_template_directory_uri(); ?>/images/gucci1.jpg" class="d-block w-100" alt="Ray-Ban Slide 3">
							</div>
						</div>
						<div class="carousel-indicators">
							<button type="button" data-bs-target="#raybanCarousel" data-bs-slide-to="0" class="active"
								aria-current="true"></button>
							<button type="button" data-bs-target="#raybanCarousel" data-bs-slide-to="1"></button>
							<button type="button" data-bs-target="#raybanCarousel" data-bs-slide-to="2"></button>
						</div>
						<!-- <div class="carousel-logo">
			  <img src="img/rayban-logo.png" alt="RayBan Logo" style="max-height: 30px;">
			</div> -->
					</div>
				</div>
				<!-- Right: Prada -->
				<div class="col-md-4 col-sm-6 col-6" data-aos="zoom-in-up" data-aos-duration="1000">
					<div class="brand-logo-card position-relative">
						<img src="<?php echo get_template_directory_uri(); ?>/images/prada-eye.png" alt="Prada" class="img-fluid" style="max-height: 200px;">
						<div class="icon-circle"><span>➤</span></div>
					</div>
				</div>
				<!-- Bottom cards -->
				<div class="col-md-4 col-sm-6 col-6" data-aos="zoom-in-up" data-aos-duration="1000">
					<div class="brand-logo-card position-relative">
						<img src="<?php echo get_template_directory_uri(); ?>/images/eco-eye.png" alt="Eco" class="img-fluid" style="max-height: 200px;">
						<div class="icon-circle"><span>➤</span></div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-6" data-aos="zoom-in-up" data-aos-duration="1000">
					<div class="brand-logo-card position-relative">
						<img src="<?php echo get_template_directory_uri(); ?>/images/tomford-eye.png" alt="Tom Ford" class="img-fluid" style="max-height: 200px;">
						<div class="icon-circle"><span>➤</span></div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-6" data-aos="zoom-in-up" data-aos-duration="1000">
					<div class="brand-logo-card position-relative">
						<img src="<?php echo get_template_directory_uri(); ?>/images/guess-eye.png" alt="Guess" class="img-fluid" style="max-height: 200px;">
						<div class="icon-circle"><span>➤</span></div>
					</div>
				</div>
				<!-- Bottom cards -->
				<div class="col-md-4 col-sm-6 col-6" data-aos="zoom-in-up" data-aos-duration="1000">
					<div class="brand-logo-card position-relative">
						<img src="<?php echo get_template_directory_uri(); ?>/images/gucci.png" alt="Eco" class="img-fluid" style="max-height: 200px;">
						<div class="icon-circle"><span>➤</span></div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-6" data-aos="zoom-in-up" data-aos-duration="1000">
					<div class="brand-logo-card position-relative">
						<img src="<?php echo get_template_directory_uri(); ?>/images/ysl.png" alt="Tom Ford" class="img-fluid" style="max-height: 200px;">
						<div class="icon-circle"><span>➤</span></div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-6" data-aos="zoom-in-up" data-aos-duration="1000">
					<div class="brand-logo-card position-relative">
						<img src="<?php echo get_template_directory_uri(); ?>/images/philipp-plein.png" alt="Guess" class="img-fluid" style="max-height: 200px;">
						<div class="icon-circle"><span>➤</span></div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-6" data-aos="zoom-in-up" data-aos-duration="1000">
					<div class="brand-logo-card position-relative">
						<img src="<?php echo get_template_directory_uri(); ?>/images/John-Varvatos.png" alt="Eco" class="img-fluid" style="max-height: 200px;">
						<div class="icon-circle"><span>➤</span></div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-6" data-aos="zoom-in-up" data-aos-duration="1000">
					<div class="brand-logo-card position-relative">
						<img src="<?php echo get_template_directory_uri(); ?>/images/dolce-Gabbana.png" alt="Tom Ford" class="img-fluid" style="max-height: 200px;">
						<div class="icon-circle"><span>➤</span></div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-6" data-aos="zoom-in-up" data-aos-duration="1000">
					<div class="brand-logo-card position-relative">
						<img src="<?php echo get_template_directory_uri(); ?>/images/versace.png" alt="Guess" class="img-fluid" style="max-height: 200px;">
						<div class="icon-circle"><span>➤</span></div>
					</div>
				</div>

				<div class="col-md-4 col-sm-6 col-6" data-aos="zoom-in-up" data-aos-duration="1000">
					<div class="brand-logo-card position-relative">
						<img src="<?php echo get_template_directory_uri(); ?>/images/modo.png" alt="Eco" class="img-fluid" style="max-height: 200px;">
						<div class="icon-circle"><span>➤</span></div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-6" data-aos="zoom-in-up" data-aos-duration="1000">
					<div class="brand-logo-card position-relative">
						<img src="<?php echo get_template_directory_uri(); ?>/images/tory.png" alt="Tom Ford" class="img-fluid" style="max-height: 200px;">
						<div class="icon-circle"><span>➤</span></div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-6" data-aos="zoom-in-up" data-aos-duration="1000">
					<div class="brand-logo-card position-relative">
						<img src="<?php echo get_template_directory_uri(); ?>/images/police.png" alt="Guess" class="img-fluid" style="max-height: 200px;">
						<div class="icon-circle"><span>➤</span></div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-6" data-aos="zoom-in-up" data-aos-duration="1000">
					<div class="brand-logo-card position-relative">
						<img src="<?php echo get_template_directory_uri(); ?>/images/oakley.png" alt="Eco" class="img-fluid" style="max-height: 200px;">
						<div class="icon-circle"><span>➤</span></div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-6" data-aos="zoom-in-up" data-aos-duration="1000">
					<div class="brand-logo-card position-relative">
						<img src="<?php echo get_template_directory_uri(); ?>/images/polo.png" alt="Tom Ford" class="img-fluid" style="max-height: 200px;">
						<div class="icon-circle"><span>➤</span></div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-6" data-aos="zoom-in-up" data-aos-duration="1000">
					<div class="brand-logo-card position-relative">
						<img src="<?php echo get_template_directory_uri(); ?>/images/rayban.png" alt="Guess" class="img-fluid" style="max-height: 200px;">
						<div class="icon-circle"><span>➤</span></div>
					</div>
				</div>

				<div class="col-md-4 col-sm-6 col-6" data-aos="zoom-in-up" data-aos-duration="1000">
					<div class="brand-logo-card position-relative">
						<img src="<?php echo get_template_directory_uri(); ?>/images/coach.png" alt="Eco" class="img-fluid" style="max-height: 200px;">
						<div class="icon-circle"><span>➤</span></div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-6" data-aos="zoom-in-up" data-aos-duration="1000">
					<div class="brand-logo-card position-relative">
						<img src="<?php echo get_template_directory_uri(); ?>/images/marc-jacob.png" alt="Tom Ford" class="img-fluid" style="max-height: 200px;">
						<div class="icon-circle"><span>➤</span></div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-6" data-aos="zoom-in-up" data-aos-duration="1000">
					<div class="brand-logo-card position-relative">
						<img src="<?php echo get_template_directory_uri(); ?>/images/michael-kors.png" alt="Guess" class="img-fluid" style="max-height: 200px;">
						<div class="icon-circle"><span>➤</span></div>
					</div>
				</div>


				<div class="col-md-4 col-sm-6 col-6" data-aos="zoom-in-up" data-aos-duration="1000">
					<div class="brand-logo-card position-relative">
						<img src="<?php echo get_template_directory_uri(); ?>/images/ralph.png" alt="Eco" class="img-fluid" style="max-height: 200px;">
						<div class="icon-circle"><span>➤</span></div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-6" data-aos="zoom-in-up" data-aos-duration="1000">
					<div class="brand-logo-card position-relative">
						<img src="<?php echo get_template_directory_uri(); ?>/images/ax.png" alt="Tom Ford" class="img-fluid" style="max-height: 200px;">
						<div class="icon-circle"><span>➤</span></div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-6" data-aos="zoom-in-up" data-aos-duration="1000">
					<div class="brand-logo-card position-relative">
						<img src="<?php echo get_template_directory_uri(); ?>/images/vogue.png" alt="Guess" class="img-fluid" style="max-height: 200px;">
						<div class="icon-circle"><span>➤</span></div>
					</div>
				</div>

				<div class="col-md-4 col-sm-6 col-6" data-aos="zoom-in-up" data-aos-duration="1000">
					<div class="brand-logo-card position-relative">
						<img src="<?php echo get_template_directory_uri(); ?>/images/polaroid.png" alt="Eco" class="img-fluid" style="max-height: 200px;">
						<div class="icon-circle"><span>➤</span></div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-6" data-aos="zoom-in-up" data-aos-duration="1000">
					<div class="brand-logo-card position-relative">
						<img src="<?php echo get_template_directory_uri(); ?>/images/skechers.png" alt="Tom Ford" class="img-fluid" style="max-height: 200px;">
						<div class="icon-circle"><span>➤</span></div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-6" data-aos="zoom-in-up" data-aos-duration="1000">
					<div class="brand-logo-card position-relative">
						<img src="<?php echo get_template_directory_uri(); ?>/images/champion.png" alt="Guess" class="img-fluid" style="max-height: 200px;">
						<div class="icon-circle"><span>➤</span></div>
					</div>
				</div>

				<div class="col-md-4 col-sm-6 col-6" data-aos="zoom-in-up" data-aos-duration="1000">
					<div class="brand-logo-card position-relative">
						<img src="<?php echo get_template_directory_uri(); ?>/images/aeropostale.png" alt="Eco" class="img-fluid" style="max-height: 200px;">
						<div class="icon-circle"><span>➤</span></div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-6" data-aos="zoom-in-up" data-aos-duration="1000">
					<div class="brand-logo-card position-relative">
						<img src="<?php echo get_template_directory_uri(); ?>/images/charles-stone.png" alt="Tom Ford" class="img-fluid" style="max-height: 200px;">
						<div class="icon-circle"><span>➤</span></div>
					</div>
				</div>
				
			</div>
			<h2 class="fw-bold mb-4 mt-4" data-aos="zoom-in-up" data-aos-duration="1000">Contacts Lens brands</h2>
			<div class="row g-3">
				<div class="col-md-4 col-sm-6 col-6" data-aos="zoom-in-up" data-aos-duration="1000">
					<div class="brand-logo-card position-relative">
						<img src="<?php echo get_template_directory_uri(); ?>/images/alcon.png" alt="Guess" class="img-fluid" style="max-height: 200px;">
						<div class="icon-circle"><span>➤</span></div>
					</div>
				</div>

				<div class="col-md-4 col-sm-6 col-6" data-aos="zoom-in-up" data-aos-duration="1000">
					<div class="brand-logo-card position-relative">
						<img src="<?php echo get_template_directory_uri(); ?>/images/b-l.png" alt="Eco" class="img-fluid" style="max-height: 200px;">
						<div class="icon-circle"><span>➤</span></div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-6" data-aos="zoom-in-up" data-aos-duration="1000">
					<div class="brand-logo-card position-relative">
						<img src="<?php echo get_template_directory_uri(); ?>/images/coopervision.png" alt="Tom Ford" class="img-fluid" style="max-height: 200px;">
						<div class="icon-circle"><span>➤</span></div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-6" data-aos="zoom-in-up" data-aos-duration="1000">
					<div class="brand-logo-card position-relative">
						<img src="<?php echo get_template_directory_uri(); ?>/images/j-j.png" alt="Tom Ford" class="img-fluid" style="max-height: 200px;">
						<div class="icon-circle"><span>➤</span></div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="zeiss-section container">
  <div class="zeiss-container1">
    <!-- Logo and Heading -->
    <div class="zeiss-header" data-aos="zoom-in-up" data-aos-duration="1000">
      <img src="<?php echo get_template_directory_uri(); ?>/images/Zeiss_logo.png" alt="ZEISS Logo" class="zeiss-logo" />
      <h2 class="zeiss-tagline">Seeing beyond</h2>
    </div>

    <!-- Premium Lenses by ZEISS -->
    <div class="zeiss-block" data-aos="zoom-in-up" data-aos-duration="1000">
      <h3 class="zeiss-title">Premium Lenses by ZEISS</h3>
      <p>
        At Eye to Eyecare, we proudly offer <strong>precision optics by ZEISS</strong>, a world-renowned leader in lens technology for over 175 years. ZEISS lenses are engineered in Germany and trusted by millions of eye care professionals globally — known for their crystal-clear clarity, exceptional durability, and advanced visual comfort.
      </p>
      <p>
        Whether you’re seeking lenses for <strong>single vision, progressives, blue light protection, or customized digital lenses</strong>, ZEISS delivers uncompromising quality tailored to your lifestyle.
      </p>
      <p>
        With ZEISS, you’re not just getting glasses — you’re getting <strong>precision-engineered vision solutions</strong> that help you see your world more clearly and comfortably.
      </p>
    </div>

    <!-- SmartLife Lenses -->
    <div class="zeiss-block" data-aos="zoom-in-up" data-aos-duration="1000">
      <h3 class="zeiss-title">ZEISS SmartLife® Lenses</h3>
      <h4 class="zeiss-subtitle">Effortless Vision for a Connected Lifestyle</h4>
      <p>
        In today’s fast-paced digital world, your eyes are constantly switching between screens, people, and the environment around you. <strong>ZEISS SmartLife® lenses</strong> are designed to keep up — providing <strong>seamless, clear, and comfortable vision</strong> at all distances and angles.
      </p>
      <p>
        Whether you’re scrolling through your phone, driving, or enjoying the outdoors, SmartLife lenses adapt to your visual behavior and age-related needs, supporting natural eye movement throughout the day.
      </p>
      <ul class="zeiss-list">
        <li><strong>Ideal for busy, on-the-go lifestyles</strong></li>
        <li><strong>Optimized for frequent screen users</strong></li>
        <li><strong>Designed to reduce eye strain and fatigue</strong></li>
      </ul>
    </div>

    <!-- DuraVision Coatings -->
    <div class="zeiss-block" data-aos="zoom-in-up" data-aos-duration="1000">
      <h3 class="zeiss-title">ZEISS DuraVision® Lens Coatings</h3>
      <h4 class="zeiss-subtitle">Clarity. Protection. Durability.</h4>
      <p>
        Your lenses deserve more than just clear vision — they deserve lasting performance. <strong>ZEISS DuraVision® coatings</strong> are premium anti-reflective treatments that enhance your lens experience with cutting-edge technology.
      </p>
      <ul class="zeiss-list" data-aos="zoom-in-up" data-aos-duration="1000">
        <li><strong>Crystal-clear vision</strong> with minimal glare — ideal for night driving and digital screen use</li>
        <li><strong>Superior scratch resistance</strong> — up to 3x harder than standard AR coatings</li>
        <li><strong>Easy-to-clean surfaces</strong> — thanks to a super-slick layer that repels water, dust, and smudges</li>
        <li><strong>Anti-static technology</strong> — keeps lenses cleaner for longer</li>
      </ul>
      <p>
        Whether you’re working, driving, or enjoying your day, DuraVision coatings help your lenses stay clearer, longer — with less effort and more durability.
      </p>
    </div>
  </div>
</section>

<?php
get_footer();
