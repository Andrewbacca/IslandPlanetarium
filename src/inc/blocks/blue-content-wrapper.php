<?php
if ( function_exists( 'lazyblocks' ) ) :

    lazyblocks()->add_block( array(
        'id' => 133,
        'title' => 'Blue Content Wrapper',
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M13 12h7v1.5h-7zm0-2.5h7V11h-7zm0 5h7V16h-7zM21 4H3c-1.1 0-2 .9-2 2v13c0 1.1.9 2 2 2h18c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 15h-9V6h9v13z" /></svg>',
        'keywords' => array(
        ),
        'slug' => 'lazyblock/blue-block',
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
            'control_0728154295' => array(
                'type' => 'radio',
                'name' => 'background-position',
                'default' => 'bg-pos-1',
                'label' => 'Background Position',
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
                        'label' => 'Position #1',
                        'value' => 'bg-pos-1',
                    ),
                    array(
                        'label' => 'Position #2',
                        'value' => 'bg-pos-2',
                    ),
                ),
                'allow_null' => 'false',
                'multiple' => 'false',
                'output_format' => '',
                'placeholder' => '',
                'characters_limit' => '',
            ),
            'control_20caa64de1' => array(
                'type' => 'radio',
                'name' => 'show-bottom-curve',
                'default' => 'show',
                'label' => 'Bottom Curve',
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
                        'label' => 'Show',
                        'value' => 'show',
                    ),
                    array(
                        'label' => 'Hide',
                        'value' => 'hide',
                    ),
                ),
                'allow_null' => 'false',
                'multiple' => 'false',
                'output_format' => '',
                'placeholder' => '',
                'characters_limit' => '',
            ),
            'control_520a2745b9' => array(
                'type' => 'inner_blocks',
                'name' => 'blue_wrapper_content',
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