<?php get_header(); ?>
<?php the_post(); ?>

<?php include_once('header-small.php') ?>

    <div class="container job-page">
        <div class="contact">
            <div class="block white">
                <h3>Dave Tak</h3>
                <p>d.tak@codefield.nl <br> 06-14433764</p>
                <img src="http://localhost:8000/wp-content/uploads/2020/07/profile.jpg">
                <div class="socials">
                    <a href="https://wa.me/31614433764" class="social-button whatsapp"><i
                                class="fab fa-whatsapp"></i></a>
                    <a href="https://www.linkedin.com/in/davetak/" class="social-button linkedin">
                        <i class="fab fa-linkedin-in" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            <a href="#" class="button filled large">Solliciteer direct</a>
        </div>

        <section>
            <article class="job-details">
                <h2><?php the_title(); ?><span class="dot"></span></h2>
                <div class="info">
                    <div class="info-pair">
                        <span class="key">Vakgebied:</span> <span class="value"><?php the_field('field') ?></span>
                    </div>
                    <div class="info-pair">
                        <span class="key">Standplaats:</span> <span class="value"><?php the_field('city') ?></span>
                    </div>
                </div>

                <p class="intro"><?php the_field('short_description'); ?></p>

                <div class="job-conditions">
                    <?php
                    $rows = get_field('conditions');
                    if ($rows) {
                        foreach ($rows as $row) {
                            echo '<div class="condition">';
                            echo '<span class="label">' . $row["label"] . ':</span>';
                            echo '<span class="value">' . $row["value"] . '</span>';
                            echo '</div>';
                        }
                    }
                    ?>
                </div>

                <h3>Over de opdracht </h3>
                <p><?php the_field('about_job'); ?></p>

                <h3>Werken bij codefield</h3>
                <ul class="icon-list">
                    <li><i class="fa fa-check"></i>Leuker en uitdagender werk.</li>
                    <li><i class="fa fa-check"></i>Meer vrije tijd of meer salaris.</li>
                    <li><i class="fa fa-check"></i>Een betere developer worden.</li>
                    <li><i class="fa fa-check"></i>Een eerlijke en transparante samenwerking.</li>
                </ul>

                <div class="react">
                    <h3>Contact</h3>
                    <?php echo do_shortcode('[contact-form-7 id="77" title="Vacature"]'); ?>
                </div>

            </article>
        </section>
    </div>

<?php get_footer(); ?>