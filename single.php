<?php get_header(); ?>
<?php the_post(); ?>

<?php include_once('header-small.php') ?>

<div class="container">
    <section class="content">
        <article>
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
        </article>
    </section>
</div>

<?php get_footer(); ?>

