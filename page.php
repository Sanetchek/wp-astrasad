<?php get_header(); ?>

    <div id="content">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            
            <?php get_template_part('inc/template-part/content') ?>
            
        <?php endwhile; ?>
            <!-- post navigation -->
        <?php else: ?>
            <!-- no posts found -->
        <?php endif; ?>
    </div>

<?php get_footer(); ?>