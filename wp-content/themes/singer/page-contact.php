<?php get_header()?>

        <div role="main" class="main">
            <section class="contact-page">
                <div class="container">
                    <h3 class="title">Contact</h3>


                    <div class="rowcontact">
                        <?php echo do_shortcode( '[contact-form-7 id="16" title="Contact form"]' ); ?>
                    </div>
                    <div class="social">
                        <ul>
                            <li><a href="#"><img src="images/glyphicons-social-31-facebook.png"/></a></li>
                            <li><a href="#"><img src="images/glyphicons-social-32-twitter.png"/></a></li>
                            <li><a href="#"><img src="images/glyphicons-social-18-linked-in.png"/></a></li>
                        </ul>
                        <div class="infoBox">
                            <h4>Contact Information</h4>
                            <span>+1206.905.9614</span>
                            <a href="mailto: support@bzzz.chat">support@bzzz.chat</a>
                            <b>Mortreal, QC Canada</b>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </section>
        </div>

<?php get_footer();?>
