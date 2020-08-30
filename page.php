<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-lg-8 ftco-animate">
        <!-- ============================================================== -->
        </div>
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



<?php get_footer(); ?>