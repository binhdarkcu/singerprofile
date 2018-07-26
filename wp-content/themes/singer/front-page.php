<?php get_header()?>

<div class="page_container">
<div class="container">
<div class="row">
    <div class="page_content">
        <!-- home-page top heading section -->
<div class="col-md-12">
<div class="page_info">
            <span class="top-heading text-center">Book A Celebrity Of Your Choice</span>
            <div class="clear"></div>
            <span class="top-sub-heading text-center">Grand Productions Offers The Largest, Most Extensive List Of Popular Actors And Actress In The Industry</span>
              </div>
      </div>
      <div class="clear"></div>                <!-- /home-page top heading section -->
        <div class="feature_content_wrapper">
            <div class="col-md-8 col-sm-12">
                <div class="feature_content">
                    <!-- home-page sliders section -->
                      <div class="slider_wrapper">
                        <input type="hidden" id="txt_slidespeed" value=" 3000"/>
                          <div class="flexslider">
                            <ul class="slides">
                              <?php
                            		$args = array(
                            			'post_type'           => 'slider',
                            			'post_status'         => 'publish',
                                  'posts_per_page'      => -1,
                            		);
                            		$loop = new WP_Query( $args );
                                //print_r($loop);
                            		if ( $loop->have_posts() ) {
                          	    while ( $loop->have_posts() ) : $loop->the_post();
                                $feature_image_id = get_post_thumbnail_id(get_the_ID());
                                $feature_image_meta = wp_get_attachment_image_src($feature_image_id, '32');
                              ?>
                              <li><img  src="<?php echo $feature_image_meta[0] ?>" alt=""/></li>
                            <?php endwhile;
                              } else {
                                echo __( 'No products found' );
                              }
                              wp_reset_postdata();
                            ?>
                            </ul>
                          </div>
                        </div>
                        <div class="featurebox">
                          <span class="feature-heading">Services</span>
                          <div class="featurebox_wrapper">
                            <div class="row">
                              <div class="col-md-12 col-sm-12">
                                <div class="row row-service">
                                  <!-- First Feature Area  -->
                                  <?php
                                		$args = array(
                                			'post_type'           => 'post',
                                			'post_status'         => 'publish',
                                      'posts_per_page'      => 9,
                                		);
                                		$loop = new WP_Query( $args );
                                    //print_r($loop);
                                		if ( $loop->have_posts() ) {
                              	    while ( $loop->have_posts() ) : $loop->the_post();
                                    $feature_image_id = get_post_thumbnail_id(get_the_ID());
                                    $feature_image_meta = wp_get_attachment_image_src($feature_image_id, '32');
                                  ?>
                                  <div class="col-md-4 col-sm-4">
                                    <div class="featurebox_desc">
                                      <span class="feature-title"><?php echo the_title() ?></span>
                                      <div class="feature-img-section">
                                        <a href="shop/index.html">
                                          <span class="overlay" ></span>
                                          <img src="<?php echo $feature_image_meta[0] ?>" alt="first-feature-image"/>
                                        </a>
                                      </div>
                                      <p><?php echo mb_strimwidth(get_the_content(), 0, 90, '...');?></p>
                                      <a class="readmore" href="<?php echo get_permalink() ?>">Read More</a>
                                    </div>
                                  </div>
                                  <?php endwhile;
                                    } else {
                                      echo __( 'No products found' );
                                    }
                                    wp_reset_postdata();
                                  ?>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="clear"></div>                            <!-- /home-page features section -->
                    <!-- home-page testimonial section -->
      <!-- Place somewhere in the <body> of your page -->
<div class="testi">
<div class="flexslider">
<ul class="slides">
    <li>
        <div class="feature_testimonial">
            <div class="col-md-12 col-sm-12">
                <div class="row">
                                                    <span class="testimonial-heading">Our Customer</span>
                                                <div class="col-md-3 col-sm-3">
                        <div class="circle">
                                                                    <a href="shop/index.html"><img src="<?php echo get_template_directory_uri(); ?>/images/testimonial.jpg" alt="testimonial-image"/></a>
                                                            </div>
                    </div>
                    <div class="col-md-9 col-sm-9">
                                                            <p>Entertainment Booking Agency is the right place. They will offer you the best price and contact the management or we directly contact Andre Agassi. For corporate appearances or speaking engagements you can contact their agents and they will help you true the process.</p>
                                                            <a class="testimonial_link" href="shop/index.html">Emma Jonas</a>
                                                    </div>
                </div>
            </div>
        </div>
    </li>

            </ul>
</div>
</div>



<div class="clear"></div>                            <!-- /home-page testimonial section -->
                </div>
            </div>
            <!-- home-page sidebars section -->
  <div class="col-md-4 col-sm-12">
<div class="feature_sidebar">
<div class="sidebar home">
    <div class="sidebar-widget"><div class="default_plugin">    <script>
jQuery.noConflict();

