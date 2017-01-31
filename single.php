<?php get_header(); ?>

    <div id="content">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <?php $picture = get_post_meta(get_the_ID(), '_astrasad_value_key', true); ?>

            <div class="content-img" style="background-image: url('<?php echo $picture ?>')">
                <h1><?php the_title(); ?></h1>
                <div class="overlay"></div>
            </div>
            <div class="container">
                <div class="content-single">
                    <?php if (function_exists('astrasad_breadcrumbs')) astrasad_breadcrumbs(); ?>
                    <?php the_content(); ?>
                </div>

                <?php get_sidebar(); ?>
            </div>

        <?php endwhile; ?>
        <!-- post navigation -->
        <?php else: ?>
            <!-- no posts found -->
        <?php endif; ?>
    </div>

<?php get_footer(); ?>