<?php define('SITE', 'Bonjour!');

/**
* Installation
*
* Not going to bother documenting this...oi vey... ;)
* We'll make if better some day.
*
* See readme.txt for additional installation instructions
* 
* @version 1.0
* @author Vaska
*/

	// turn this on if you want to check things
	//error_reporting(E_ALL);

	require_once 'defaults.php';
	require_once 'common.php';
	require_once './helper/entrance.php';
	require_once './helper/html.php';
	require_once './helper/time.php';
	require_once './lang/index.php';
	
	$page = getURI('page', 0, 'alnum', 1);
	
	// set cookie
	if (isset($_POST['submitLang']) && ($_POST['user_lang'] != ''))
	{
		setcookie('install', $_POST['user_lang'], time()+3600);
		header("location:install.php?page=1");
	}
	
	// look for the cookie here
	$picked = (isset($_COOKIE['install'])) ? $_COOKIE['install'] : 'en-us';
	
	$lang = new Lang;
	$lang->setlang($picked);
	
	function install_db()
	{
		global $c, $picked;
		
		require_once './config/config.php';
		
		if (mysql_ver() <= 4)
		{
			$isam = 'TYPE=MyISAM';
		}
		else // it's 5
		{
			// address this later
			//$isam = 'ENGINE=MyISAM DEFAULT CHARSET=utf8';
			$isam = 'TYPE=MyISAM';
		}
		
		$sql = array();
		
		$sql[] = "CREATE TABLE IF NOT EXISTS `iptocountry` (
		  `ip_from` double NOT NULL default '0',
		  `ip_to` double NOT NULL default '0',
		  `country_code2` char(2) NOT NULL,
		  `country_code3` char(3) NOT NULL,
		  `country_name` varchar(50) NOT NULL,
		  KEY `ip_from_to_idx` (`ip_from`,`ip_to`)
		) $isam ;";
		
		$sql[] = "CREATE TABLE IF NOT EXISTS `" . PX . "media` (
		  `media_id` int(11) NOT NULL auto_increment,
		  `media_ref_id` smallint(6) NOT NULL default '0',
		  `media_obj_type` varchar(15) NOT NULL,
		  `media_mime` varchar(15) NOT NULL,
		  `media_tags` varchar(255) NOT NULL default '0',
		  `media_file` varchar(255) NOT NULL,
		  `media_title` varchar(255) NOT NULL,
		  `media_caption` tinytext NOT NULL,
		  `media_x` varchar(5) NOT NULL,
		  `media_y` varchar(5) NOT NULL,
		  `media_kb` mediumint(9) NOT NULL default '0',
		  `media_udate` datetime NOT NULL default '0000-00-00 00:00:00',
		  `media_uploaded` datetime NOT NULL default '0000-00-00 00:00:00',
		  `media_order` smallint(3) NOT NULL default '999',
		  `media_hide` tinyint(1) NOT NULL default '0',
		  PRIMARY KEY  (`media_id`)
		) $isam ;";

		$sql[] = "CREATE TABLE IF NOT EXISTS `" . PX . "objects` (
		  `id` int(11) NOT NULL auto_increment,
		  `object` varchar(100) NOT NULL,
		  `obj_ref_id` int(4) NOT NULL default '0',
		  `title` varchar(100) NOT NULL,
		  `content` mediumtext NOT NULL,
		  `tags` varchar(250) NOT NULL default '0',
		  `header` text NOT NULL,
		  `udate` datetime NOT NULL default '0000-00-00 00:00:00',
		  `pdate` datetime NOT NULL default '0000-00-00 00:00:00',
		  `creator` tinyint(3) NOT NULL default '0',
		  `status` tinyint(1) NOT NULL default '0',
		  `process` tinyint(1) NOT NULL default '1',
		  `page_cache` tinyint(1) NOT NULL default '0',
		  `section_id` tinyint(3) NOT NULL default '0',
		  `url` varchar(250) NOT NULL,
		  `ord` smallint(3) NOT NULL default '999',
		  `color` varchar(7) NOT NULL default 'ffffff',
		  `bgimg` varchar(255) NOT NULL,
		  `hidden` tinyint(1) NOT NULL default '0',
		  `current` tinyint(1) NOT NULL default '0',
		  `images` smallint(4) NOT NULL default '9999',
		  `thumbs` smallint(4) NOT NULL default '200',
		  `format` varchar(100) NOT NULL default 'grow',
		  `break` smallint(2) NOT NULL default '0',
		  `tiling` tinyint(1) NOT NULL default '1',
		  `year` varchar(4) NOT NULL default '2007',
		  `report` tinyint(1) NOT NULL default '0',
		  PRIMARY KEY  (`id`)
		) $isam ;";


		$sql[] = "CREATE TABLE IF NOT EXISTS `" . PX . "objects_prefs` (
		  `obj_id` int(11) NOT NULL auto_increment,
		  `obj_ref_type` varchar(255) NOT NULL,
		  `obj_name` varchar(255) NOT NULL,
		  `obj_email` varchar(100) NOT NULL,
		  `obj_mode` tinyint(1) NOT NULL default '0',
		  `obj_itop` text NOT NULL,
		  `obj_ibot` text NOT NULL,
		  `obj_apikey` varchar(32) NOT NULL,
		  `obj_theme` varchar(50) NOT NULL,
		  `obj_org` tinyint(1) NOT NULL default '0',
		  PRIMARY KEY  (`obj_id`)
		) $isam ;";


		$sql[] = "CREATE TABLE IF NOT EXISTS `" . PX . "sections` (
		  `secid` tinyint(3) NOT NULL auto_increment,
		  `section` varchar(60) NOT NULL,
		  `sec_ord` tinyint(4) NOT NULL default '0',
		  `sec_disp` tinyint(3) NOT NULL default '1',
		  `sec_date` datetime NOT NULL default '0000-00-00 00:00:00',
		  `sec_path` varchar(250) NOT NULL,
		  `sec_desc` varchar(100) NOT NULL,
		  `sec_proj` tinyint(1) NOT NULL default '0',
		  `sec_report` tinyint(1) NOT NULL default '0',
		  PRIMARY KEY  (`secid`)
		) $isam ;";



		$sql[] = "CREATE TABLE IF NOT EXISTS `" . PX . "settings` (
		  `adm_id` tinyint(3) NOT NULL auto_increment,
		  `site_name` varchar(40) NOT NULL,
		  `installdate` varchar(20) NOT NULL,
		  `version` varchar(25) NOT NULL,
		  `edition` int(11) NOT NULL,
		  `curr_time` tinyint(3) NOT NULL default '0',
		  `time_format` varchar(25) NOT NULL,
		  `help` tinyint(1) NOT NULL default '0',
		  PRIMARY KEY  (`adm_id`)
		) $isam ;";


		$sql[] = "CREATE TABLE IF NOT EXISTS `" . PX . "stats` (
		  `hit_id` int(14) NOT NULL auto_increment,
		  `hit_addr` varchar(16) NOT NULL,
		  `hit_country` varchar(30) NOT NULL,
		  `hit_lang` varchar(10) NOT NULL,
		  `hit_domain` varchar(100) NOT NULL,
		  `hit_referrer` varchar(100) NOT NULL,
		  `hit_page` varchar(100) NOT NULL,
		  `hit_agent` varchar(250) NOT NULL,
		  `hit_keyword` varchar(250) NOT NULL,
		  `hit_os` varchar(20) NOT NULL,
		  `hit_browser` varchar(20) NOT NULL,
		  `hit_time` datetime NOT NULL default '0000-00-00 00:00:00',
		  PRIMARY KEY  (`hit_id`)
		) $isam ;";


		$sql[] = "CREATE TABLE IF NOT EXISTS `" . PX . "users` (
		  `ID` int(11) NOT NULL auto_increment,
		  `userid` varchar(100) NOT NULL,
		  `password` varchar(32) NOT NULL,
		  `email` varchar(100) NOT NULL,
		  `user_title` varchar(50) NOT NULL,
		  `threads` tinyint(3) NOT NULL default '10',
		  `writing` tinyint(1) NOT NULL default '0',
		  `user_offset` tinyint(3) NOT NULL default '0',
		  `user_format` varchar(30) NOT NULL default '%d %B %Y',
		  `user_lang` varchar(8) NOT NULL default 'en-us',
		  `user_hash` varchar(32) NOT NULL,
		  `user_help` tinyint(1) NOT NULL default '0',
		  `user_mode` tinyint(1) NOT NULL default '0',
		  PRIMARY KEY  (`ID`),
		  UNIQUE KEY `userid` (`userid`),
		  KEY `ID` (`ID`)
		) $isam ;";
		
		$sql[] = "INSERT INTO `".PX."objects` (`id`, `object`, `obj_ref_id`, `title`, `content`, `tags`, `header`, `udate`, `pdate`, `creator`, `status`, `process`, `page_cache`, `section_id`, `url`, `ord`, `color`, `bgimg`, `hidden`, `current`, `images`, `thumbs`, `format`, `break`, `tiling`, `year`, `report`) VALUES (1, 'exhibit', 0, 'Main', '<p>Edit this page.</p>', '0', '', '".getNow()."', '".getNow()."', 1, 1, 1, 0, 1, '/', 2, 'ffffff', '', 0, 0, 400, 100, 'grow', 0, 1, '2007', 0);";
		
		$sql[] = "INSERT INTO `".PX."objects` (`id`, `object`, `obj_ref_id`, `title`, `content`, `tags`, `header`, `udate`, `pdate`, `creator`, `status`, `process`, `page_cache`, `section_id`, `url`, `ord`, `color`, `bgimg`, `hidden`, `current`, `images`, `thumbs`, `format`, `break`, `tiling`, `year`, `report`) VALUES (2, 'exhibit', 0, 'About this site', '<plug:ndxz_users />', '0', '', '".getNow()."', '".getNow()."', 1, 1, 1, 0, 1, '/about-this-site/', 1, 'ffffff', '', 1, 0, 9999, 200, 'grow', 0, 1, '2007', 0);";
		
		$sql[] = "INSERT INTO `".PX."objects_prefs` (`obj_id`, `obj_ref_type`, `obj_name`, `obj_email`, `obj_mode`, `obj_itop`, `obj_ibot`, `obj_apikey`, `obj_theme`, `obj_org`) VALUES (1, 'exhibit', '".addslashes($c['n_site'])."', '', 0, '<p><%obj_name%><br /><a href=\'<%baseurl%><plug:ndxz_rewriter url=\'/about-this-site/\' />\'>About This Site</a></p>', '<p>Copyright 2007</p>', '', 'eatock', 0);";
		
		$sql[] = "INSERT INTO `".PX."sections` (`secid`, `section`, `sec_ord`, `sec_disp`, `sec_date`, `sec_path`, `sec_desc`, `sec_proj`, `sec_report`) VALUES 
		(1, 'root', 3, 1, '".getNow()."', '/', 'Info', 0, 0), 
		(2, 'projects', 2, 1, '".getNow()."', '/project', 'Projects', 1, 0),
		(3, 'ongoing', 1, 1, '".getNow()."', '/project', 'On-going', 0, 0);";
		
		$sql[] = "INSERT INTO `".PX."settings` (`adm_id`, `site_name`, `installdate`, `version`, `curr_time`, `time_format`, `help`) VALUES (1, '', '".getNow()."', '".VERSION."', 1, '%d %B %Y', 0);";

		$sql[] = "INSERT INTO `".PX."users` (`ID`, `userid`, `password`, `email`, `threads`, `writing`, `user_offset`, `user_format`, `user_lang`, `user_hash`, `user_help`, `user_mode`) VALUES (1, 'index1', '22645ed8b5f5fa4b597d0fe61bed6a96', '', 10, 0, 1, '%d %B %Y', '$picked', '5f8bfb51cc5c437a603abe3766d004d8', 0, 0);";
		
		$link = @mysql_connect($indx['host'], $indx['user'], $indx['pass']);
		if (@mysql_select_db($indx['db'], $link))
		{
			foreach ($sql as $install)
			{
				@mysql_query($install);
			}
		}
	}


	function mysql_ver()
	{
		$ver = mysql_get_client_info();
		$num = explode('.', $ver);
		return $num[0];
	}
	
	function showPosted($var)
	{
		global $c;
		
		if ((!isset($c['n_host']) && ($var == 'n_host'))) return 'localhost';
		
		if (isset($c[$var]))
		{
			if ($var == 'n_host')
			{
				return ($c['n_host'] == 'localhost') ? 'localhost' : $c['n_host'];
			}
			
			return $c[$var];
		}
	}
	
	function writeConfig()
	{
		global $c;
		
		if (!is_array($c)) exit;
		
		$path = DIRNAME . BASENAME . '/config';
		$filename = $path . '/config.php';
		
		$somecontent = "<?php  if (!defined('SITE')) exit('No direct script access allowed');

\$indx['db'] 		= '$c[n_name]';
\$indx['user'] 		= '$c[n_user]';
\$indx['pass'] 		= '$c[n_pwd]';
\$indx['host'] 		= '$c[n_host]';
\$indx['sql']		= 'mysql';

?>";

		if (is_writable($path)) 
		{
			if (!$handle = fopen($filename, 'w')) 
			{
				return FALSE;
			}

			if (fwrite($handle, $somecontent) === FALSE) 
			{
				return FALSE;
			}

			fclose($handle);
			return TRUE;
		}

		return FALSE;
	}
	
	function getLanguage($default='', $name, $attr='')
	{
		global $lang;

		$s = '';

		$rs = $lang->lang_options();

		if ($default == '')
		{
			$s .= option('', $lang->word('make selection'), 0, 0);
		}

		foreach ($rs as $key => $a) 
		{
			$language = array_pop($a);

			// check to see if the lang folder exists
			if (is_dir(DIRNAME . BASENAME . '/' . LANGPATH . '/' . $key))
			{
				($default == $a) ? $sl = "selected ": $sl = "";
				$s .= option($key, $lang->word($language), $default, $key);
			}
		}
		clearstatcache();

		return select($name, attr($attr), $s);
	}
	
	
	// try to connect & install
	if (isset($_POST['n_submit']))
	{
		// check the vars...clean...
		$c['n_host']	= getPOST('n_host', '', 'connect', 100);
		$c['n_name']	= getPOST('n_name', '', 'connect', 65);
		$c['n_user']	= getPOST('n_user', '', 'connect', 50);
		$c['n_pwd']		= getPOST('n_pwd', '', 'connect', 50);
		$c['n_site']	= getPOST('n_site', '', 'none', 50);
		$GLOBALS['c'] = $c;
		
		// check connection - tables exist?
		$link = @mysql_connect($c['n_host'], $c['n_user'], $c['n_pwd']);
	
		if (@mysql_select_db($c['n_name'], $link) && (writeConfig() == TRUE))
		{	
			$result = @mysql_query("SELECT * FROM ".PX."settings WHERE adm_id = 1");
		
			if ($result)
			{
				header("location:install.php?page=3&s=success");
			}
			else
			{
				// this is where we try to install
				install_db();
			
				// let's check
				$result = @mysql_query("SELECT * FROM ".PX."settings WHERE adm_id = 1");
			
				if ($result)
				{
					header("location:install.php?page=3&s=success");
				}
				else
				{
					$s = "<p><span class='ok-not'>XX</span> " . $lang->word('cannot install') . "</p><br />";
					$s .= "<p><small>" . $lang->word('goto forum') . "</small></p><br />";
				}
			}
		}
		else
		{
			$s = "<p><span class='ok-not'>XX</span> " . $lang->word('check config') . "</p><br />";
			$s .= "<p><small>" . $lang->word('goto forum') . "</small></p><br />";
		}
	}
	else
	{
		// make error note
	}
	
	function makeEdition()
	{
		$rest = 'http://api.indexhibit.org/?method=edition&url=' . urlencode(BASEURL);
		$edition = @file_get_contents($rest);
		
		//@mysql_query("");
		//return ($edition == '') ? 0 : $edition;
		
		return;
	}
	
	header ('Content-type: text/html; charset=utf-8');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<title>Install : Indexhibit</title>

