<?php get_header(); ?>

<body>

<!-- banner section start -->
<div class="banner_section layout_padding">
   <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
         <div class="carousel-item active">
            <div class="container">
               <h1 class="banner_title">Adventure</h1>
               <p class="banner_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered.</p>
               <div class="read_bt"><a href="#">Get A Quote</a></div>
            </div>
         </div>
         <div class="carousel-item">
            <div class="container">
               <h1 class="banner_title">Adventure</h1>
               <p class="banner_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered.</p>
               <div class="read_bt"><a href="#">Get A Quote</a></div>
            </div>
         </div>
         <div class="carousel-item">
            <div class="container">
               <h1 class="banner_title">Adventure</h1>
               <p class="banner_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered.</p>
               <div class="read_bt"><a href="#">Get A Quote</a></div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- banner section end -->

<!-- Include jQuery, Bootstrap JS, and other required scripts -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Use the latest jQuery version -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script> <!-- Popper for Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script> <!-- Bootstrap JS -->

<!-- services section start -->
<div class="services_section layout_padding">
   <div class="container">
      <h1 class="services_title">Services</h1>
      <p class="services_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</p>
      <div class="services_section_2">
         <div class="row">
            <div class="col-md-4">
               <div><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img-1.png" class="services_img"></div>
               <div class="btn_main"><a href="#">Rafting</a></div>
            </div>
            <div class="col-md-4">
               <div><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img-2.png" class="services_img"></div>
               <div class="btn_main active"><a href="#">Hiking</a></div>
            </div>
            <div class="col-md-4">
               <div><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img-3.png" class="services_img"></div>
               <div class="btn_main"><a href="#">Camping</a></div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- services section end -->

<?php get_footer(); ?>
</body>
