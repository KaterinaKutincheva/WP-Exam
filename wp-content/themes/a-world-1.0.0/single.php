<?php get_header(); ?>
   <!-- Single Post Section Start -->
   <div class="single_post_section layout_padding">
      <div class="container">
         <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h1 class="single_post_title"><?php the_title(); ?></h1>
            <div class="single_post_meta">
               <span>Posted on: <?php echo get_the_date(); ?></span> | 
               <span>By: <?php the_author(); ?></span>
            </div>
            <div class="single_post_img">
               <?php if (has_post_thumbnail()) : ?>
                  <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
               <?php endif; ?>
            </div>
            <div class="single_post_content">
               <?php the_content(); ?>
            </div>
            <div class="post_navigation">
               <div class="prev_post"><?php previous_post_link('%link', 'Previous Post'); ?></div>
               <div class="next_post"><?php next_post_link('%link', 'Next Post'); ?></div>
            </div>
         <?php endwhile; endif; ?>
      </div>
   </div>
   <!-- Single Post Section End -->
<?php get_footer(); ?>
