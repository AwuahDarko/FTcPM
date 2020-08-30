<? get_header( ) ?>

<section class="hero-wrap hero-wrap-2" style="background-image: url('<?php bloginfo('template_url') ?>/images/bg_5.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate mb-5 text-center">
          	<p class="breadcrumbs mb-0"><span class="mr-2"><a href="<?php echo site_url(); ?>">Home <i class="fa fa-chevron-right"></i></a></span> <span>Our Blog <i class="fa fa-chevron-right"></i></span></p>
            <h1 class="mb-0 bread">Our Blog</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row d-flex">

        <?php if(have_posts()) { ?>
        <?php while(have_posts()){ the_post(); ?>

          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <div class="text text-center">
                <?php if(has_post_thumbnail()) { ?>
              	<a href="<?php the_permalink() ?>" class="block-20 img" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
                </a>
                <?php } else{?>
                  <a href="blog-single.html" class="block-20 img" style="background-image: url('<?php bloginfo('template_url') ?>/images/image_1.jpg');">
                </a>
                <?php }?>
                    
	              <div class="meta text-center mb-2 d-flex align-items-center justify-content-center">
                	<div>
                  <?php 
                  $time = get_the_date('F j, Y');
                  $date = explode(' ', $time );
                  $day = $date[1];
                  $year = $date[2];
                  $month = $date[0];
                  ?>
                		<span class="day"><?php echo substr($day, 0,2);?></span>
                		<span class="mos"> <?php echo $month ?> </span>
                		<span class="yr"> <?php echo $year ?> </span>
                	</div>
                </div>
                
                <h3 class="heading mb-3"><a href="<?php the_permalink() ?>"> <?php the_title(); ?> </a></h3>
                <p> <?php the_excerpt() ?></p>
              </div>
            </div>
          </div>
     
        <?php }} else{ ?>

        <p> <?php __('No Posts Found') ?> </p>

        <?php }?>
        </div>
        
        <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
            <?php wpex_pagination(); ?>
            </div>
          </div>
        </div>
      </div>
    </section>	



<?php get_footer() ?>