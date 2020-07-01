<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Codefield</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css"
          type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style/style.css" type="text/css"
          media="screen"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body>
<div class="base-container">
    <header>
        <div class="background"></div>
        <div class="header-content container">
            <div class="top-bar open">
                <div class="logo-bar">
                    <img class="logo" src="/assets/images/logo.svg">
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
                <h1>Developers deserve it<span class="dot"></span></h1>
                <p>Codefield, voor ondernemende en creatieve Developers en DevOps Engineers. Wij geloven in een
                    duurzame,
                    transparante en effectieve samenwerking.</p>
                <button class="button">Bekijk vacatures</button>
            </div>
        </div>

        <div class="header-image">
            <img src="https://codefield.nl/src/assets/images/homepage-edited.png">
        </div>
    </header>