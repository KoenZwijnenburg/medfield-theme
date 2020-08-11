<?php

$args = array(
    'posts_per_page' => 3,
    'post_type' => 'stories'
);

$the_query = new WP_Query($args);

?>
<?php if ($the_query->have_posts()): ?>
    <div class="story-list blocks">
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <div class="story block">
                <div class="author-photo">
                    <img src="<?php $photo = get_field('author_photo');
                    echo $photo['sizes']['thumbnail'] ?>">
                </div>
                <h3><?php the_title(); ?></h3>
                <p><?php the_field('intro_text'); ?></p>

                <div class="author">
                    <div class="line"></div>
                    <div class="author_name"><?php echo get_field('author'); ?></div>
                </div>

                <a class="story-button" href="<?php the_permalink(); ?>">Lees verder</a>
            </div>
        <?php endwhile; ?>
    </div>
<?php endif; ?>
<?php wp_reset_postdata(); ?>