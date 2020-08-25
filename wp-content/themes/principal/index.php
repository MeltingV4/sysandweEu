<?php

/**
 *Template Name:Custom PHP
 *The template for display all pages. 
 * 
 * 
 * 
 * 
 */

$contador = 0;

//var_dump(the_post());die();
get_header() ?>



<section id="main">


    <!--
    =============================================
        Theme Solid Inner Banner
    ==============================================
    -->
    <div class="solid-inner-banner">
        <h2 class="page-title">Blog Default</h2>
        <ul class="page-breadcrumbs">
            <li><a href="index.html">Home</a></li>
            <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
            <li>Blog</li>
        </ul>
    </div> <!-- /.solid-inner-banner -->

    <!--
                =============================================
                    Blog Default
                ==============================================
                -->
    <section id="article_list">
        <div class="our-blog blog-default pt-150 mb-200">
            <div class="full-grid-container">
                <?php if (have_posts()) : while (have_posts()) : the_post();
                        $contador++;
                        if (!has_post_thumbnail() || $contador % 2 == 0) { ?>
                            <div class="single-blog-post blog-text-style">
                                <div class="post-data">
                                    <div class="date"><?php the_date() ?> </div>
                                    <h5 class="blog-title-two title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h5>
                                    <p><?php the_excerpt(); ?></p>
                                    <a href="<?php the_permalink() ?>" class="read-more"><i class="flaticon-next-1"></i></a>
                                </div> <!-- /.post-data -->
                            </div> <!-- /.single-blog-post -->
                        <?php }  else if ($contador % 4 == 0) { ?>
                            <div class="single-blog-post bg-solid-post hide-pr">
                                <div class="post-data">
                                    <h5 class="title"><a href=<?php the_permalink() ?>"><?php the_excerpt(); ?></a></h5>
                                    <div class="author"><?php the_title() ?></div>
                                </div> <!-- /.post-data -->
                            </div> <!-- /.single-blog-post -->
                        <?php } else { ?>
                            <div class="single-blog-post ">
                                <div class="img-holder">
                                    <a href="<?php the_permalink() ?>"><?php if (has_post_thumbnail()) {the_post_thumbnail('list_articles_thumbs');} ?>
                                    </a>
                                </div>
                                <div class="post-data">
                                    <div class="date"><?php the_date() ?> </div>
                                    <h5 class="blog-title-two title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h5>
                                    <p><?php the_excerpt(); ?></p>
                                    <a href="<?php the_permalink() ?>" class="read-more"><i class="flaticon-next-1"></i></a>
                                </div> <!-- /.post-data -->
                            </div> <!-- /.single-blog-post -->
                    <?php }
                    endwhile; ?>

                    <div class="paginador theme-pagination-one pt-15">
                        <?php echo paginate_links(); ?>
                    </div>

                <?php else : ?>
                    <h1>No se encuentran Articulos</h1>
                <?php endif; ?>


                <!--div class="theme-pagination-one pt-15">
                    <ul>
                       <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#"><i class="flaticon-next-1"></i></a></li>
                    </ul>
                </div-->
                <!-- /.theme-pagination-one -->


            </div> <!-- /.full-grid-container -->
        </div> <!-- /.our-blog -->

    </section>
</section>


<?php get_footer() ?>