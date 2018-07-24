<?php get_header()?>

        <div role="main" class="main">

            <section class="pagecontent">
                <div class="container">
                    <?php the_title( '<h3 class="entry-title">', '</h3>' ); ?>
                    <div class="main-video">
                        <video data-source="https://youtu.be/015mxWzVstk" data-poster="" id="mainVideo" class="video-js vjs-default-skin vjs-fullscreen" width="100%" height="100%"
                          controls preload="none" poster='' data-setup='{ "controlBar": { } }'>
                        </video>
                    </div>
                    <h3>Related videos</h3>
                    <ul class="videoPlayerList">
                        <li><a href="javascript:void(0)" data-poster="videos/doi-giay-huyen-thoai.jpg" data-source="https://www.youtube.com/watch?v=PxD1Gv8QTcQ"><img src="videos/doi-giay-huyen-thoai.jpg"/></a></li>
                        <li><a href="javascript:void(0)" data-poster="videos/mat-khau-iphone.jpg" data-source="https://www.youtube.com/watch?v=eiPxG5wySuo"><img src="videos/mat-khau-iphone.jpg"/></a></li>
                        <li><a href="javascript:void(0)" data-poster="videos/nhin-guong-xem-dien-thoai.jpg" data-source="https://www.youtube.com/watch?v=MRl7-KocvCQ"><img src="videos/nhin-guong-xem-dien-thoai.jpg"/></a></li>
                        <li><a href="javascript:void(0)" data-poster="videos/phat-hien-dien-thoai.jpg" data-source="https://www.youtube.com/watch?v=u1KFXGxQnuM"><img src="videos/phat-hien-dien-thoai.jpg"/></a></li>
                    </ul>
                </div>
            </section>
        </div>

<?php get_footer();?>
<script src="js/class.mainvideo.js"></script>
