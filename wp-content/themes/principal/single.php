<?php
$imgPrincipal = get_the_post_thumbnail_url(get_the_ID(), 'full');
get_header() ?>
<!--
			=============================================
				Blog Details
			==============================================
            -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="our-blog blog-details blog-details-fg">
            <div class="blog-hero-banner style2" style="background-image: url(<?php echo $imgPrincipal ?>);">
                <div class="blog-custom-container">
                    <a href="#" class="date"><?php the_date() ?></a>
                    <h2 class="blog-title"><?php the_title() ?></h2>
                    <br><br>
                </div> <!-- /.blog-custom-container -->
            </div> <!-- /.blog-hero-banner -->
            <div class="blog-fg-data style2">

                <div class="post-data">
                    <div class="blog-custom-container">
                        <div class="custom-container-bg">
                            <?php the_content(); ?>
                        </div> <!-- /.custom-container-bg -->
                    </div> <!-- /.blog-custom-container -->

                </div> <!-- /.post-data -->

                <div class="blog-custom-container">
                    <div class="custom-container-bg">
                        <div class="post-tag-area d-md-flex justify-content-between align-items-center pt-50">
                            <ul class="tags">
                                <li>Tag:</li>
                                <?php $tags = get_the_tags(get_the_ID());
                                if ($tags) :
                                    foreach ($tags as $tag) : ?>
                                        <li>
                                            <a title="<?php echo esc_attr($tag->name); ?>">
                                                <?php echo esc_html($tag->name); ?> &nbsp;
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </ul>
                            <!--ul class="share-icon">
                                <li>Share:</li>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul-->
                        </div> <!-- /.post-tag-area -->
                    <!--
                        <center>
                            <div class="coments">
                                <div id="fb-root"></div>
                                <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v6.0&appId=205217750587416&autoLogAppEvents=1"></script>
                                <div class="fb-comments" data-href="http://sysandweb.com/" data-width="100%" data-numposts="10"></div>
                            </div>
                        </center>
                    -->
                    </div> <!-- /.custom-container-bg -->
                </div> <!-- /.blog-custom-container -->




            </div> <!-- /.blog-fg-data -->
        </div> <!-- /.our-blog -->
    <?php endwhile;
else : ?>
    <h1>En mantenimiento</h1>
<?php endif; ?>
<?php get_footer() ?>