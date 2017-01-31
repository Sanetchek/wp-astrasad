<?php
/*
    Template Name: Works
*/
?>
<?php get_header(); ?>

<div id="content">   

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php $picture = get_post_meta(get_the_ID(), '_astrasad_value_key', true); ?>

        <div class="content-img" style="background-image: url('<?php echo $picture ?>')">
            <h1><?php the_title(); ?></h1>
            <div class="overlay"></div>
        </div>
        <div class="content-single container">
            <?php if (function_exists('astrasad_breadcrumbs')) astrasad_breadcrumbs(); ?>
            <?php the_content(); ?>
        </div>
    <?php endwhile; ?>
        <!-- post navigation -->
    <?php else: ?>
        <!-- no posts found -->
    <?php endif; ?>
    <?php wp_reset_query(); ?>

    <?php
    $works = new WP_Query(array(
        'post_type' => 'uslugi',
        'posts_per_page' => -1
    ));
    ?>
    <?php if ( $works->have_posts() ) : ?>
        <div class="offers container">
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
            <div class="noslider">Место под Услуги</div>
        </div>
    <?php endif; ?>
    <?php wp_reset_query(); ?>
</div>

<?php get_footer(); ?>
