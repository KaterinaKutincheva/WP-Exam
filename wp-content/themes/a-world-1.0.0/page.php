<?php get_header(); ?>
   <!-- about section start -->
   <div class="about_section layout_padding">
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-6">
               <div class="about_title_main">
                  <h1 class="about_title"><?php the_title() ?></h1>
                  <p class="about_text"><?php the_content() ?> </p>
               </div>
            </div>
            <div class="col-md-6 padding_right_0">
               <div><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/about-img.png" class="about_img"></div>
            </div>
         </div>
      </div>
   </div>
   <!-- about section end -->
<?php get_footer(); ?>