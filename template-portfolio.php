<?php
/*
    Template Name: Portfolio
*/
?>
<?php get_header(); ?>

<div id="content">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php get_template_part('inc/template-part/content') ?>

    <?php endwhile; ?>
        <!-- post navigation -->
    <?php else: ?>
        <!-- no posts found -->
    <?php endif; ?>
    <?php wp_reset_query(); ?>

    <?php
    $portfolio = new WP_Query(array(
        'post_type' => 'portfolio',
        'posts_per_page' => -1
    ));
    ?>
    <?php if ( $portfolio->have_posts() ) : ?>
        <div class="offers container">
            <div class="offers-block">
                <?php while( $portfolio->have_posts() ) : $portfolio->the_post(); ?>
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
            <div class="noslider">Место под Портфолио</div>
        </div>
    <?php endif; ?>
    <?php wp_reset_query(); ?>
</div>

<?php get_footer(); ?>
