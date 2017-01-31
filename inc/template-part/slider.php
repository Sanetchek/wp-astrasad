<?php
    $slider = new WP_Query(array(
        'post_type' => 'slider',
        'posts_per_page' => -1,
        'order' => 'ASC'
    ));
?>


<?php if ( $slider->have_posts() ) : ?>
    <div class="slider">
        <ul id="lightSlider">
<?php while( $slider->have_posts() ) : $slider->the_post(); ?>

    <?php
    $thumb_id = get_post_thumbnail_id();
    $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
    $full_url = wp_get_attachment_image_src($thumb_id,'full-size', true);
    ?>
            <li data-thumb="<?php echo $thumb_url[0] ?>" style="background-image: url('<?php echo $full_url[0] ?>');">
                <div class="overlay"></div>
            </li>
<?php endwhile; ?>
        </ul>
    </div>
<?php else : ?>
    <div class="container">
        <div class="noslider">Место под слайдер</div>
    </div>
<?php endif; ?>

<?php wp_reset_query(); ?>