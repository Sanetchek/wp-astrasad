<?php
$slider = new WP_Query(array(
    'post_type' => 'slider',
    'posts_per_page' => -1,
    'order' => 'ASC'
));
?>


<?php if ( $slider->have_posts() ) : ?>
    <div class="slider">
        <?php $count = 0; ?>

        <ul class="bxslider">
            <?php while( $slider->have_posts() ) : $slider->the_post(); ?>

                <?php
                $thumb_id = get_post_thumbnail_id();
                $full_url = wp_get_attachment_image_src($thumb_id,'full', true);
                ?>
                <li style="background-image: url('<?php echo $full_url[0] ?>');">
                    <div class="overlay"></div>
                </li>
            <?php endwhile; ?>
        </ul>

        <div id="bx-pager">
            <?php while( $slider->have_posts() ) : $slider->the_post(); ?>

                <?php
                $thumb_id = get_post_thumbnail_id();
                $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail', true);
                ?>
                <a data-slide-index="<?php echo $count;  ?>" href="">
                    <img src="<?php echo $thumb_url[0]; ?>" alt="<?php echo $thumb_id; ?>">
                </a>

                <?php $count++;  ?>
            <?php endwhile; ?>
        </div>

    </div>
<?php else : ?>
    <div class="container">
        <div class="noslider">Место под слайдер</div>
    </div>
<?php endif; ?>

<?php wp_reset_query(); ?>