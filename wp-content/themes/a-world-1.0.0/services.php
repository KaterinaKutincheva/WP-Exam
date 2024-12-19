<?php
/* Template Name: Services Page */
get_header();
?>

<!-- services section start -->
<div class="services_section layout_padding">
    <div class="container">
        <h1 class="services_title">Services</h1>
        <p class="services_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
        <div class="services_section_2">
            <div class="row">
                <div class="col-md-4">
                    <div><img src="<?php echo get_template_directory_uri(); ?>/images/img-1.png" class="services_img"></div>
                    <div class="btn_main"><a href="#">Rafting</a></div>
                </div>
                <div class="col-md-4">
                    <div><img src="<?php echo get_template_directory_uri(); ?>/images/img-2.png" class="services_img"></div>
                    <div class="btn_main active"><a href="#">Hiking</a></div>
                </div>
                <div class="col-md-4">
                    <div><img src="<?php echo get_template_directory_uri(); ?>/images/img-3.png" class="services_img"></div>
                    <div class="btn_main"><a href="#">Camping</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- services section end -->

<?php get_footer(); ?>
