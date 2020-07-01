<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>
<?php the_post(); ?>

<div class="slogan container">
    <h2>Creatieve <span class="purple">ondernemers</span> als resultaat</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ullamcorper urna ac rhoncus blandit. Nam varius
        risus et ultricies posuere.</p>
</div>


<!-- Stories / loop through stories -->
<div class="stories container blocks">
    <div class="story block">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ullamcorper urna ac rhoncus blandit. Nam
            varius
            risus et ultricies posuere.</p>
        <div class="author">
            <div class="line"></div>
            <div class="author-name">My name</div>
            <div class="author-title">Jobtitle</div>
        </div>
    </div>

    <div class="story block block-author white">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ullamcorper urna ac rhoncus blandit. Nam
            varius
            risus et ultricies posuere.</p>
        <div class="author">
            <div class="line"></div>
            <p class="author-name">My name</p>
            <p class="author-title">Jobtitle</p>
        </div>
    </div>
    <div class="story block">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ullamcorper urna ac rhoncus blandit. Nam
            varius
            risus et ultricies posuere.</p>
        <div class="author">
            <div class="line"></div>
            <div class="author-name">My name</div>
            <div class="author-title">Jobtitle</div>
        </div>
    </div>
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

