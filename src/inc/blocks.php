<?php
require $template_directory . '/inc/blocks/hero.php';
require $template_directory . '/inc/blocks/blue-content-wrapper.php';
require $template_directory . '/inc/blocks/full-width-centred-content.php';
require $template_directory . '/inc/blocks/two-column-image-text.php';
require $template_directory . '/inc/blocks/white-content-wrapper.php';
require $template_directory . '/inc/blocks/three-column-content.php';


add_filter( 'allowed_block_types', '_allowed_block_types' );
function _allowed_block_types( $allowed_blocks ) {
    return array(
        'core/image',
        'core/paragraph',
        'core/heading',
        'core/list',
        'core/gallery',
        'core/list',
        'core/quote',
        'core/file',
        'core/table',
        'core/html',
        'core/embed',
        'core/video',
        'core/separator',
        'core/spacer',
        'core-embed/youtube',
        'core-embed/vimeo',
        'lazyblock/hero',
        'lazyblock/blue-block',
        'lazyblock/full-width-centred-content',
        'lazyblock/two-column-image-text',
        'lazyblock/white-content-wrapper',
        'lazyblock/three-columns',
        'wp-bootstrap-blocks/container',
        'wp-bootstrap-blocks/row',
        'wp-bootstrap-blocks/column',
        'wp-bootstrap-blocks/button'
    );
}