<?php if (!defined('SITE')) exit('No direct script access allowed');


load_plugins(DIRNAME . BASENAME . '/site/plugin/', 'plugin');


// this file will grab all the plugin.$something.php and load it up
function load_plugins($path, $default)
{
	// let's get the folders and info...
	$modules = array();

	if (is_dir($path))
	{
		if ($fp = opendir($path)) 
		{
			while (($module = readdir($fp)) !== false) 
			{
				if (strpos($module, 'plugin', 0) === 0)
				{      
					$modules[] = $module;
				}
			} 
		}
		closedir($fp);
	}
 	
	foreach ($modules as $load)
	{
		include_once $path . $load;
	}
	
	return;
}


function front_index()
{
	$OBJ =& get_instance();
	return $OBJ->front->front_index();
}

function front_exhibit()
{
	$OBJ =& get_instance();
	return $OBJ->front->front_exhibit();
}

function front_background()
{
	$OBJ =& get_instance();
	return $OBJ->front->front_background();
}

function front_lib_css()
{
	$OBJ =& get_instance();
	return $OBJ->front->front_lib_css();
}

function front_lib_js()
{
	$OBJ =& get_instance();
	return $OBJ->front->front_lib_js();
}

function front_dyn_css()
{
	$OBJ =& get_instance();
	return $OBJ->front->front_dyn_css();
}

function front_dyn_js()
{
	$OBJ =& get_instance();
	return $OBJ->front->front_dyn_js();
}


function getNavigation()
{
	global $rs;
	
	return ($rs['obj_org'] == 1) ? chronological() : sectional();
}


// chronological navigation type
function chronological()
{
	$OBJ =& get_instance();
	global $rs, $default;

	$pages = $OBJ->db->fetchArray("SELECT id, title, url, 
		section, sec_desc, sec_disp, year, secid, sec_proj     
		FROM ".PX."objects, ".PX."sections 
		WHERE status = '1' 
		AND hidden != '1' 
		AND section_id = secid  
		ORDER BY sec_ord ASC, year DESC, ord ASC");
		
	if (!$pages) return 'Error with pages query';
	
	foreach($pages as $reord)
	{
		// two is our projects
		if ($reord['sec_proj'] != 1)
		{
			$order[$reord['sec_desc']][] = array(
				'id' => $reord['id'],
				'title' => $reord['title'],
				'url' => $reord['url'],
				'year' => $reord['year'],
				'secid' => $reord['secid'],
				'disp' => $reord['sec_disp']);
		}
		else
		{
			$order[$reord['year']][] = array(
				'id' => $reord['id'],
				'title' => $reord['title'],
				'url' => $reord['url'],
				'year' => $reord['year'],
				'secid' => $reord['secid'],
				'disp' => $reord['sec_disp']);
		}
	}
	
	$s = '';
	
	foreach($order as $key => $out)
	{
		$s .= "<ul>\n";
		
		if ($out[0]['disp'] == 1) $s .= "<li class='section-title'>" . $key . "</li>\n";
		
		foreach($out as $page)
		{
			$active = ($rs['id'] == $page['id']) ? " class='active'" : '';
				
			$s .= "<li$active><a href='" . BASEURL . ndxz_rewriter($page['url']) . "' onclick=\"do_click();\">" . $page['title'] . "</a></li>\n";
		}
		
		$s .= "</ul>\n\n";
	}

	return $s;
}


// sections navigation
function sectional()
{
	$OBJ =& get_instance();
	global $rs;

	$pages = $OBJ->db->fetchArray("SELECT id, title, url, 
		section, sec_desc, sec_disp, year, secid    
		FROM ".PX."objects, ".PX."sections 
		WHERE status = '1' 
		AND hidden != '1' 
		AND section_id = secid  
		ORDER BY sec_ord ASC, ord ASC");
		
	if (!$pages) return 'Error with pages query';
	
	foreach($pages as $reord)
	{
		$order[$reord['sec_desc']][] = array(
			'id' => $reord['id'],
			'title' => $reord['title'],
			'url' => $reord['url'],
			'year' => $reord['year'],
			'secid' => $reord['secid'],
			'disp' => $reord['sec_disp']);
	}
	
	$s = '';
	
	foreach($order as $key => $out)
	{
		$s .= "<ul>\n";
		
		if ($out[0]['disp'] == 1) $s .= "<li class='section-title'>" . $key . "</li>\n";
		
		foreach($out as $page)
		{
			$active = ($rs['id'] == $page['id']) ? " class='active'" : '';
				
			$s .= "<li$active><a href='" . BASEURL . ndxz_rewriter($page['url']) . "' onclick=\"do_click();\">" . $page['title'] . "</a></li>\n";
		}
		
		$s .= "</ul>\n\n";
	}

	return $s;
}



// background image is fixed attachment
function backgrounder($color='', $img='', $tile='')
{
	if (($color == '') && ($img = '')) return;
	
	$style = (strtolower($color) != 'ffffff') ? "background-color: #$color;" : '';
	
	$tile = ($tile != 1) ? 'no-repeat' : 'repeat';
	
	$style .= ($img != '') ? "\nbackground-image: url(".BASEURL."/files/$img);\nbackground-repeat: $tile;\nbackground-position: 215px 0;\nbackground-attachment: fixed;\n" : '';
	
	// nothing to add
	if ($style == '') return;

	return "<style type='text/css'>\nbody { $style }\n</style>";
}


function ndxz_users()
{
	$REST =& load_class('rest', TRUE, 'lib');
	return $REST->indexhibit_user_list();
}

?>