<link type="text/css" rel='stylesheet'  href="asset/css/style.css" />
	
<style type='text/css'>
body { font-family: Arial, Helvetica, Verdana, sans-serif; font-size: 10px; }
h1, h2 { margin: 6px 0 0 3px; }
h2 { margin-bottom: 6px; }
p { margin: 0 0 6px 3px; font-size: 12px; width: 300px; }
p.red { color: #c00; }
code { margin: 18px 0; font-size: 12px; }
.ok { color: #0c0; padding-right: 9px; }
.ok-not { color: #f00; padding-right: 9px; }
#footer { border-top: none; }
#log-form { margin-left: 3px; }
</style>
</head>

<body>
<div id='all'>

<h1>Indexhibit</h1>

<div id='main'>

<form action='' method='post'>
	
<?php

	if ($page == 0)
	{
		echo ips($lang->word('your language'), 'getLanguage', 'user_lang', NULL, NULL, 'text');
		echo "<input type='submit' name='submitLang' value='NEXT &raquo;' />\n";
	}
	elseif ($page == 1)
	{
		/* Review later
		if (file_exists(DIRNAME . '/.htaccess'))
		{
			$flagA = true;
			echo "<p><span class='ok'>OK</span> " . $lang->word('htaccess ok') . "</p>";
		}
		else
		{
			echo "<p><span class='ok-not'>??</span> " . $lang->word('htaccess not ok') . "</p>";
		}
		*/
		
		if ((is_dir(DIRNAME . '/files')) && (is_writable(DIRNAME . '/files')))
		{
			$flagB = true;
			echo "<p><span class='ok'>OK</span> " . $lang->word('files ok') . "</p>\n";
		}
		else
		{
			echo "<p><span class='ok-not'>XX</span> " . $lang->word('files not ok') . "</p>";
		}
		
		if ((is_dir(DIRNAME . '/files/gimgs')) && (is_writable(DIRNAME . '/files/gimgs')))
		{
			$flagC = true;
			echo "<p><span class='ok'>OK</span> " . $lang->word('filesgimgs ok') . "</p>";
		}
		else
		{
			echo "<p><span class='ok-not'>XX</span> " . $lang->word('filesgimgs not ok') . "</p>";
		}
		
		if ((is_dir(DIRNAME . '/ndxz-studio/config')) && (is_writable(DIRNAME . '/ndxz-studio/config')))
		{
			$flagD = true;
			echo "<p><span class='ok'>OK</span> " . $lang->word('config ok') . "</p>\n";
		}
		else
		{
			echo "<p><span class='ok-not'>XX</span> " . $lang->word('config not ok') . "</p>";
		}
		
		if (($flagB == true) && ($flagC == true) && ($flagD == true))
		{
			echo "<br /><p><strong>" . $lang->word('try db setup now') . "</strong></p>";
			echo "<br /><p><a href='?page=2'>" . $lang->word('continue') . "</a></p><br />";
		}
		else
		{
			echo "<br /><p><strong>" . $lang->word('please correct errors') . "<strong></p><br />";
			echo "<p><strong>" . $lang->word('refresh page') . "</strong></p><br />";
			echo "<p><small>" . $lang->word('goto forum') . "</small></p><br />";
		}
		
		// we need gd library and mbstring and php4+ and mysql 3.23+
	}
	elseif ($page == 2)
	{
		echo "<div id='log-form'>\n";
		echo "<form name='iform' method='post'>\n";
		
		// build the form here
		echo "<label>" . $lang->word('exhibition name') . "</label><br />\n";
		echo "<input type='text' name='n_site' value='".showPosted('n_site')."' maxlength='50' />\n";
		
		echo "<label>" . $lang->word('database server') . "</label><br />\n";
		echo "<input type='text' name='n_host' value='".showPosted('n_host')."' maxlength='50' />\n";
		
		echo "<label>" . $lang->word('database name') . "</label><br />\n";
		echo "<input type='text' name='n_name' value='".showPosted('n_name')."' maxlength='50' />\n";
		
		echo "<label>" . $lang->word('database username') . "</label><br />\n";
		echo "<input type='text' name='n_user' value='".showPosted('n_user')."' maxlength='50' />\n";
		
		echo "<label>" . $lang->word('database password') . "</label><br />\n";
		echo "<input type='text' name='n_pwd' value='".showPosted('n_pwd')."' maxlength='35' />\n";

		echo "<input type='submit' name='n_submit' value='" . $lang->word('submit') . "' maxlength='50' /><br />\n";
		
		echo "</form>\n";
		
		if (isset($s)) echo $s;
		
		echo "</div>\n";
	}
	elseif ($page == 3)
	{
		if ($_GET['s'] == 'success')
		{
			echo "<p><span class='ok'>OK</span> " . $lang->word('database is ready') . "</p>";
			
			echo "<p><strong>" . $lang->word('default login') . "</strong></p>";
			echo "<p>" . $lang->word('change settings') . "</p>";
			echo "<br /><p><a href='".BASEURL.BASENAME."/'>" . $lang->word('lets login') . "</a></p><br />";
			// let's get an edition number
			makeEdition();
		}
		else
		{
			echo "<p><span class='ok-not'>XX</span> " . $lang->word('cannot install') . "</p><br />";
			echo "<p><small>" . $lang->word('goto forum') . "</small></p><br />";
		}
	}
	else
	{
		echo "<p class='red'>" . $lang->word('freak out') . "</p><br />";
		echo "<p><small>" . $lang->word('goto forum') . "</small></p><br />";
	}

?>
</form>

<div class='cl'><!-- --></div>

</div>

<div id='footer' class='c2'>
	<div class='col'><a href='<?php echo BASEURL.BASENAME ?>/license.txt'>License</a></div>
	<div class='cl'><!-- --></div>
</div>
	
</div>
</body>
</html>
