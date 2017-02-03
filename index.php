<?php get_header(); ?>

    <?php get_template_part('inc/template-part/bxslider') ?>

<div class="container">
    <?php if (function_exists('astrasad_breadcrumbs')) astrasad_breadcrumbs(); ?>
    <div id="content">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <article class="article">
                <div class="content-thumb">
                    <?php the_post_thumbnail('medium'); ?>
                </div>

                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php the_excerpt(); ?>
                <div class="clearfix"></div>
            </article>

        <?php endwhile; ?>
            <!-- post navigation -->
            <?php
            if(function_exists('astrasad_pagenavi')) {
                astrasad_pagenavi( '<center>', '</center>' );
            }
            ?>
        <?php else: ?>
            <!-- no posts found -->
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>