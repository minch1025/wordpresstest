<?php

function gourmetTNC_setup(){
    add_theme_support('post-thumbnails');
    add_theme_support('post-formats',array('aside','link','status','video','image'));
}
add_action('after_setup_theme','gourmetTNC_setup');


function getHelloWorld(){
    return '<h1>Hello World</h1>';
}

function gm_register_post_type(){
    register_post_type('gourmet',[
        'public'=> true,
        'menu_icon'   => 'dashicons-beer',
        'menu_position' => 3,
        'labels' => [ 
            'name' => '맛집',
            'singular_name' => '맛집',
            'menu_name' =>'맛집',
            'name_admin_bar' =>'맛집',
            'add_new' => '새로운 맛집 추가',
            'add_new_item' =>'새로운 맛집을 추가합니다.',
            'new_item' => '새로운 맛집',
            'edit_item' => '맛집 수정',
            'view_item' => '맛집 보기',
            'all_items' => '맛집 리스트',
            'search_items' =>'맛집 검색',
            'not_found' =>'현재 입력한 맛집 정보가 없습니다.',
            'not_found_in_trash'=>'휴지통에 맛집 정보가 없습니다.'
        ] , ]);
}

add_action('init','gm_register_post_type');


function gourmetTNC_scripts(){
    //CSS
    wp_enqueue_style('bootstrap-styles','//stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');
    wp_enqueue_style('fontawesome-styles','//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('style-css',get_stylesheet_uri());
    
   
    //JS
    wp_enqueue_script('jQuery-js','//code.jquery.com/jquery-3.5.1.slim.min.js',array(),'3.5.1',true);
    wp_enqueue_script('popper-js','//cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js',array(),'1.16.1',true);
    wp_enqueue_script('bootstrap-js','//stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js',array(),'4.5.2',true);
}

add_action( 'wp_enqueue_scripts', 'gourmetTNC_scripts');