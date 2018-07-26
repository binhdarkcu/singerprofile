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
                        <h1>Aamir Khan</h1>
                        <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;?>
        				<ul class="relatedSinger">



                            <?php

                            $related_args = array(
                                'post_type' => 'post',
                                'posts_per_page' => 32,
                                'post_status' => 'publish',
                                'paged' => $paged
                            );
                            $relatedPosts = get_posts( $related_args );
                            foreach ($relatedPosts as $key => $casi) {
                                $feature_image_id = get_post_thumbnail_id($casi->ID);
                                 $feature_image_meta = wp_get_attachment_image_src($feature_image_id, 'thumbnail');
                            ?>
                            <li class="post-132 product type-product status-publish has-post-thumbnail product_cat-tv-star first instock shipping-taxable product-type-simple">
                                <a href="<?php echo get_the_permalink($casi->ID) ?>" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                    <img width="150"  src="<?php echo $feature_image_meta[0] ?>" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="product" />
                                    <h2 class="woocommerce-loop-product__title"><?php echo get_the_title($casi->ID) ?></h2>
                                </a>
                            </li>
                        <?php }?>



        				</ul>
                        <div style="clear: both"></div>
                        <div class="paging pagenavi">
  							<div class="paging-normal">
  								<?php wp_pagenavi() ?>
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
