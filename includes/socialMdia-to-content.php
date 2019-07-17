<?php

function ft_s_m_add($content) {
	global $socialmedia_options;

	$ft_output =  '<hr>';
	$ft_output .= '<div class="ft_s_m">';
	if($socialmedia_options['facebook'] === ''){
		$ft_output .='';
	}else{
		$ft_output .= '<a style="color : '.$socialmedia_options['color_link'].'" target="_balnk" href="'.$socialmedia_options['facebook'].'"><i class="sa sa-facebook-logo"></i></a>';
	}
	if($socialmedia_options['linkedin'] === ''){
		$ft_output .='';
	}else{
		$ft_output .= '<a style="color : '.$socialmedia_options['color_link'].'" target="_balnk" href="'.$socialmedia_options['linkedin'].'"><i class="sa sa-linkedin-logo"></i></a>';
	}
	if($socialmedia_options['twitter'] === ''){
		$ft_output .='';
	}else{
		$ft_output .= '<a style="color : '.$socialmedia_options['color_link'].'" target="_balnk" href="'.$socialmedia_options['twitter'].'"><i class="sa sa-twitter-logo-silhouette"></i></a>';
	}
	if($socialmedia_options['behance'] === ''){
		$ft_output .='';
	}else{
		$ft_output .= '<a style="color : '.$socialmedia_options['color_link'].'" target="_balnk" href="'.$socialmedia_options['behance'].'"><i class="sa sa-behance-logo"></i></a>';
	}
	if($socialmedia_options['dribble'] === ''){
		$ft_output .='';
	}else{
		$ft_output .= '<a style="color : '.$socialmedia_options['color_link'].'" target="_balnk" href="'.$socialmedia_options['dribble'].'"><i class="sa sa-dribble-logo"></i></a>';
	}
	if($socialmedia_options['instagram'] === ''){
		$ft_output .='';
	}else{
		$ft_output .= '<a style="color : '.$socialmedia_options['color_link'].'" target="_balnk" href="'.$socialmedia_options['instagram'].'"><i class="sa sa-instagram"></i></a>';
	}
	if($socialmedia_options['youtube'] === ''){
		$ft_output .='';
	}else{
		$ft_output .= '<a style="color : '.$socialmedia_options['color_link'].'" target="_balnk" href="'.$socialmedia_options['youtube'].'"><i class="sa sa-youtube"></i></a>';
	}
	if($socialmedia_options['skype'] === ''){
		$ft_output .='';
	}else{
		$ft_output .= '<a style="color : '.$socialmedia_options['color_link'].'" target="_balnk" href="'.$socialmedia_options['skype'].'"><i class="sa sa-skype"></i></a>';
	}
	if($socialmedia_options['reddit'] === ''){
		$ft_output .='';
	}else{
		$ft_output .= '<a style="color : '.$socialmedia_options['color_link'].'" target="_balnk" href="'.$socialmedia_options['reddit'].'"><i class="sa sa-reddit"></i></a>';
	}
	if($socialmedia_options['wikipedia'] === ''){
		$ft_output .='';
	}else{
		$ft_output .= '<a style="color : '.$socialmedia_options['color_link'].'" target="_balnk" href="'.$socialmedia_options['wikipedia'].'"><i class="sa sa-wikipedia"></i></a>';
	}
	if($socialmedia_options['pinterest'] === ''){
		$ft_output .='';
	}else{
		$ft_output .= '<a style="color : '.$socialmedia_options['color_link'].'" target="_balnk" href="'.$socialmedia_options['pinterest'].'"><i class="sa sa-pinterest"></i></a>';
	}															
	$ft_output .= '</div>';
	$ft_output .=  '<hr>';

	if( $socialmedia_options['show_feed'] ){
		if((is_single()) || (is_home()) && $socialmedia_options['enable']){
			return $content . $ft_output;
		}
	}else{
		if((is_single()) && $socialmedia_options['enable']){
			return $content . $ft_output;
		}
	}

	return $content;


}
add_filter( 'the_content', 'ft_s_m_add' );