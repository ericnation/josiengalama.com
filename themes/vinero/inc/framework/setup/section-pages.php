<?php

/**
 * @author: VLThemes
 * @version: 1.0
 */

# Page General

$priority = 0;

Kirki::add_field( 'vinero_customize', array(
	'type' => 'switch',
	'settings' => 'sticky_sidebar_effect',
	'section' => 'section_blog_general',
	'label' => esc_html__( 'Sticky Sidebar Effect', 'vinero' ),
	'description' => esc_html__( 'Switch "On" if you want to enable sticky sidebar.', 'vinero' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'choices' => array(
		'on' => esc_html__( 'On', 'vinero' ),
		'off' => esc_html__( 'Off', 'vinero' )
	),
	'default' => 0,
) );

Kirki::add_field( 'vinero_customize', array(
	'type' => 'switch',
	'settings' => 'appearance_effect',
	'section' => 'section_blog_general',
	'label' => esc_html__( 'Appearance Effect', 'vinero' ),
	'description' => esc_html__( 'Switch "On" if you want to enable appearance effect.', 'vinero' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'choices' => array(
		'on' => esc_html__( 'On', 'vinero' ),
		'off' => esc_html__( 'Off', 'vinero' )
	),
	'default' => 0,
) );

# Page

Kirki::add_field( 'vinero_customize', array(
	'type' => 'select',
	'settings' => 'page_title_layout',
	'section' => 'section_page',
	'label' => esc_html__( 'Page Title Layout', 'vinero' ),
	'description' => esc_html__( 'Title layout for simple page.', 'vinero' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'choices' => array(
		'none' => esc_html__( 'None', 'vinero' ),
		'hero' => esc_html__( 'Hero', 'vinero' ),
		'minimal' => esc_html__( 'Minimal', 'vinero' )
	),
	'default' => 'hero',
) );

# Blog

Kirki::add_field( 'vinero_customize', array(
	'type' => 'custom',
	'settings' => 'sb_1',
	'section' => 'section_blog',
	'default' => '<div class="kirki-separator">'.esc_html__( 'General Settings', 'vinero' ).'</div>',
	'priority' => $priority++,
) );

Kirki::add_field( 'vinero_customize', array(
	'type' => 'select',
	'settings' => 'blog_layout',
	'section' => 'section_blog',
	'label' => esc_html__( 'Blog Layout', 'vinero' ),
	'description' => esc_html__( 'Select a blog layout from the list below.', 'vinero' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'choices' => array(
		'default' => esc_html__( 'Default', 'vinero' ),
		'masonry' => esc_html__( 'Masonry', 'vinero' ),
	),
	'default' => 'default'
) );

Kirki::add_field( 'vinero_customize', array(
	'type' => 'select',
	'settings' => 'blog_type_pagination',
	'section' => 'section_blog',
	'label' => esc_html__( 'Type Pagination', 'vinero' ),
	'description' => esc_html__( 'Select the type of navigation below.', 'vinero' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'choices' => array(
		'none' => esc_html__( 'None', 'vinero' ),
		'paged' => esc_html__( 'Paged', 'vinero' ),
		'numeric' => esc_html__( 'Numeric', 'vinero' ),
		'load-more' => esc_html__( 'Load More', 'vinero' ),
	),
	'default' => 'numeric'
) );

Kirki::add_field( 'vinero_customize', array(
	'type' => 'custom',
	'settings' => 'sb_2',
	'section' => 'section_blog',
	'default' => '<div class="kirki-separator">'.esc_html__( 'Blog Title', 'vinero' ).'</div>',
	'priority' => $priority++,
) );

Kirki::add_field( 'vinero_customize', array(
	'type' => 'select',
	'settings' => 'blog_title_layout',
	'section' => 'section_blog',
	'label' => esc_html__( 'Blog Title Layout', 'vinero' ),
	'description' => esc_html__( 'Title layout for blog page.', 'vinero' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'choices' => array(
		'none' => esc_html__( 'None', 'vinero' ),
		'hero' => esc_html__( 'Hero', 'vinero' ),
		'minimal' => esc_html__( 'Minimal', 'vinero' )
	),
	'default' => 'hero',
) );

Kirki::add_field( 'vinero_customize', array(
	'type' => 'text',
	'settings' => 'blog_title',
	'section' => 'section_blog',
	'label' => esc_html__( 'Title', 'vinero' ),
	'description' => esc_html__( 'Title for blog page.', 'vinero' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'default' => ''
) );

Kirki::add_field( 'vinero_customize', array(
	'type' => 'textarea',
	'settings' => 'blog_subtitle',
	'section' => 'section_blog',
	'label' => esc_html__( 'Subtitle', 'vinero' ),
	'description' => esc_html__( 'Subtitle for blog page.', 'vinero' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'default' => ''
) );

Kirki::add_field( 'vinero_customize', array(
	'type' => 'image',
	'settings' => 'blog_bg',
	'section' => 'section_blog',
	'label' => esc_html__( 'Background Image', 'vinero' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'default' => ''
) );

# Archive

Kirki::add_field( 'vinero_customize', array(
	'type' => 'custom',
	'settings' => 'sa_1',
	'section' => 'section_archive',
	'default' => '<div class="kirki-separator">'.esc_html__( 'General Settings', 'vinero' ).'</div>',
	'priority' => $priority++,
) );

Kirki::add_field( 'vinero_customize', array(
	'type' => 'select',
	'settings' => 'archive_layout',
	'section' => 'section_archive',
	'label' => esc_html__( 'Archive Layout', 'vinero'),
	'description' => esc_html__( 'Select a blog layout from the list below.', 'vinero' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'choices' => array(
		'default' => esc_html__( 'Default', 'vinero' ),
		'masonry' => esc_html__( 'Masonry', 'vinero' ),
	),
	'default' => 'default'
) );

Kirki::add_field( 'vinero_customize', array(
	'type' => 'select',
	'settings' => 'archive_type_pagination',
	'section' => 'section_archive',
	'label' => esc_html__( 'Type Pagination', 'vinero' ),
	'description' => esc_html__( 'Select the type of navigation below.', 'vinero' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'choices' => array(
		'none' => esc_html__( 'None', 'vinero' ),
		'paged' => esc_html__( 'Paged', 'vinero' ),
		'numeric' => esc_html__( 'Numeric', 'vinero' ),
		'load-more' => esc_html__( 'Load More', 'vinero' ),
	),
	'default' => 'numeric'
) );

Kirki::add_field( 'vinero_customize', array(
	'type' => 'custom',
	'settings' => 'sa_2',
	'section' => 'section_archive',
	'default' => '<div class="kirki-separator">'.esc_html__( 'Archive Title', 'vinero' ).'</div>',
	'priority' => $priority++,
) );

Kirki::add_field( 'vinero_customize', array(
	'type' => 'select',
	'settings' => 'archive_title_layout',
	'section' => 'section_archive',
	'label' => esc_html__( 'Archive Title Layout', 'vinero' ),
	'description' => esc_html__( 'Title layout for archive page.', 'vinero' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'choices' => array(
		'none' => esc_html__( 'None', 'vinero' ),
		'hero' => esc_html__( 'Hero', 'vinero' ),
		'minimal' => esc_html__( 'Minimal', 'vinero' )
	),
	'default' => 'hero',
) );

Kirki::add_field( 'vinero_customize', array(
	'type' => 'image',
	'settings' => 'archive_bg',
	'section' => 'section_archive',
	'label' => esc_html__( 'Background Image', 'vinero' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'default' => ''
) );

# Search

Kirki::add_field( 'vinero_customize', array(
	'type' => 'custom',
	'settings' => 'ss_1',
	'section' => 'section_search',
	'default' => '<div class="kirki-separator">'.esc_html__( 'General Settings', 'vinero' ).'</div>',
	'priority' => $priority++,
) );

Kirki::add_field( 'vinero_customize', array(
	'type' => 'select',
	'settings' => 'search_layout',
	'section' => 'section_search',
	'label' => esc_html__( 'Search Layout', 'vinero' ),
	'description' => esc_html__( 'Select a blog layout from the list below.', 'vinero' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'choices' => array(
		'default' => esc_html__( 'Default', 'vinero' ),
		'masonry' => esc_html__( 'Masonry', 'vinero' ),
	),
	'default' => 'default'
) );

Kirki::add_field( 'vinero_customize', array(
	'type' => 'select',
	'settings' => 'search_type_pagination',
	'section' => 'section_search',
	'label' => esc_html__( 'Type Pagination', 'vinero' ),
	'description' => esc_html__( 'Select the type of navigation below.', 'vinero' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'choices' => array(
		'none' => esc_html__( 'None', 'vinero' ),
		'paged' => esc_html__( 'Paged', 'vinero' ),
		'numeric' => esc_html__( 'Numeric', 'vinero' ),
		'load-more' => esc_html__( 'Load More', 'vinero' ),
	),
	'default' => 'numeric'
) );

Kirki::add_field( 'vinero_customize', array(
	'type' => 'custom',
	'settings' => 'ss_2',
	'section' => 'section_search',
	'default' => '<div class="kirki-separator">'.esc_html__( 'Search Title', 'vinero' ).'</div>',
	'priority' => $priority++,
) );

Kirki::add_field( 'vinero_customize', array(
	'type' => 'select',
	'settings' => 'search_title_layout',
	'section' => 'section_search',
	'label' => esc_html__( 'Blog Title Layout', 'vinero' ),
	'description' => esc_html__( 'Title layout for blog page.', 'vinero' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'choices' => array(
		'none' => esc_html__( 'None', 'vinero' ),
		'hero' => esc_html__( 'Hero', 'vinero' ),
		'minimal' => esc_html__( 'Minimal', 'vinero' )
	),
	'default' => 'hero',
) );

Kirki::add_field( 'vinero_customize', array(
	'type' => 'image',
	'settings' => 'search_bg',
	'section' => 'section_search',
	'label' => esc_html__( 'Background Image', 'vinero' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'default' => ''
) );

# Single Post

Kirki::add_field( 'vinero_customize', array(
	'type' => 'switch',
	'settings' => 'post_page_title',
	'section' => 'section_single_post',
	'label' => esc_html__( 'Page Title', 'vinero' ),
	'description' => esc_html__( 'Switch "Show" if you want to show "Page Title".', 'vinero' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'choices' => array(
		'on' => esc_html__( 'Show', 'vinero' ),
		'off' => esc_html__( 'Hide', 'vinero' )
	),
	'default' => 1
) );

Kirki::add_field( 'vinero_customize', array(
	'type' => 'switch',
	'settings' => 'post_about_author',
	'section' => 'section_single_post',
	'label' => esc_html__( 'About Author', 'vinero' ),
	'description' => esc_html__( 'Switch "Show" if you want to show "About Author" section.', 'vinero' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'choices' => array(
		'on' => esc_html__( 'Show', 'vinero' ),
		'off' => esc_html__( 'Hide', 'vinero' )
	),
	'default' => 1
) );

Kirki::add_field( 'vinero_customize', array(
	'type' => 'switch',
	'settings' => 'post_social_share',
	'section' => 'section_single_post',
	'label' => esc_html__( 'Post Share', 'vinero' ),
	'description' => esc_html__( 'Switch "Show" if you want to show "Post Share".', 'vinero' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'choices' => array(
		'on' => esc_html__( 'Show', 'vinero' ),
		'off' => esc_html__( 'Hide', 'vinero' )
	),
	'default' => 1
) );

Kirki::add_field( 'vinero_customize', array(
	'type' => 'switch',
	'settings' => 'post_tags',
	'section' => 'section_single_post',
	'label' => esc_html__( 'Post Tags', 'vinero' ),
	'description' => esc_html__( 'Switch "Show" if you want to show "Post Tags".', 'vinero' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'choices' => array(
		'on' => esc_html__( 'Show', 'vinero' ),
		'off' => esc_html__( 'Hide', 'vinero' )
	),
	'default' => 1
) );

Kirki::add_field( 'vinero_customize', array(
	'type' => 'switch',
	'settings' => 'post_navigation',
	'section' => 'section_single_post',
	'label' => esc_html__( 'Post Navigation', 'vinero' ),
	'description' => esc_html__( 'Switch "Show" if you want to show "Post Navigation" section.', 'vinero' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'choices' => array(
		'on' => esc_html__( 'Show', 'vinero' ),
		'off' => esc_html__( 'Hide', 'vinero' )
	),
	'default' => 1
) );

Kirki::add_field( 'vinero_customize', array(
	'type' => 'switch',
	'settings' => 'also_like_posts',
	'section' => 'section_single_post',
	'label' => esc_html__( 'Also Like Posts', 'vinero' ),
	'description' => esc_html__( 'Switch "Show" if you want to show "Also Like Posts" section.', 'vinero' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'choices' => array(
		'on' => esc_html__( 'Show', 'vinero' ),
		'off' => esc_html__( 'Hide', 'vinero' )
	),
	'default' => 0
) );

Kirki::add_field( 'vinero_customize', array(
	'type' => 'text',
	'settings' => 'after_post_shortcode',
	'section' => 'section_single_post',
	'label' => esc_html__( 'Shortcode After Post', 'vinero' ),
	'description' => esc_html__( 'Enter Shortcode which will be visible after single post.', 'vinero' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'default' => '',
) );

# Error 404

Kirki::add_field( 'vinero_customize', array(
	'type' => 'select',
	'settings' => 'error_title_layout',
	'section' => 'section_error_404',
	'label' => esc_html__( 'Error Title Layout', 'vinero' ),
	'description' => esc_html__( 'Title layout for error page.', 'vinero' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'choices' => array(
		'none' => esc_html__( 'None', 'vinero' ),
		'hero' => esc_html__( 'Hero', 'vinero' ),
		'minimal' => esc_html__( 'Minimal', 'vinero' )
	),
	'default' => 'hero',
) );

Kirki::add_field( 'vinero_customize', array(
	'type' => 'text',
	'settings' => 'error_title',
	'section' => 'section_error_404',
	'label' => esc_html__( 'Title', 'vinero' ),
	'description' => esc_html__( 'Enter a title for Error 404.', 'vinero' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'default' => '',
) );

Kirki::add_field( 'vinero_customize', array(
	'type' => 'textarea',
	'settings' => 'error_subtitle',
	'section' => 'section_error_404',
	'label' => esc_html__( 'Subtitle', 'vinero' ),
	'description' => esc_html__( 'Enter a subtitle for Error 404.', 'vinero' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'default' => '',
) );

Kirki::add_field( 'vinero_customize', array(
	'type' => 'image',
	'settings' => 'error_bg',
	'section' => 'section_error_404',
	'label' => esc_html__( 'Background Image', 'vinero' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'default' => '',
) );