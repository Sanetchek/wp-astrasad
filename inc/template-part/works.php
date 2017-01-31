<?php
$works = new WP_Query(array(
    'post_type' => 'uslugi',
    'posts_per_page' => 6,
    'order' => 'ASC'
));
?>

<?php if ( $works->have_posts() ) : ?>
    <div class="offers container">
        <h3>Мы предлагаем</h3>
        <div class="offers-block">
            <?php while( $works->have_posts() ) : $works->the_post(); ?>
                <div class="offer">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('thumbnail'); ?>
                        <h2><?php the_title(); ?></h2>
                    </a>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
<?php else : ?>
    <div class="container">
        <div class="noslider">Место под работы</div>
    </div>
<?php endif; ?>

<?php wp_reset_query(); ?>