<?php
if ( function_exists( 'lazyblocks' ) ) :

    lazyblocks()->add_block( array(
        'id' => 139,
        'title' => 'Full Width Centred Content',
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M3 17h18v-2H3v2zm0 3h18v-1H3v1zm0-7h18v-3H3v3zm0-9v4h18V4H3z" /></svg>',
        'keywords' => array(
        ),
        'slug' => 'lazyblock/full-width-centred-content',
        'description' => '',
        'category' => 'wightfibre',
        'category_label' => 'wightfibre',
        'supports' => array(
            'customClassName' => true,
            'anchor' => false,
            'align' => array(
                0 => 'wide',
                1 => 'full',
            ),
            'html' => false,
            'multiple' => true,
            'inserter' => true,
        ),
        'ghostkit' => array(
            'supports' => array(
                'spacings' => false,
                'display' => false,
                'scrollReveal' => false,
                'frame' => false,
                'customCSS' => false,
            ),
        ),
        'controls' => array(
            'control_eb98ac4a01' => array(
                'type' => 'classic_editor',
                'name' => 'content',
                'default' => '',
                'label' => 'Content',
                'help' => '',
                'child_of' => '',
                'placement' => 'content',
                'width' => '100',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'placeholder' => '',
                'characters_limit' => '',
            ),
            'control_d3cb1f4223' => array(
                'type' => 'radio',
                'name' => 'hAlign',
                'default' => 'center',
                'label' => 'Horizontal Alignment',
                'help' => '',
                'child_of' => '',
                'placement' => 'inspector',
                'width' => '100',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'true',
                'choices' => array(
                    array(
                        'label' => 'Left',
                        'value' => 'left',
                    ),
                    array(
                        'label' => 'Centre',
                        'value' => 'center',
                    ),
                ),
                'allow_null' => 'false',
                'multiple' => 'false',
                'output_format' => '',
                'placeholder' => '',
                'characters_limit' => '',
            ),
        ),
        'code' => array(
            'output_method' => 'template',
            'editor_html' => '',
            'editor_callback' => '',
            'editor_css' => '',
            'frontend_html' => '',
            'frontend_callback' => '',
            'frontend_css' => '',
            'show_preview' => 'never',
            'single_output' => false,
        ),
        'condition' => array(
        ),
    ) );

endif;