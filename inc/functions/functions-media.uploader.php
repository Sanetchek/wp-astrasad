<?php
/*
    Media Uploader
*/
function astrasad_load_admin_scripts($hook) {

    wp_enqueue_media();

    wp_register_style('astrasad-metabox-image-css', get_template_directory_uri() . '/css/metabox-image.css', array(), '', 'all' );
    wp_enqueue_style('astrasad-metabox-image-css');

    wp_register_script('astrasad-metabox-image', get_template_directory_uri() . '/js/metabox-image.js', array('jquery'), '', true );
    wp_enqueue_script('astrasad-metabox-image');

}

add_action('admin_enqueue_scripts', 'astrasad_load_admin_scripts');

/* CONTACT META BOXES */
function astrasad_add_meta_box() {
    add_meta_box( 'astrasad_title_image', 'Изображение названия', 'astrasad_callback', '', 'side', 'high' );
}
function astrasad_callback( $post ) {
    wp_nonce_field( 'astrasad_save_data', 'astrasad_meta_box_nonce' );

    $value = get_post_meta( $post->ID, '_astrasad_value_key', true );

    echo '
    <div id="title-image">
         <img src="' . $value .'">
    </div>';
    echo '
    <input type="button" class="button button-secondary" value="Загрузить изображение" id="upload-button" />
    <input type="hidden" name="astrasad_field" value="' . $value . '" id="title-picture" />';
}


function astrasad_save_data( $post_id ) {

    if( ! isset( $_POST['astrasad_meta_box_nonce'] ) ){
        return;
    }

    if( ! wp_verify_nonce( $_POST['astrasad_meta_box_nonce'], 'astrasad_save_data') ) {
        return;
    }

    if( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ){
        return;
    }

    if( ! current_user_can( 'edit_post', $post_id ) ) {
        return;
    }

    if( ! isset( $_POST['astrasad_field'] ) ) {
        return;
    }

    $my_data = sanitize_text_field( $_POST['astrasad_field'] );

    update_post_meta( $post_id, '_astrasad_value_key', $my_data );

}

add_action( 'add_meta_boxes', 'astrasad_add_meta_box' );
add_action( 'save_post', 'astrasad_save_data' );