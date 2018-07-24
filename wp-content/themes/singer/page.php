<?php get_header()?>

        <div role="main" class="main">

            <section class="pagecontent <?php if(is_page('term-of-service') || is_page('privacy')) echo 'term-conditions';?>">
                <div class="container">
                    <?php the_title( '<h3 class="entry-title">', '</h3>' ); ?>
                    <?php while ( have_posts() ) : the_post();
                        the_content();
                    endwhile; ?>

                </div>
            </section>
        </div>

<?php get_footer();?>
