<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>
<?php the_post(); ?>

<header>
    <div class="background"></div>
    <div class="header-content container">
        <div class="top-bar open">
            <div class="logo-bar">
                <a href="/">
                    <img class="logo" src="<?php echo get_template_directory_uri() ?>/assets/images/logo.svg"></a>
                <div class="mobile-only hamburger-menu">
                    <i class="fa fa-times open"></i>
                    <i class="fa fa-bars close"></i>
                </div>
            </div>
            <nav>
                <?php wp_nav_menu(); ?>
            </nav>
        </div>
        <div class="banner">
            <?php $header = get_field('header'); ?>
            <h1><?php echo $header['title']; ?><span class="dot"></span></h1>
            <p><?php echo $header['description']; ?></p>
            <a href="/werken-bij" class="button filled">Bekijk vacatures</a>
        </div>
    </div>

    <div class="header-image">
        <div class="img-box">
            <div class="dots">
                <div class="dot transparent large"></div>
                <div class="dot transparent large"></div>
                <div class="dot transparent large"></div>
            </div>
            <img src="<?php $img = $header['img'];
            echo $img['sizes']['large']; ?>" alt="<?php echo $img['alt']; ?>">
        </div>
    </div>
</header>


<div class="slogan container">
    <?php $slogan = get_field('slogan'); ?>
    <h2> <?php echo $slogan['title']; ?></h2>
    <p><?php echo $slogan['description']; ?></p>
</div>


<!-- Stories / loop through stories -->
<div class="about-home container">
    <div class="about-blocks blocks">
        <?php $rows = get_field('about_medfield');
        if ($rows) {
            foreach ($rows as $row) { ?>
                <div class="story block">
                    <h3><?php echo $row['title']; ?></h3>
                    <p><?php echo $row['text']; ?></p>
                    <a class="story-button" href="<?php echo $row['button_link'] ?>"><?php echo $row['button_text']; ?></a>
                </div>
            <?php }
        } ?>
    </div>
</div>


<div class="jobs-home container">
    <div class="jobs-home-list">
        <h2>Vacatures<span class="dot orange"></span></h2>
        <?php include('job-list.php');
        getJobs(3); ?>
    </div>

    <div class="img">
        <div class="img-box">
            <div class="dots">
                <div class="dot transparent large"></div>
                <div class="dot transparent large"></div>
                <div class="dot transparent large"></div>
            </div>
            <img src="<?php $img = get_field('jobs_image');
            echo $img['sizes']['large']; ?>" alt="<?php echo $img['alt']; ?>">
        </div>
    </div>
</div>

<?php include('c2a.php'); ?>


<?php get_footer(); ?>

