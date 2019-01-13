<?php

function biarlah_script_enqueue()
{
	wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/biarlah.css', array(), '1.0.0', 'all');
	wp_enqueue_script('customjs', get_template_directory_uri() . '/js/biarlah.js', array(), '1.0.0', true);# true -> letak js di bawah
}

add_action('wp_enqueue_scripts','biarlah_script_enqueue');
/*
function biarlah_theme_setup()
{
	add_theme_suport('menus');

	register_nav_menu('primary','Primary Header Navigarion');
	register_nav_menu('secondary','Footer Navigation');
}

add_action('init','biarlah_theme_setup');
//*/