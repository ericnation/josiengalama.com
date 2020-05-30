<?php

/**
 * @author: VLThemes
 * @version: 1.0
 */

# General Fonts

$priority = 0;

$primary_font_variant = array(
	'variant' => array( 'regular', 'italic', '600', '700' )
);

Kirki::add_field( 'vinero_customize', array(
	'type' => 'typography',
	'settings' => 'primary_font',
	'section' => 'typography_fonts',
	'label' => esc_html__( 'Primary Font', 'vinero' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'choices' => vinero_add_custom_choice( $primary_font_variant ),
	'default' => array(
		'font-family' => 'Open Sans'
	),
	'output' => array(
		array(
			'element' => '
				.vlt-first-font
			'
		),
		array(
			'choice' => 'font-family',
			'element' => ':root',
			'property' => '--pf',
			'context' => array( 'editor', 'front' ),
		)
	)
) );

# Text

$priority = 0;

Kirki::add_field( 'vinero_customize', array(
	'type' => 'typography',
	'settings' => 'text_typography',
	'section' => 'typography_text',
	'label' => esc_html__( 'Text Typography', 'vinero' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'choices' => vinero_add_custom_choice(),
	'default' => array(
		'font-family' => 'Open Sans',
		'variant' => 'regular',
		'font-size' => '17px',
		'line-height' => '1.8',
		'letter-spacing' => '0',
		'color' => '#5b5b5b',
		'text-transform' => 'none',
	),
	'output' => array(
		array(
			'element' => 'body'
		),
		array(
			'element' => '.edit-post-visual-editor.editor-styles-wrapper',
			'context' => array( 'editor' ),
		),
	)
) );

# Heading

$priority = 0;

Kirki::add_field( 'vinero_customize', array(
	'type' => 'typography',
	'settings' => 'h1_typography',
	'section' => 'typography_headings',
	'label' => esc_html__( 'H1 Typography', 'vinero' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'choices' => vinero_add_custom_choice(),
	'default' => array(
		'font-family' => 'Open Sans',
		'variant' => 'regular',
		'font-size' => '38px',
		'line-height' => '1.5',
		'letter-spacing' => '1px',
		'color' => '#333333',
		'text-transform' => 'none'
	),
	'output' => array(
		array(
			'element' => 'h1, .h1'
		),
		array(
			'element' => '.editor-block-list__block h1, .wp-block-heading h1.editor-rich-text__tinymce, .editor-post-title__block .editor-post-title__input',
			'context' => array( 'editor' ),
		),
	)
) );

Kirki::add_field( 'vinero_customize', array(
	'type' => 'typography',
	'settings' => 'h2_typography',
	'section' => 'typography_headings',
	'label' => esc_html__( 'H2 Typography', 'vinero' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'choices' => vinero_add_custom_choice(),
	'default' => array(
		'font-family' => 'Open Sans',
		'variant' => 'regular',
		'font-size' => '36px',
		'line-height' => '1.5',
		'letter-spacing' => '1px',
		'color' => '#333333',
		'text-transform' => 'none'
	),
	'output' => array(
		array(
			'element' => 'h2, .h2'
		),
		array(
			'element' => '.editor-block-list__block h2, .wp-block-heading h2.editor-rich-text__tinymce',
			'context' => array( 'editor' ),
		),
	)
) );

Kirki::add_field( 'vinero_customize', array(
	'type' => 'typography',
	'settings' => 'h3_typography',
	'section' => 'typography_headings',
	'label' => esc_html__( 'H3 Typography', 'vinero' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'choices' => vinero_add_custom_choice(),
	'default' => array(
		'font-family' => 'Open Sans',
		'variant' => 'regular',
		'font-size' => '28px',
		'line-height' => '1.5',
		'letter-spacing' => '1px',
		'color' => '#333333',
		'text-transform' => 'none'
	),
	'output' => array(
		array(
			'element' => 'h3, .h3'
		),
		array(
			'element' => '.editor-block-list__block h3, .wp-block-heading h3.editor-rich-text__tinymce',
			'context' => array( 'editor' ),
		),
	)
) );

Kirki::add_field( 'vinero_customize', array(
	'type' => 'typography',
	'settings' => 'h4_typography',
	'section' => 'typography_headings',
	'label' => esc_html__( 'H4 Typography', 'vinero' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'choices' => vinero_add_custom_choice(),
	'default' => array(
		'font-family' => 'Open Sans',
		'variant' => 'regular',
		'font-size' => '24px',
		'line-height' => '1.5',
		'letter-spacing' => '1px',
		'color' => '#333333',
		'text-transform' => 'none'
	),
	'output' => array(
		array(
			'element' => 'h4, .h4'
		),
		array(
			'element' => '.editor-block-list__block h4, .wp-block-heading h4.editor-rich-text__tinymce',
			'context' => array( 'editor' ),
		),
	)
) );

Kirki::add_field( 'vinero_customize', array(
	'type' => 'typography',
	'settings' => 'h5_typography',
	'section' => 'typography_headings',
	'label' => esc_html__( 'H5 Typography', 'vinero' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'choices' => vinero_add_custom_choice(),
	'default' => array(
		'font-family' => 'Open Sans',
		'variant' => 'regular',
		'font-size' => '18px',
		'line-height' => '1.5',
		'letter-spacing' => '1px',
		'color' => '#333333',
		'text-transform' => 'none'
	),
	'output' => array(
		array(
			'element' => 'h5, .h5'
		),
		array(
			'element' => '.editor-block-list__block h5, .wp-block-heading h5.editor-rich-text__tinymce',
			'context' => array( 'editor' ),
		),
	)
) );

Kirki::add_field( 'vinero_customize', array(
	'type' => 'typography',
	'settings' => 'h6_typography',
	'section' => 'typography_headings',
	'label' => esc_html__( 'H6 Typography', 'vinero' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'choices' => vinero_add_custom_choice(),
	'default' => array(
		'font-family' => 'Open Sans',
		'variant' => 'regular',
		'font-size' => '15px',
		'line-height' => '1.5',
		'letter-spacing' => '1px',
		'color' => '#333333',
		'text-transform' => 'uppercase'
	),
	'output' => array(
		array(
			'element' => 'h6, .h6'
		),
		array(
			'element' => '.editor-block-list__block h6, .wp-block-heading h6.editor-rich-text__tinymce',
			'context' => array( 'editor' ),
		),
	)
) );

# Blockquote

$priority = 0;

Kirki::add_field( 'vinero_customize', array(
	'type' => 'typography',
	'settings' => 'blockquote_typography',
	'section' => 'typography_blockquote',
	'label' => esc_html__( 'Blockquote Typography', 'vinero' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'choices' => vinero_add_custom_choice(),
	'default' => array(
		'font-family' => 'Open Sans',
		'variant' => 'italic',
		'font-size' => '26px',
		'line-height' => '1.5',
		'letter-spacing' => '1px',
		'color' => '#333333',
		'text-transform' => 'none',
	),
	'output' => array(
		array(
			'element' => 'blockquote'
		),
		array(
			'element' => '.wp-block-quote, .wp-block-pullquote',
			'context' => array( 'editor' ),
		),
	)
) );

# Buttons

$priority = 0;

Kirki::add_field( 'vinero_customize', array(
	'type' => 'typography',
	'settings' => 'typography_button',
	'section' => 'typography_buttons',
	'label' => esc_html__( 'Button Typography', 'vinero' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'choices' => vinero_add_custom_choice(),
	'default' => array(
		'font-family' => 'Open Sans',
		'variant' => 'regular',
		'font-size' => '11px',
		'line-height' => '1',
		'text-align' => 'center',
		'letter-spacing' => '1px',
		'text-transform' => 'uppercase',
	),
	'output' => array(
		array(
			'element' => '.vlt-btn'
		)
	)
) );

# Input

$priority = 0;

Kirki::add_field( 'vinero_customize', array(
	'type' => 'typography',
	'settings' => 'typography_input',
	'section' => 'typography_input',
	'label' => esc_html__( 'Input Typography', 'vinero' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'choices' => vinero_add_custom_choice(),
	'default' => array(
		'font-family' => 'Open Sans',
		'variant' => 'regular',
		'font-size' => '14px',
		'line-height' => '1.8',
		'letter-spacing' => '0.5px',
		'color' => '#333333',
		'text-transform' => 'none'
	),
	'output' => array(
		array(
			'element' => '
				input[type="text"],
				input[type="email"],
				input[type="password"],
				input[type="tel"],
				input[type="url"],
				input[type="search"],
				input[type="number"],
				textarea,
				select
				'
		)
	)
) );

Kirki::add_field( 'vinero_customize', array(
	'type' => 'typography',
	'settings' => 'typography_label',
	'section' => 'typography_input',
	'label' => esc_html__( 'Label Typography', 'vinero' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'choices' => vinero_add_custom_choice(),
	'default' => array(
		'font-family' => 'Open Sans',
		'variant' => 'regular',
		'font-size' => '12px',
		'line-height' => '1',
		'letter-spacing' => '1px',
		'color' => '#333333',
		'text-transform' => 'uppercase',
	),
	'output' => array(
		array(
			'element' => 'label'
		)
	)
) );

# Widget

$priority = 0;

Kirki::add_field( 'vinero_customize', array(
	'type' => 'typography',
	'settings' => 'typography_widget_title',
	'section' => 'typography_widget',
	'label' => esc_html__( 'Widget Title Typography', 'vinero' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'choices' => vinero_add_custom_choice(),
	'default' => array(
		'font-family' => 'Open Sans',
		'variant' => 'regular',
		'font-size' => '16px',
		'line-height' => '1.5',
		'letter-spacing' => '3px',
		'color' => '#333333',
		'text-transform' => 'uppercase'
	),
	'output' => array(
		array(
			'element' => '.vlt-widget__title'
		)
	)
) );