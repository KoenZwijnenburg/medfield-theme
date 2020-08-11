<?php get_header(); ?>
<?php the_post(); ?>

<?php include_once('header-small.php') ?>

<div class="container">
    <section>
        <article>
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
        </article>
    </section>
</div>

<?php get_footer(); ?>

