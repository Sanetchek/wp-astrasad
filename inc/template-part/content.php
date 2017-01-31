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