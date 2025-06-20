<?php
	/**
		* Header file for the Twenty Twenty WordPress default theme.
		*
		* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
		*
		* @package WordPress
		* @subpackage Twenty_Twenty
		* @since Twenty Twenty 1.0
	*/
	
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Eye to Eyecare</title>
		<meta name="description" content="Eye to Eyecare in Sugar Land, Texas offers high-quality, personalized eye care services in a relaxed and professional environment. Since 2001, we have provided comprehensive eye exams, contact lens evaluations, disease management, and co-management of LASIK and cataract surgeries.">
		<meta name="keywords" content="Eye to Eyecare, eye care Sugar Land, eye exams, contact lenses, eye disease treatment, LASIK co-management, cataract surgery, optometrist Texas, vision care, diabetes eye exam, hypertension eye check">
        <!-- Favicons -->
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" type="image/png">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
		
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
		
	
		<style>
			.hero {
			position: relative;
			
			height: 90vh;
			color: white;
			display: flex;
			align-items: center;
			justify-content: center;
			text-align: center;
			}
			
			
			.vision {
			background-image: url('<?php echo get_template_directory_uri(); ?>/images/vision-insurance.png');
			}
			
			.medical {
			background-image: url('<?php echo get_template_directory_uri(); ?>/images/medical-insurance.png');
			}
			.page-header {
			height: 200px;
			display: flex
			;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			background: linear-gradient(rgba(4, 15, 40, 0.7), rgba(4, 15, 40, 0.7)), url(http://localhost/eyetoeyecare_wordpress/wp-content/themes/eyetoeyecare/images/carousel-1.jpg) center center no-repeat;
			background-size: cover;
			/* top: 100px; */
			margin-top: 114px;
			}
		</style>
		<?php wp_head(); ?>
	</head>
	<body>
		<div id="preloader">
			<div class="loader"></div>
		</div>
		<!-- Navbar -->
		<nav class="navbar navbar-expand-lg navbar-dark custom-navbar fixed-top">
			<div class="container-fluid">
				<?php if (function_exists('the_custom_logo') && has_custom_logo()) : ?>
				<a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
					<?php the_custom_logo(); ?>
				</a>
				<?php else : ?>
				<a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>" height="72">
				</a>
				<?php endif; ?>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
					<span class="navbar-toggler-icon"></span>
				</button>
				
				<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
					<?php
						wp_nav_menu(array(
						'theme_location'    => 'primary',
						'depth'             => 2, // For dropdown
						'container'         => false,
						'menu_class'        => 'navbar-nav',
						'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
						'walker'            => new WP_Bootstrap_Navwalker(),
						));
					?>
				</div>
			</div>
		</nav>
		
