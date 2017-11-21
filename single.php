<?php get_header(); ?>


<!-- Post loop -->
<section class="container" style="margin-bottom: 120px;">
    <div class="row">
        <div class="col-lg-6"></div>
        <div class="col-lg-6 text-right">
            <h3 id="News" class="title">Aktualności</h3>
        </div>
        <?php while (have_posts()) : the_post(); ?>
            <article class="col-lg-12 col-md-12 col-sm-12">
                <h3 class="post__title"><p class="display-4"><?php the_title(); ?></p></h3>
                <p class="post__date--big m-b-20"><?php the_time('j F, Y'); ?></p>
                <?php the_content('Read More'); ?>
                <a href="<?php echo get_home_url(); ?>" class="btn m-t-50">Wróć do strony
                    głównej</a>

            </article>
        <?php endwhile; ?>
    </div>
</section>
<!--/ Post loop -->

<?php get_footer(); ?>
