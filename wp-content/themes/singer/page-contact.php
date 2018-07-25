<?php get_header()?>

<div class="page_container">
   <div class="container">
      <div class="row">
         <div class="page_content">
            <div class="col-md-8 col-sm-12">
               <div class="content_bar">
                  <div class="contact-page">
                     <form action="../contact-us/" id="contactForm" class="contactForm" method="post">
                        <div class="col-md-6">
                           <div class="form-group">
                              <label for="name">Name:<span class="required">*</span></label>
                              <input type="text"  id="contactName" name="contactName" class="form-control"  value="" class="required requiredField"/>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label for="email">E-mail:<span class="required">*</span></label>
                              <input type="text" name="email" id="email" class="form-control" value="" class="required requiredField email" />
                           </div>
                        </div>
                        <div class="col-md-12">
                           <div class="form-group">
                              <label for="message">Message:<span class="required">*</span></label>
                              <textarea name="comments" id="commentsText" rows="20" cols="30" class="required requiredField form-control"></textarea>
                           </div>
                        </div>
                        <div id="contact-form-submit">
                           <input class="submit" type="submit" value="Submit"/>
                           <input type="hidden" name="submitted" id="submitted" value="true" />
                        </div>
                     </form>
                  </div>
               </div>
            </div>
            <div class="col-md-4 col-sm-12">
               <!--Start Sidebar-->
               <div class="sidebar blog">
                  <aside id="woocommerce_products-2" class="sidebar-widget widget woocommerce widget_products">
                     <span>Products</span>
                     <ul class="product_list_widget">
                        <li>
                           <a href="../product/mike-myers/index.html">
                           <img width="180" height="180" src="<?php echo get_template_directory_uri(); ?>/images/Product-Image-12-180x180.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="china man" srcset="<?php echo get_template_directory_uri(); ?>/images/Product-Image-12-180x180.jpg 180w, <?php echo get_template_directory_uri(); ?>/images/Product-Image-12-150x150.jpg 150w, <?php echo get_template_directory_uri(); ?>/images/Product-Image-12-300x300.jpg 300w, <?php echo get_template_directory_uri(); ?>/images/Product-Image-12.jpg 400w" sizes="(max-width: 180px) 100vw, 180px" />		<span class="product-title">Mike Myers</span>
                           </a>
                        </li>
                        <li>
                           <a href="../product/alexis-bledel/index.html">
                           <img width="180" height="180" src="<?php echo get_template_directory_uri(); ?>/images/Product-Image-11-180x180.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="product" srcset="<?php echo get_template_directory_uri(); ?>/images/Product-Image-11-180x180.jpg 180w, <?php echo get_template_directory_uri(); ?>/images/Product-Image-11-150x150.jpg 150w, <?php echo get_template_directory_uri(); ?>/images/Product-Image-11-300x300.jpg 300w, <?php echo get_template_directory_uri(); ?>/images/Product-Image-11.jpg 400w" sizes="(max-width: 180px) 100vw, 180px" />		<span class="product-title">Alexis Bledel</span>
                           </a>
                        </li>
                        <li>
                           <a href="../product/aamir-khan/index.html">
                           <img width="180" height="180" src="<?php echo get_template_directory_uri(); ?>/images/Product-Image-10-180x180.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="aamir" srcset="<?php echo get_template_directory_uri(); ?>/images/Product-Image-10-180x180.jpg 180w, <?php echo get_template_directory_uri(); ?>/images/Product-Image-10-150x150.jpg 150w, <?php echo get_template_directory_uri(); ?>/images/Product-Image-10-300x300.jpg 300w, <?php echo get_template_directory_uri(); ?>/images/Product-Image-10.jpg 400w" sizes="(max-width: 180px) 100vw, 180px" />		<span class="product-title">Aamir Khan</span>
                           </a>
                        </li>
                        <li>
                           <a href="../product/al-pacino/index.html">
                           <img width="180" height="180" src="<?php echo get_template_directory_uri(); ?>/images/Product-Image-9-180x180.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" srcset="<?php echo get_template_directory_uri(); ?>/images/Product-Image-9-180x180.jpg 180w, <?php echo get_template_directory_uri(); ?>/images/Product-Image-9-150x150.jpg 150w, <?php echo get_template_directory_uri(); ?>/images/Product-Image-9-300x300.jpg 300w, <?php echo get_template_directory_uri(); ?>/images/Product-Image-9.jpg 400w" sizes="(max-width: 180px) 100vw, 180px" />		<span class="product-title">Al Pacino</span>
                           </a>
                        </li>
                        <li>
                           <a href="../product/aimee-garcia/index.html">
                           <img width="180" height="180" src="<?php echo get_template_directory_uri(); ?>/images/Product-Image-3-180x180.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="actoress" srcset="<?php echo get_template_directory_uri(); ?>/images/Product-Image-3-180x180.jpg 180w, <?php echo get_template_directory_uri(); ?>/images/Product-Image-3-150x150.jpg 150w, <?php echo get_template_directory_uri(); ?>/images/Product-Image-3-300x300.jpg 300w, <?php echo get_template_directory_uri(); ?>/images/Product-Image-3.jpg 400w" sizes="(max-width: 180px) 100vw, 180px" />		<span class="product-title">Aimee Garcia</span>
                           </a>
                        </li>
                     </ul>
                  </aside>
                  <aside id="woocommerce_product_categories-2" class="sidebar-widget widget woocommerce widget_product_categories">
                     <span>Product Categories</span>
                     <ul class="product-categories">
                        <li class="cat-item cat-item-12"><a href="../product-category/bollywood/index.html">Bollywood</a></li>
                        <li class="cat-item cat-item-10"><a href="../product-category/actor/index.html">Pop Stars</a></li>
                        <li class="cat-item cat-item-11"><a href="../product-category/tv-star/index.html">TV Star</a></li>
                     </ul>
                  </aside>
                  <aside id="woocommerce_top_rated_products-2" class="sidebar-widget widget woocommerce widget_top_rated_products">
                     <span>Top Rated Products</span>
                     <ul class="product_list_widget">
                        <li>
                           <a href="../product/brad-pitt/index.html">
                           <img width="180" height="180" src="<?php echo get_template_directory_uri(); ?>/images/Product-Image-1-180x180.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="brad pit" srcset="<?php echo get_template_directory_uri(); ?>/images/Product-Image-1-180x180.jpg 180w, <?php echo get_template_directory_uri(); ?>/images/Product-Image-1-150x150.jpg 150w, <?php echo get_template_directory_uri(); ?>/images/Product-Image-1-300x300.jpg 300w, <?php echo get_template_directory_uri(); ?>/images/Product-Image-1.jpg 400w" sizes="(max-width: 180px) 100vw, 180px" />		<span class="product-title">Brad Pitt</span>
                           </a>
                        </li>
                     </ul>
                  </aside>
               </div>
               <!--End Sidebar-->
            </div>
         </div>
      </div>
      <div class="clear"></div>
   </div>
</div>

<?php get_footer();?>
