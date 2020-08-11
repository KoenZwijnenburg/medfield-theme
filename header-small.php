<header class="small">
    <div class="background"></div>
    <div class="header-content container">
        <div class="top-bar open">
            <div class="logo-bar">
                <a href="/"><img class="logo" src="<?php echo get_template_directory_uri() ?>/assets/images/logo.svg"></a>
                <div class="mobile-only hamburger-menu">
                    <i class="fa fa-times open"></i>
                    <i class="fa fa-bars close"></i>
                </div>
            </div>
            <nav>
                <?php wp_nav_menu(); ?>
            </nav>
        </div>

        <div class="header-text">
            <h1 class="page-title"><?php the_title(); ?><span class="dot"></span></h1>
            <p> <?php the_field('short_text'); ?> </p>
        </div>
    </div>
</header>