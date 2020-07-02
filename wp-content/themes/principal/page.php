<?php get_header() ?>
<section id="main">
    <section id="article_list">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article>
                    <div class="extract"><?php the_content(); ?></div>
                </article>
            <?php endwhile;
        else : ?>
            <h1>En mantenimiento</h1>
        <?php endif; ?>
    </section>
</section>

<?php get_footer() ?>