<?php
/*
Template Name: Blog Template
*/
get_header(); 
?>
   <!-- Blog Page Section Start -->
   <div class="blog_page layout_padding">
      <div class="container">
         <h1 class="page_title">Blog</h1>
         <div class="row">
            <?php
            $blog_query = new WP_Query([
               'post_type' => 'post',
               'posts_per_page' => 6,
               'paged' => get_query_var('paged') ? get_query_var('paged') : 1
            ]);

            if ($blog_query->have_posts()) : 
               while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
                  <div class="col-md-4">
                     <div class="blog_post">
                        <div class="blog_img">
                           <a href="<?php the_permalink(); ?>">
                              <!-- Adding fallback for post thumbnail -->
                              <img src="<?php echo has_post_thumbnail() ? get_the_post_thumbnail_url() : get_template_directory_uri() . '/images/default-thumbnail.jpg'; ?>" alt="<?php the_title(); ?>">
                           </a>
                        </div>
                        <h2 class="blog_post_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p class="blog_post_excerpt"><?php the_excerpt(); ?></p>
                        <div class="read_more"><a href="<?php the_permalink(); ?>">Read More</a></div>
                     </div>
                  </div>
            <?php endwhile; ?>

            <!-- Pagination Section -->
            <div class="pagination">
               <?php
               echo paginate_links([
                  'total' => $blog_query->max_num_pages,
                  'prev_text' => 'Previous',
                  'next_text' => 'Next',
                  'before_page_number' => '<span class="page-num">',
                  'after_page_number' => '</span>',
               ]);
               ?>
            </div>

            <?php else : ?>
               <p>No posts found.</p>
            <?php endif; wp_reset_postdata(); ?>
         </div>
      </div>
   </div>
   <!-- Blog Page Section End -->

   <!-- Latest Posts Section Start -->
   <div class="recent_posts_section">
      <h2>Recent Posts</h2>
      <div class="row">
         <?php
         $recent_posts_query = new WP_Query([
            'post_type' => 'post',
            'posts_per_page' => 3,
            'post__not_in' => wp_list_pluck($blog_query->posts, 'ID'), // Exclude posts already displayed in the main loop
         ]);

         if ($recent_posts_query->have_posts()) :
            while ($recent_posts_query->have_posts()) : $recent_posts_query->the_post(); ?>
               <div class="col-md-4">
                  <div class="recent_post">
                     <div class="recent_post_img">
                        <a href="<?php the_permalink(); ?>">
                           <!-- Adding fallback for post thumbnail -->
                           <img src="<?php echo has_post_thumbnail() ? get_the_post_thumbnail_url() : get_template_directory_uri() . '/images/default-thumbnail.jpg'; ?>" alt="<?php the_title(); ?>">
                        </a>
                     </div>
                     <h3 class="recent_post_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                  </div>
               </div>
         <?php endwhile; ?>
         <?php else : ?>
            <p>No recent posts available.</p>
         <?php endif; wp_reset_postdata(); ?>
      </div>
   </div>
   <!-- Latest Posts Section End -->

<?php get_footer(); ?>