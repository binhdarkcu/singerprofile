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
                    <h1><div id="crumbs"><a href="<?php echo get_home_url(); ?>">Trang chủ</a> &raquo; <a href="<?php echo get_home_url(); ?>/ca-si">Ca sĩ</a> &raquo; <span class="current"><?php the_title()?></span></div>                    </h1>
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
                            <?php $coverProfile = get_field('profile_information_profile_cover_image', get_the_ID()); ?>
                            <div class="bgCover"><?php echo $coverProfile;?></div>
                            <img style="margin-right: 30px; float: left;" src="<?php the_post_thumbnail_url( 'large' ); ?> " />
                            <div class="profileInfo">
                                <p>Tên thật: <b><?php echo get_field('profile_information_real_name', get_the_ID());?></b></p>
                                <p>Giới tính: <b><?php echo get_field('genders', get_the_ID());?></b></p>
                                <p>Ngày sinh: <b><?php echo get_field('profile_information_profile_birthday', get_the_ID());?></b></p>
                                <p>Quốc gia: <b><?php echo get_field('profile_information_profile_country', get_the_ID());?></b></p>
                            </div>
                        </figure>
                    </div>

                    	<div class="summary entry-summary">
                    		<h1 class="product_title entry-title">Tiểu sử</h1><p class="price"></p>
                            <div class="woocommerce-product-details__short-description">
                                <div class="loadExcerpt"><?php the_excerpt();?><a href="javascript:void(0)" class="loadMore">Xem thêm</a></div>
                                <div class="loadContent"><?php the_content(); ?><a class="less-button" href="javascript:void(0)">Đóng lại</a></div>
                                <script type="text/javascript">
                                   jQuery('.loadMore').on('click', function(e) {
                                        e.preventDefault();
                                        jQuery('.loadExcerpt').hide();
                                        jQuery('.loadContent').show();
                                   });
                                   jQuery('.less-button').on('click', function(e) {
                                        e.preventDefault();
                                        jQuery('.loadContent').hide();
                                        jQuery('.loadExcerpt').show();
                                   });
                               </script>
                            </div>
                            <h1 class="product_title entry-title" style="margin-top: 20px;">Các bài hát</h1><p class="price"></p>
                            <ul>
                                <?php

                                $args = array(
                                    'post_type' => 'cac-san-pham',
                                    'posts_per_page' => 15,
                                    'meta_query' => array(
                                            array(
                                                   'key' => 'product_singer',
                                                   'value' => ':"'.get_the_ID().'";',
                                                   'compare' => 'LIKE'
                                            )
                                     )
                                );
                                $products = new WP_Query($args);
                                    if ( $products->have_posts() ) {
                                while ( $products->have_posts() ) : $products->the_post();
                                    $urlPRoduct = get_field('product_videos', get_the_ID());
                                    $urlSplit = explode('.', $urlPRoduct);
                                ?>
                                <li>
                                    <a href="<?php echo get_the_permalink(get_the_ID())?>"><?php echo get_the_title(get_the_ID())?></a>
                                    <a href="javascript:void(0)" data-song="<?php echo $urlSplit[3];?>" class="playMusic" style="float: right;margin-right: 20px;">Play</a>
                                </li>
                                <?php endwhile;
                                  } else {
                                    echo __( 'No products found' );
                                  }
                                  wp_reset_postdata();
                                ?>
                            </ul>

                            <script>
                                jQuery(document).ready(function(){
                                    jQuery('.playMusic').click(function(){
                                        jQuery('.playPopup iframe').remove();
                                        var src = jQuery(this).attr('data-song');
                                        jQuery('.playPopup').append('<iframe src="https://www.nhaccuatui.com/mh/auto/'+src+'" frameborder="0" allow="autoplay"></iframe>');
                                        jQuery('.playPopup').show();
                                    });
                                });
                            </script>

                            <div class="playPopup" style="display: none;">
                                <a style="float: right;font-size: 24px;font-family: cursive;" href="javascript:void(0)" onclick="jQuery('.playPopup').hide(); jQuery('.playPopup iframe').remove()">x</a>

                            </div>
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
