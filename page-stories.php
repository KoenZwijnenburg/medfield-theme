<?php
/*
Template Name: Stories
*/
?>

<?php get_header(); ?>
<?php the_post(); ?>

<?php include_once('header-small.php') ?>

<div class="container">
    <section class="content">
        <?php include('story-list.php'); ?>
    </section>
</div>

<?php include('c2a.php'); ?>

<?php get_footer(); ?>


