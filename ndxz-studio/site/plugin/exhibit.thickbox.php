<?php if (!defined('SITE')) exit('No direct script access allowed');

/**
* Thickbox
*
* Exhbition format
* Made possible by Lightbox and Jquery, of course
* 
* @version 1.0
* @author Vaska 
*/

// defaults from the general libary - be sure these are installed
$exhibit['lib_css'] = 'jquery.thickbox.css';
$exhibit['lib_js'] = array('jquery.thickbox.js');
$exhibit['dyn_js'] = "var loadingAnim = '" . BASEURL . "/';";
$exhibit['dyn_css'] = dynamicCSS();
$exhibit['exhibit'] = createExhibit();


function createExhibit()
{
	$OBJ =& get_instance();
	global $rs;
	
	$pages = $OBJ->db->fetchArray("SELECT * 
		FROM ".PX."media, ".PX."objects_prefs 
		WHERE media_ref_id = '$rs[id]' 
		AND obj_ref_type = 'exhibit' 
		AND obj_ref_type = media_obj_type 
		ORDER BY media_order ASC, media_id ASC");
		
	// ** DON'T FORGET THE TEXT ** //
	$s = $rs['content'];
	$s .= "\n<div class='cl'><!-- --></div>\n";

	if (!$pages) return $s;
	
	foreach ($pages as $height)
	{
		$height = getimagesize(DIRNAME . GIMGS . "/th-$height[media_file]");
		
		$find_smallest_height[] = $height[1];
	}
	
	sort($find_smallest_height, SORT_NUMERIC);
	rsort($find_smallest_height);
	$lowest = array_pop($find_smallest_height);
	
	$i = 1; $a = '';
	
	// people will probably want to customize this up
	foreach ($pages as $go)
	{
		$a .= "\n<a href='" . BASEURL . GIMGS . "/$go[media_file]' title='$go[media_title]' class='thickbox' rel='gallery-plants'><img src='" . BASEURL . GIMGS . "/th-$go[media_file]' alt='$go[media_caption]' height='$lowest' /></a>\n";
		
		$i++;
	}
	
	// images
	$s .= "<div id='img-container'>\n";
	$s .= $a;
	$s .= "</div>\n";
		
	return $s;
}


function dynamicCSS()
{
	return "a.thickbox { border: none; }\na.thickbox img { border: 3px solid #fff; margin: 0 6px 9px 0; }";
}



?>