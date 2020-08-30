<? get_header( ) ?>

<?php if(have_posts()){ while(have_posts()){ the_post(); ?>
<section class="hero-wrap hero-wrap-2" style="background-image: url('<?php bloginfo('template_url')?>/images/bg_5.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate mb-5 text-center">
          	<p class="breadcrumbs mb-0"><span class="mr-2"><a href="<?php echo site_url(); ?>">Home <i class="fa fa-chevron-right"></i></a></span> <span class="mr-2"><a href="<?php echo site_url().'/blog' ?>">Blog <i class="fa fa-chevron-right"></i></a></span> <span> <?php the_title() ?> <i class="fa fa-chevron-right"></i></span></p>
            <h1 class="mb-0 bread"> <?php the_title() ?> </h1>
          </div>
        </div>
      </div>
    </section>

	<section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 ftco-animate">
          <?php if(has_post_thumbnail()) { ?>
            <p>
              <img src="<?php the_post_thumbnail_url(); ?>" alt="thumb nail" class="img-fluid">
            </p>
          <?php }?>
          <p><?php the_content(); ?>  </p>  
          
            <div class="tag-widget post-tag-container mb-5 mt-5">
              <div class="tagcloud">
              <?php $tags = get_the_tags(get_the_ID());  if($tags){?>
              <?php foreach($tags as $tag) { ?>
                <a href="<?php the_permalink(); ?>" class="tag-cloud-link"> <?php echo $tag->name ?> </a>
                
              <?php } ?>
              <?php }?>
              </div>
            </div>
           
            <div class="about-author d-flex p-4 bg-light">
            <?php $author_id = $post->post_author; ?>
              <?php $avatar = get_the_author_meta('avatar'); if($avatar){ ?>
              <div class="bio mr-5">
                <img src="<?php the_author_meta('avatar', $author_id) ?>" alt="Image placeholder" class="img-fluid mb-4">
              </div>
              <?php } ?>

              
              <div class="desc">
                <h3><?php the_author_meta('user_nicename', $author_id) ?></h3>
                
                <p> <?php  echo get_the_author_meta('description') ?> </p>
              </div>
            </div>
            <?php }}  ?>
            <hr>
            <?php comments_template() ?>


          </div> <!-- .col-md-8 -->
          <div class="col-lg-4 sidebar pl-lg-5 ftco-animate">
            <div class="sidebar-box">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="fa fa-search"></span>
                  <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                </div>
              </form>
            </div>
            <!-- side-bar here -->

            <?php if(is_active_sidebar('sidebar')){ 
              dynamic_sidebar('sidebar');
              
            }
              ?>
          </div>

        </div>
      </div>
    </section>


<?php get_footer() ?>