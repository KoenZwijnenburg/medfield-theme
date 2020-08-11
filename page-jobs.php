<?php
/*
Template Name: Jobs
*/
?>

<?php get_header(); ?>
<?php the_post(); ?>

<?php include_once('header-small.php') ?>

<div class="container">
    <section class="content">
        <h1><?php the_title() ?><span class="dot"></span></h1>
        <div class="job-section">
            <div id="jobs" class="job-list">
                <?php include('job-list.php');
                getJobs(9); ?>
            </div>
        </div>
    </section>
</div>

<?php include('c2a.php'); ?>

<?php get_footer(); ?>


