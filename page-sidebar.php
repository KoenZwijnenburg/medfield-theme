<?php
/*
Template Name: Sidebar
*/
?>

<?php get_header(); ?>
<?php the_post(); ?>

    <div class="fullwidth banner small">
        <img src="<?php echo get_template_directory_uri() ?>/images/city.jpg">
    </div>

    <div class="container uses-sidebar">
        <section class="content">
            <article>
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
            </article>

            <?php get_sidebar(); ?>
        </section>


    </div>

<?php get_footer(); ?>

