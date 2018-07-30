<?php get_header() ?>
<!-- breadcrumb -->
<div class="page_heading_container">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page_heading">
                    <h1><div id="crumbs"><a href="<?php echo get_home_url(); ?>">Trang chủ</a> &raquo; <span class="current">Ca sĩ</span></div>                    </h1>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<!-- content single page -->
<div class="page_container">
    <div class="container">
        <div class="row">
            <div class="page_content">
                <div class="col-md-8 col-sm-12">
                    <div class="content_bar">
                        <h1>Các ca sỉ</h1>
        				<ul class="relatedSinger">
                            <?php
                            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                            $related_args = array(
                                'post_type' => 'post',
                                'posts_per_page' => 32,
                                'post_status' => 'publish',
                                'paged' => $paged
                            );
                            $relatedPosts = new WP_Query( $related_args );
                            if ( $relatedPosts->have_posts() ) :
                                while ( $relatedPosts->have_posts() ) : $relatedPosts->the_post();
                            // $relatedPosts = get_posts( $related_args );
                            // foreach ($relatedPosts as $key => $casi) {
                                 $feature_image_id = get_post_thumbnail_id(get_the_ID());
                                  $feature_image_meta = wp_get_attachment_image_src($feature_image_id, 'thumbnail');
                            ?>
                            <li class="post-132 product type-product status-publish has-post-thumbnail product_cat-tv-star first instock shipping-taxable product-type-simple">
                                <a href="<?php echo get_the_permalink(get_the_ID()) ?>" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                    <img width="150"  src="<?php echo $feature_image_meta[0] ?>" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="product" />
                                    <h2 class="woocommerce-loop-product__title"><?php echo get_the_title(get_the_ID()) ?></h2>
                                </a>
                            </li>
                        <?php
                                endwhile;



                        endif;
                        ?>



        				</ul>
                        <div style="clear: both;"></div>
                        <div class="paging pagenavi">
  							<div class="paging-normal">
  								<?php if(function_exists('wp_pagenavi'))
                            		{
                            			wp_pagenavi( array( 'query' => $relatedPosts ) );
                            		}
                                    wp_reset_postdata();
                                ?>
  								<!--div id="pagination">

  								</div-->
  							</div>
  						</div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <?php get_sidebar()?>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<?php get_footer() ?>
