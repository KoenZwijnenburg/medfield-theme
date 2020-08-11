<?php get_header(); ?>
<?php the_post(); ?>

<?php include_once('header-small.php') ?>

<div class="container">
    <section class="content">
        <article>
            <?php echo get_field('content'); ?>
        </article>
    </section>
</div>

<?php get_footer(); ?>

