<?php

add_action('cmb2_admin_init', 'comet_custom_metaboxes');

function comet_custom_metaboxes(){

    $post_metabox = new_cmb2_box(array(
        'title'         => 'Post\'s featured area content',
        'id'            => '_post-format-metabox',
        'object_types'   => array('post'),
    ));

    $post_metabox->add_field(array(
        'name'      => 'Video post embed url',
        'id'        => '_video_field',
        'type'      => 'text',
        'desc'      => esc_html__('Enter a youtube or vimeo video URL to show it as featured video of the post'),
    ));

    $post_metabox->add_field(array(
        'name'      => 'Audio post embed url',
        'id'        => '_audio_field',
        'type'      => 'text',
        'desc'      => esc_html__('Enter an URL from soundcloud or some other site to embed it as featured audio of the post'),
    ));

    $post_metabox->add_field(array(
        'name'      => 'Add Gallery Post Images',
        'id'        => '_gallery_field',
        'type'      => 'file_list',
        'desc'      => esc_html__('Add images from gallery to show them on post featured area'),
    ));
}