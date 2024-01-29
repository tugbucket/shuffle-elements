<?php
/**
* Plugin Name: Shuffle Elements
* Plugin URI: 
* Description: Shuffles elements on the page either on load, on click or at set intervals.
* Version: 1.0
* Author: Alan Jackson
* Author URI: https://tugbucket.net
* License: GPL3
**/

function shuffleelements_tug2s8w_scripts(){
	wp_register_script('shuffleelements_tug2s8w_js', plugins_url('/shuffleelements.js',__FILE__ ), array('jquery'), '', true);
	wp_enqueue_script('shuffleelements_tug2s8w_js');
}
add_action('wp_enqueue_scripts', 'shuffleelements_tug2s8w_scripts');

function shuffleelements_tug2s8w($atts, $content = null){
    $sea = shortcode_atts( array(
        'parent' => '',
        'children'  =>  '',
		'delay' => '',
		'fade_speed' => '500',
		'on_load' => 'yes',
        'button_text' =>  '',
		'aria_label' => '',
    ), $atts );
	
	$se_parent = $sea['parent'];
	$se_children = $sea['children'];
	$se_delay = $sea['delay'];
	$se_on_load = $sea['on_load'];
	$se_fade_speed = $sea['fade_speed'];
	$se_button_text = $sea['button_text'];
	$se_aria_label = $sea['aria_label'];
	if($se_aria_label && $se_aria_label != ""){
		$se_aria_label = 'aria-label="'.$se_aria_label.'"';
	}
	if(!is_numeric($se_delay)){
		$se_delay = '';
	}
	if(!is_numeric($se_fade_speed)){
		$se_fade_speed = '500';
	}
	$se_tug93iw = '';
	$se_tug93iw .= '<div class="se_2s8w" data-separent="'.$se_parent.'" data-sechildren="'.$se_children.'" data-sedelay="'.$se_delay.'" data-seonload="'.$se_on_load.'" data-sefadespeed="'.$se_fade_speed.'"></div>';
	if($sea['button_text'] && $sea['button_text'] != ""){
		$se_tug93iw .= '<button class="se_2s8w_button" '.$se_aria_label.'>'.$se_button_text.'</button>';	
	}
	return $se_tug93iw;
	
}
add_shortcode('shuffleelements', 'shuffleelements_tug2s8w');
?>