<?php get_header(); ?>
<?php the_post(); ?>

    <div class="fullwidth banner small">
        <img src="<?php echo get_template_directory_uri() ?>/images/city.jpg">
        <div class="banner-text">Page title</div>
    </div>

    <div class="container">
        <section class="content">
            <article>
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
            </article>
        </section>
    </div>

<?php get_footer(); ?>

