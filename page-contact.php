<?php
/*
Template Name: Contact us
*/
?>

<?php get_header(); ?>
<?php the_post(); ?>

<div class="fullwidth banner small">
    <img src="<?php echo get_template_directory_uri() ?>/images/city.jpg">
</div>

    <div class="container">
        <section class="content">
            <div class="halfwidth">
                <article>
                    <h1><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                </article>
            </div>

            <div class="halfwidth right">
                <h1>Contact us</h1>
                <form class="contact-form">
                    <input type="text" placeholder="name">
                    <input type="text" placeholder="company">
                    <input type="text" placeholder="subject">
                    <textarea placeholder="message"></textarea>
                    <input type="submit" class="button" value="send">
                </form>
            </div>
        </section>
    </div>

<?php get_footer(); ?>

