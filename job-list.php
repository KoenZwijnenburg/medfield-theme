<?php function getJobs($numberOfJobs)
{ ?>

    <?php $args = array(
    'posts_per_page' => $numberOfJobs,
    'post_type' => 'job'
);

    $the_query = new WP_Query($args);

    ?>
    <?php if ($the_query->have_posts()): ?>
    <div class="jobs">
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <div class="job">
                <a class="job-url" href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
<!--                <div class="job-info">-->
<!--                    <span class="label">Vakgebied:</span> <span class="value">--><?php //echo get_field('field'); ?><!--</span>-->
<!--                    <span class="label">Stad:</span> <span class="value">--><?php //echo get_field('city'); ?><!--</span>-->
<!--                </div>-->
                <p class="job-description">
                    <?php echo get_field('short_description'); ?>
                </p>
                <div class="buttons">
                    <a href="<?php the_permalink(); ?>" class="button">Meer info</a>
                </div>
                </a>
            </div>
        <?php endwhile; ?>
    </div>
<?php endif; ?>
    <?php wp_reset_postdata();
} ?>