var SpecificDaysToWork = [""];
var SpecificDaysNotToWork = [""];
var disabledDays = [];
function disableSpecificDaysAndWeekends(date) {
    var m = date.getMonth();
    var d = date.getDate();
    var y = date.getFullYear();
    var day = date.getDay();
    if (jQuery.inArray(day, disabledDays) !== -1) {
        if (jQuery.inArray((m + 1) + '-' + d + '-' + y, SpecificDaysToWork) !== -1) {
            return [true];
        } else {
            return [false];
        }
    } else {
        if (jQuery.inArray((m + 1) + '-' + d + '-' + y, SpecificDaysNotToWork) !== -1) {
            return [false];
        } else {
            return [true];
        }
    }

}
/** init datepicker */
jQuery(document).ready(function () {
    jQuery.datepicker.setDefaults({
        dateFormat: 'dd/mm/yy',
    });

    jQuery('#aptcal').datepicker({
        minDate: 0,
        beforeShowDay: disableSpecificDaysAndWeekends
    });

});

</script>
        <div class="ink-container">
        <div class="inkappointment_wrapper">
            <div class="inkappointment_form_top">
            </div>
            <div class="inkappointment_form_wrapper">
                <form method="post" action="#" id="ink-form" name="ink-form" class="ink-form" >
                    <header id="ink-header" class="ink-info"></header>
                    <ul class="inkappform">
                        <li class="textheading">
                            <h2>
                                <span class="msg_text">
                                    Book Your Celebrity                                        </span>
                            </h2>
                        </li>
                        <li class="textfname">
                            <input type="text" name="fname" id="fname" class="inktext inklarge inkrequired" placeholder="Name"  maxlength="100" />
                            <label id="apt_error"></label>
                        </li>
                        <li class="textaptemail">
                            <input type="email" name="aptemail" id="aptemail" class="inktext inklarge inkrequired" placeholder="Email"  maxlength="100" />
                        </li>
                        <li class="textaptphone">
                            <input type="text" name="aptphone" id="aptphone" class="inktext inklarge" placeholder="Contact Number" maxlength="100" />
                        </li>
                        <li class="textfixdate">
                            <span class="fix_date">
                                Fix Appointment Date                                    </span>
                        </li>
                        <li class="select_item">
                            <select  id="service_select" name="service_select" class="inktext inklarge inkrequired" >
                                <option  value="noavi">Select Service</option>
                                                                            <option  value="1">Wedding Party</option>
                                                                            <option  value="2">Office Party</option>
                                                                            <option  value="3">Live Concert</option>
                                                                    </select>
                        </li>
                        <li class="textaptcal">
                            <input type="text" name="aptcal" id="aptcal" class="dateField inktext inklarge" placeholder="Select Date" />
                        </li>
                        <li class="select_item">
                            <select id="time" name="time" class="inktext inklarge inkrequired">
                                <option value="notavi">Select Time</option>
                            </select>
                        </li>
                        <li class="textprice">
                            <div id="price">
                                                                            <input type="text" name="sr_price" id="sr_price"  class="inktext inklarge inkrequired" value="Service Price"/>

                            </div>
                        </li>

                        <!-- Custom fields start -->
                                                        <!--custom field end-->
                        <li class="textfixdate">
                            <span class="fix_date">Your Custom Message</span>
                        </li>
                        <li class = "textaptmessage">
                            <textarea name = "aptmessage" id = "aptmessage" class = "inktext inklarge" maxlength = "255" rows = "3" cols = "50" placeholder = "Your Message (Optional)" ></textarea>
                        </li>
                                                        <li class="submit_bg">
                            <input type="hidden" name="random" id="random"  value="1829221065"/>
                            <input type="submit" name="submit" id="submit"  class='ink-submit inkrequired' value="Book Appointment"/>
                        </li>
                    </ul>
                </form>
            </div>
            <div class="inkappointment_form_bottom">
            </div>
        </div>
    </div>
    </div></div>            <div class="sidebar-widget">
        <div class="feature_addressbar">
            <ul>
                <li class="hour" aria-label="Left Align"><span class="heading">Timing</span>
                    <span class="content">Mon-Fir 10:00AM-06:00PM<br>
Sat-Sun 10:00AM-02:30PM</span>
                </li>
                <div class="clear"></div>
                <li class="address"><span class="heading">Address</span>
                    <span class="content">
                        2B Avenue Rd,<br> London, UK</span></li>
                <span class="address-tip"></span>
                <div class="clear"></div>
            </ul>
        </div>
    </div>
    <div class="feature_map">
        <div class="map" style="overflow:hidden;">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2477.2773283368374!2d-0.17928788450186472!3d51.61812881042245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487619e7d81efb57%3A0xe5acfb276abdf40a!2s2B+Avenue+Rd%2C+London%2C+UK!5e0!3m2!1sen!2sin!4v1480061765471" width="600" height="450" frameborder="0"></iframe>                                    </div>
    </div>
</div>
</div>
</div>
<div class="clear"></div>                    <!-- /home-page sidebars section -->
        </div>
    </div>
</div>
<div class="clear"></div>
</div>
</div>

<?php get_footer();?>
