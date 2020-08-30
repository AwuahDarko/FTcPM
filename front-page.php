<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Finding The Person Called Me - Welcome</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?php blogInfo('template_url') ?>/css/animate.css">
    
    <link rel="stylesheet" href="<?php blogInfo('template_url') ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php blogInfo('template_url') ?>/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php blogInfo('template_url') ?>/css/magnific-popup.css">
    
    <link rel="stylesheet" href="<?php blogInfo('template_url') ?>/css/flaticon.css">
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
	<!-- <?php wp_head(); ?> -->
  </head>
  <body>

  	<div class="wrap">
			<div class="container">
				<div class="row">
					<div class="col-md-6 d-flex align-items-center">
						<p class="mb-0 phone pl-md-2">
							<a href="#" class="mr-2"><span class="fa fa-phone mr-1"></span> +233 2546 2563</a> 
							<a href="#"><span class="fa fa-paper-plane mr-1"></span> <?php echo get_option('admin_email') ?></a>
						</p>
					</div>
					<div class="col-md-6 d-flex justify-content-md-end">
						<!-- <div class="social-media">
			    		<p class="mb-0 d-flex">
			    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
			    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
			    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
			    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
			    		</p>
		        </div> -->
					</div>
				</div>
			</div>
		</div>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="<?php echo site_url() ?>">FTcPM</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
              <?php 
              wp_nav_menu( array(
                'theme_location'  => 'primary',
                'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                'container'       => 'li',
                'container_class' => 'collapse navbar-collapse nav-item',
                'container_id'    => 'bs-example-navbar-collapse-1',
                'menu_class'      => 'navbar-nav mr-auto nav-link',
                'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                'walker'          => new WP_Bootstrap_Navwalker(),) ); 
                ?>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <div class="hero-wrap" style="background-image: url(<?php echo get_theme_mod('showcase_image',  get_blogInfo('template_url').'/images/bg_1.jpg') ?>);" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center">
          <div class="col-md-6 ftco-animate d-flex align-items-end">
          	<div class="text w-100">
	            <h1 class="mb-4"><?php echo get_theme_mod('showcase_heading', 'Finding The Person Called Me') ?></h1>
	            <p class="mb-4"> <?php echo get_theme_mod('showcase_text', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id ratione, laborum pariatur culpa sit enim.') ?> </p>
			<p>
				<a href="#" class="btn btn-primary py-3 px-4">Sign up now</a> 
				<a href="#learn-more" class="btn btn-white py-3 px-4">Learn more</a>
			</p>
            </div>
          </div>
          <a href="https://vimeo.com/45830194" class="img-video popup-vimeo d-flex align-items-center justify-content-center">
          	<span class="fa fa-play"></span>
          </a>
        </div>
      </div>
    </div>

    <section class="ftco-intro">
    	<div class="container">
		<div class="row no-gutters">
    			<div class="col-md-4 d-flex">
    				<div class="intro aside-stretch d-lg-flex w-100">
						<?php 
							if(is_active_sidebar('onshowcaseimageleftbox')){
								dynamic_sidebar('onshowcaseimageleftbox');
							}
						
						?>
    				</div>
    			</div>
    			<div class="col-md-4 d-flex">
    				<div class="intro color-1 d-lg-flex w-100">
					<?php 
							if(is_active_sidebar('onshowcaseimagemiddlebox')){
								dynamic_sidebar('onshowcaseimagemiddlebox');
							}
						
						?>
    				</div>
    			</div>
    			<div class="col-md-4 d-flex">
    				<div class="intro color-2 d-lg-flex w-100">
					<?php 
							if(is_active_sidebar('onshowcaseimagerightbox')){
								dynamic_sidebar('onshowcaseimagerightbox');
							}
						
						?>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

		<section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center pb-2">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Finding The Person Called Me</span>
            <h2>How It Works</h2>
          </div>
        </div>
    	<div class="row">
			<?php 
			for($i = 1; $i< 8; ++$i){
				if(is_active_sidebar('howitworksstep'.$i)){?>
					<div class="col-md-4 d-flex align-items-stretch ftco-animate">
    				<div class="services-2 text-center">
						<?php dynamic_sidebar('howitworksstep'.$i); ?>
    				</div>
				</div>
				<?php
					
				}
			}
			?>
    	</div>
    </section>		
		<div id="learn-more"></div>
		<section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center mb-5">
          <div class="col-md-8 text-center heading-section ftco-animate">
          	<span class="subheading">What To Expert</span>
            <h2 class="mb-3">Excerpts from Finding The Person Called Me</h2>
          </div>
        </div>
				<div class="row tabulation mt-4 ftco-animate">
  				<div class="col-md-4">
						<ul class="nav nav-pills nav-fill d-md-flex d-block flex-column">
						  <li class="nav-item text-left">
						    <a class="nav-link active py-4" data-toggle="tab" href="#services-1">Chapter 1</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-2">Chapter 2</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-3">Chapter 3</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-4">Chapter 4</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-5">Chapter 5</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-6">Chapter 6</a>
						  </li>
						</ul>
					</div>
					<div class="col-md-8">
						<div class="tab-content">
						  <div class="tab-pane container p-0 active" id="services-1">
						  	<div class="img" style="background-image: url(<?php bloginfo('template_url');?>/images/services-1.jpg);"></div>
						  	<h3><a href="#">Chapter 1</a></h3>
						  	<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem harum deleniti quisquam facere voluptate debitis! </p>
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-2">
						  	<div class="img" style="background-image: url(<?php bloginfo('template_url');?>/images/services-2.jpg);"></div>
						  	<h3><a href="#">Chapter 2</a></h3>
						  	<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ullam, officiis possimus. Quod accusantium quas facilis!</p>
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-3">
						  	<div class="img" style="background-image: url(<?php bloginfo('template_url');?>/images/services-3.jpg);"></div>
						  	<h3><a href="#">Chapter 3</a></h3>
						  	<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae recusandae enim veniam eum, placeat amet adipisci deserunt inventore dolorem repellat.</p>
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-4">
						  	<div class="img" style="background-image: url(<?php bloginfo('template_url');?>/images/services-4.jpg);"></div>
						  	<h3><a href="#">Chapter 4</a></h3>
						  	<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam reiciendis quae atque fugiat, nostrum ex placeat sint voluptate cumque rem?</p>
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-5">
						  	<div class="img" style="background-image: url(<?php bloginfo('template_url');?>/images/services-5.jpg);"></div>
						  	<h3><a href="#">Chapter 5</a></h3>
						  	<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, illum, esse pariatur, soluta deserunt reiciendis fugiat asperiores nam eos quisquam eum nesciunt ea totam quasi.</p></p>
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-6">
						  	<div class="img" style="background-image: url(<?php bloginfo('template_url');?>/images/services-6.jpg);"></div>
						  	<h3><a href="#">Chapter 6</a></h3>
						  	<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum rerum possimus exercitationem ut pariatur incidunt optio ex sint reiciendis voluptatem. Eligendi est, unde repellat obcaecati nam nulla! Hic, labore expedita.</p>
						  </div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-section testimony-section">
    	<div class="img img-bg border" style="background-image: url(<?php bloginfo('template_url');?>/images/bg_4.jpg);"></div>
    	<div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
          	<span class="subheading">Testimonial</span>
            <h2 class="mb-3">People who have used FTCMP</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
			  
			<?php 
					for($i = 1; $i < 6; $i++){
						if(is_active_sidebar('testimony'.$i)){?>

				<div class="item">
					<div class="testimony-wrap py-4">
						<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
							<div class="text">
							<?php dynamic_sidebar('testimony'.$i); ?>
							</div>
					</div>
				</div>

			<?php
					}
			
				}
			?>
            </div>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-appointment ftco-section img" style="background-image: url(<?php bloginfo('template_url');?>/images/bg_2.jpg);">
			<div class="overlay"></div>
    	<div class="container">
    		<div class="row">
    			<div class="col-md-6 half ftco-animate">
    				<h2 class="mb-4">Send a Message &amp; Get in touch!</h2>
    				<form action="#" class="appointment">
    					<div class="row">
								<div class="col-md-6">
									<div class="form-group">
			              <input type="text" class="form-control" placeholder="Your Name">
			            </div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
			              <input type="email" class="form-control" placeholder="Email">
			            </div>
								</div>
						<div class="col-md-12">
							<div class="form-group">
							<div class="form-field">
						<div class="select-wrap">
						  <input type="text" class="form-control" placeholder="Subject">
	                    </div>
			              </div>
			    				</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
			              <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
			            </div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
			              <input type="submit" value="Send message" class="btn btn-primary py-3 px-4">
			            </div>
								</div>
    					</div>
	          </form>
    			</div>
    		</div>
    	</div>
    </section>
    <footer class="ftco-footer">
      <div class="container">
        <div class="row mb-5">
          <div class="col-sm-12 col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2 logo"><a href="<?php echo site_url() ?>">FTcPM</a></h2>
              <p>This is our slogan</p>
            </div>
          </div>
          <div class="col-sm-12 col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">

            </div>
          </div>
          <div class="col-sm-12 col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">

            </div>
          </div>
          <div class="col-sm-12 col-md">
             <div class="ftco-footer-widget mb-4">

            </div>
          </div>
          <div class="col-sm-12 col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon fa fa-map marker"></span><span class="text">This is our address</span></li>
	                <li><a href="tel:"><span class="icon fa fa-phone"></span><span class="text">+233 2546 2563</span></a></li>
	                <li><a href="#"><span class="icon fa fa-paper-plane pr-4"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
      </div>
	  <div style="height: 20px"></div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <!-- <?php wp_footer() ?> -->
  <script src="<?php blogInfo('template_url') ?>/js/jquery.min.js"></script>
  <script src="<?php blogInfo('template_url') ?>/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?php blogInfo('template_url') ?>/js/popper.min.js"></script>
  <script src="<?php blogInfo('template_url') ?>/js/bootstrap.min.js"></script>
  <script src="<?php blogInfo('template_url') ?>/js/jquery.easing.1.3.js"></script>
  <script src="<?php blogInfo('template_url') ?>/js/jquery.waypoints.min.js"></script>
  <script src="<?php blogInfo('template_url') ?>/js/jquery.stellar.min.js"></script>
  <script src="<?php blogInfo('template_url') ?>/js/owl.carousel.min.js"></script>
  <script src="<?php blogInfo('template_url') ?>/js/jquery.magnific-popup.min.js"></script>
  <script src="<?php blogInfo('template_url') ?>/js/jquery.animateNumber.min.js"></script>
  <script src="<?php blogInfo('template_url') ?>/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="<?php blogInfo('template_url') ?>/js/google-map.js"></script>
  <script src="<?php blogInfo('template_url') ?>/js/main.js"></script>
    
  </body>
</html>