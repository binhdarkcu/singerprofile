<?php get_header() ?>
<!-- breadcrumb -->
<?php
// Start the loop.
while ( have_posts() ) : the_post();

?>
<div class="page_heading_container">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page_heading">
                    <h1><div id="crumbs"><a href="<?php echo get_home_url(); ?>">Trang chủ</a>  &raquo; <span class="current"><?php the_title();?></span></div>                    </h1>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<!-- content single post page -->
<div class="page_container">
    <div class="container">
        <div class="row">
            <div class="page_content">
                <div class="col-md-8 col-sm-12">
                    <div class="content_bar">
                        <h1><?php the_title()?></h1>


                    <div id="product-112" class="post-112 product type-product status-publish has-post-thumbnail product_cat-tv-star first instock shipping-taxable product-type-simple">

                    	<div class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images" data-columns="4" style="">
                    	<figure class="woocommerce-product-gallery__wrapper">
                            <?php
                                $urlPRoduct = get_field('product_videos', get_the_ID());
                                $urlSplit = explode('.', $urlPRoduct);
                            ?>
                    		<iframe src="https://www.nhaccuatui.com/mh/auto/<?php echo $urlSplit[3]?>" width="620" height="350" frameborder="0" allowfullscreen allow="autoplay"></iframe>
                        </figure>
                    </div>
                    <?php
                        $singer = get_field('product_singer', get_the_ID())[0];
                    ?>

                    	<div class="summary entry-summary">
                    		<h1 class="product_title entry-title" style="font-size: 14px;">Sản phẩm của <a href="<?php echo get_the_permalink($singer->ID)?>"><?php echo $singer->post_title;?></a></h1><p class="price"></p>
                            <div class="woocommerce-product-details__short-description">
                                <?php the_content();?>
                                <div class="sharethis-inline-share-buttons"></div>
                            </div>
                            <h1 class="product_title entry-title">Các bài hát</h1><p class="price"></p>
                            <ul>
                                <?php

                                $args = array(
                                    'post_type' => 'cac-san-pham',
                                    'posts_per_page' => 30,
                                    'meta_query' => array(
                                            array(
                                                   'key' => 'product_singer',
                                                   'value' => ':"'.$singer->ID.'";',
                                                   'compare' => 'LIKE'
                                            )
                                     ),
                                     'orderby' => 'rand',
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


                    	</div><!-- .summary -->
        <?php
        endwhile;
		?>

	<section class="related products">

		<h2>Các ca sĩ khác</h2>

		<ul class="relatedSinger">
            <?php
            $related_args = array(
            	'post_type' => 'post',
            	'posts_per_page' =>8,
            	'post_status' => 'publish',
            	'post__not_in' => array( get_the_ID() ),
            	'orderby' => 'rand',
            );
            $relatedPosts = new WP_Query( $related_args );
            if ( $relatedPosts->have_posts() ) {
                while ( $relatedPosts->have_posts() ) : $relatedPosts->the_post();
                $feature_image_id = get_post_thumbnail_id(get_the_ID());
                $feature_image_meta = wp_get_attachment_image_src($feature_image_id, 'thumbnail');
              ?>
			<li class="post-132 product type-product status-publish has-post-thumbnail product_cat-tv-star first instock shipping-taxable product-type-simple">
            	<a href="<?php echo get_permalink() ?>" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                    <img width="150"  src="<?php echo $feature_image_meta[0] ?>" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="product" />
                    <h2 class="woocommerce-loop-product__title"><?php echo the_title() ?></h2>
                </a>
                <a rel="nofollow" href="<?php echo get_permalink() ?>" data-quantity="1" data-product_id="132" data-product_sku="" class="button product_type_simple ajax_add_to_cart">Xêm thêm</a>
            </li>
            <?php endwhile;
              } else {
                echo __( 'No products found' );
              }
              wp_reset_postdata();
            ?>
		</ul>

	</section>


</div><!-- #product-112 -->

                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <!--Start Sidebar-->
                    <?php get_sidebar()?>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<?php get_footer() ?>
