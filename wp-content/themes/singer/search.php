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
                        <h1>Kết quả tìm kiếm: <?php echo get_search_query();?></h1>
                        <?php $postIds; ?>
                        <h3>Ca sĩ</h3>
        				<ul class="relatedSinger">
                            <?php
                            print_r(get_search_query());
                            $q1 = new WP_Query( array(
                                'post_type' => 'post',
                                'posts_per_page' => 24,
                                's' => get_search_query()
                            ));

                            $results = new WP_Query();
                            $results->posts = array_unique( array_merge( $q1->posts ), SORT_REGULAR );
                            $results->post_count = count( $results->posts );
                            if ( !empty( $results->posts ) ) {
                        		foreach ( $results->posts as $key => $result ) {
                                    $feature_image_id = get_post_thumbnail_id($result->ID);
                                    $feature_image_meta = wp_get_attachment_image_src($feature_image_id, 'thumbnail');
                                    $postIds[]=$result->ID;
                        			if(get_post_type($result->ID) == 'post') {
                                        ?>
                                        <li class="post-132 product type-product status-publish has-post-thumbnail product_cat-tv-star first instock shipping-taxable product-type-simple">
                                            <a href="<?php echo get_the_permalink(get_the_ID()) ?>" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                                <img width="150"  src="<?php echo $feature_image_meta[0] ?>" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="product" />
                                                <h2 class="woocommerce-loop-product__title"><?php echo get_the_title($result->ID) ?></h2>
                                            </a>
                                        </li>
                                        <?php
                                    }
                        		}
                        	}
                            ?>
        				</ul>

                        <div class="clear"></div>
                        <h3>Các bài hát</h3>

                        <ul>
                            <?php
                                $arrayIds = [];
                                foreach ($postIds as $key => $id) {
                                    $arrayIds[] = ':"'.$id.'";';
                                }
                                $args = array(
                                    'post_type' => 'cac-san-pham',
                                    'posts_per_page' => 15,
                                    'meta_query' => array(
                                            array(
                                                   'key' => 'product_singer',
                                                   'value' => $postIds,
                                                   'compare' => 'LIKE'
                                            )
                                     )
                                );
                                $products = new WP_Query($args);
                                    if ( $products->have_posts() ) {
                                while ( $products->have_posts() ) : $products->the_post();

                                ?>
                                <li>
                                    <a href="<?php echo get_the_permalink(get_the_ID())?>"><?php echo get_the_title(get_the_ID())?></a>
                                </li>
                                <?php endwhile;
                                  } else {
                                    echo __( 'No products found' );
                                  }
                                  wp_reset_postdata();
                                ?>
                        </ul>

                        <div style="clear: both;"></div>
                        <div class="paging pagenavi">
  							<div class="paging-normal">
  								<?php if(function_exists('wp_pagenavi'))
                            		{
                            			//wp_pagenavi( array( 'query' => $relatedPosts ) );
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
