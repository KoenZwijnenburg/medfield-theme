<?php get_header(); ?>


    <div class="fullwidth banner small">
        <img src="<?php echo get_template_directory_uri() ?>/images/city.jpg">
    </div>

    <div id="content" class="container">
        <section class="article-list">
            <h1>Latest news</h1>
            <?php the_loop(); ?>
        </section>
    </div>

<?php get_footer(); ?>