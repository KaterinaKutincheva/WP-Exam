<?php
/* Template Name: Contact Page */
get_header();
?>

<!-- contact section start -->
<div class="contact_section layout_padding">
    <div class="container">
        <h1 class="contact_title">Contact Us</h1>
        <div class="email_text">
            <div class="form-group">
                <input type="text" class="email-bt" placeholder="Name" name="Name">
            </div>
            <div class="form-group">
                <input type="text" class="email-bt" placeholder="Phone Number" name="PhoneNumber">
            </div>
            <div class="form-group">
                <input type="email" class="email-bt" placeholder="Email" name="Email">
            </div>
            <div class="form-group">
                <textarea class="massage-bt" placeholder="Message" rows="5" id="comment" name="Message"></textarea>
            </div>
            <div class="send_btn"><a href="#">SEND</a></div>
        </div>
    </div>
</div>
<!-- contact section end -->

<?php get_footer(); ?>
