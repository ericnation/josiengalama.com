<?php

/***********************************************************
Blog layout
***********************************************************/


$priority = 0;


Kirki::add_field('vinero_customize', array(
    'type' => 'select',
    'settings' => 'blog_layout',
    'label' => esc_html__('Blog Layout', 'vinero'),
    'section' => 'section_blog_layout',
    'default' => 'classic-sidebar',
    'priority' => $priority++,
    'choices' => array(
        'masonry-two' => esc_html__('Masonry 2 Columns', 'vinero'),
        'masonry-three' => esc_html__('Masonry 3 Columns', 'vinero'),
        'classic' => esc_html__('Classic without Sidebar', 'vinero'),
        'classic-sidebar' => esc_html__('Classic with Sidebar', 'vinero'),
   )
));

Kirki::add_field('vinero_customize', array(
    'type' => 'select',
    'settings' => 'blog_type_pagination',
    'label' => esc_html__('Type Pagination', 'vinero'),
    'section' => 'section_blog_layout',
    'default' => 'buttons',
    'priority' => $priority++,
    'choices' => array(
        'buttons' => esc_html__('Prev/Next buttons', 'vinero'),
        'pagination' => esc_html__('Pagination', 'vinero'),
        'ajax' => esc_html__('Load More button', 'vinero'),
   )
));



/***********************************************************
Blog Title
***********************************************************/


$priority = 0;


Kirki::add_field('vinero_customize', array(
    'type' => 'select',
    'settings' => 'blog_title_layout',
    'label' => esc_html__('Blog Title Layout', 'vinero'),
    'section' => 'section_blog_title',
    'default' => 'hero',
    'priority' => $priority++,
    'choices' => array(
        'none' => esc_html__('None', 'vinero'),
        'hero' => esc_html__('Hero', 'vinero'),
        'minimal' => esc_html__('Minimal', 'vinero')
   )
));

Kirki::add_field('vinero_customize', array(
    'type' => 'image',
    'settings' => 'blog_title_minimal_image',
    'label' => esc_html__('Title Minimal Background', 'vinero'),
    'section' => 'section_blog_title',
    'default' => '',
    'priority' => $priority++,
));

Kirki::add_field('vinero_customize', array(
    'type' => 'image',
    'settings' => 'blog_title_hero_image',
    'label' => esc_html__('Title Hero Background', 'vinero'),
    'section' => 'section_blog_title',
    'default' => '',
    'priority' => $priority++,
));

Kirki::add_field('vinero_customize', array(
    'type'     => 'text',
    'settings' => 'blog_title',
    'label'    => esc_html__('Blog Title', 'vinero'),
    'section'  => 'section_blog_title',
    'default'  => esc_html__('Our Journal', 'vinero'),
    'priority' => $priority++,
));

Kirki::add_field('vinero_customize', array(
    'type'     => 'textarea',
    'settings' => 'blog_subtitle',
    'label'    => esc_html__('Blog Subtitle', 'vinero'),
    'section'  => 'section_blog_title',
    'default'  => esc_html__('The latest news.', 'vinero'),
    'priority' => $priority++,
));

/***********************************************************
Single Post
***********************************************************/

$priority = 0;

Kirki::add_field('vinero_customize', array(
    'type' => 'toggle',
    'settings' => 'singlepost_is_show_author',
    'label' => esc_html__('Show/Hide about author', 'vinero'),
    'section' => 'section_blog_singlepost',
    'default' => '1',
    'priority' => $priority++
));

Kirki::add_field('vinero_customize', array(
    'type' => 'toggle',
    'settings' => 'singlepost_is_show_share',
    'label' => esc_html__('Show/Hide share post', 'vinero'),
    'section' => 'section_blog_singlepost',
    'default' => '1',
    'priority' => $priority++
));

Kirki::add_field('vinero_customize', array(
    'type' => 'toggle',
    'settings' => 'singlepost_is_show_tags',
    'label' => esc_html__('Show/Hide tags', 'vinero'),
    'section' => 'section_blog_singlepost',
    'default' => '1',
    'priority' => $priority++
));

Kirki::add_field('vinero_customize', array(
    'type' => 'toggle',
    'settings' => 'singlepost_is_show_navigation',
    'label' => esc_html__('Show/Hide post navigation', 'vinero'),
    'section' => 'section_blog_singlepost',
    'default' => '1',
    'priority' => $priority++
));


