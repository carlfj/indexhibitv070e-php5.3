<?php define('SITE', 'Bonjour!');

// turn this on if you want to check things
//error_reporting(E_ALL);

// the basics
if (file_exists('ndxz-studio/config/config.php')) require_once 'ndxz-studio/config/config.php';

require_once 'ndxz-studio/defaults.php';
require_once 'ndxz-studio/common.php';

// make sure we have our connection array
shutDownCheck();

// messy, but seems to work
$_REAL_SCRIPT_DIR = realpath(dirname($_SERVER['SCRIPT_FILENAME']));
$_REAL_BASE_DIR = realpath(dirname(__FILE__));
$_MY_PATH_PART = substr($_REAL_SCRIPT_DIR, strlen($_REAL_BASE_DIR));
$uri = $_MY_PATH_PART
	? substr(dirname($_SERVER['SCRIPT_NAME']), 0, -strlen($_MY_PATH_PART))
	: dirname($_SERVER['SCRIPT_NAME']);

// clean up the uri
$uri = (MODREWRITE == false) ?
	str_replace('/index.php?', '', $_SERVER['REQUEST_URI']) :
	entry_uri($uri, $_SERVER['REQUEST_URI']);
	
// TEMPORARY
// what if it's more than one folder up?
$uri = str_replace($self, '', $uri);
	
// time to roll
load_helpers(array('time'));
$OBJ =& load_class('core', TRUE, 'lib');

// page query
$rs = $OBJ->db->fetchRecord("SELECT * 
	FROM ".PX."objects, ".PX."objects_prefs 
	WHERE url = '$uri'
	AND status = '1' 
	AND object = obj_ref_type");

if (!$rs) 
{
	// try again with site root
	$rs = $OBJ->db->fetchRecord("SELECT * 
		FROM ".PX."objects, ".PX."objects_prefs 
		WHERE url = '/'
		AND status = '1' 
		AND object = obj_ref_type");
		
	// we don't search engines indexing this
	header("HTTP/1.1 404 Not Found");

	// we need a formal error page
	if (!$rs) echo 'Page not found error here.';
}

// autoload 'plugins' folder
include DIRNAME.BASENAME.'/site/plugin/index.php';

// additional variables
// perhaps we should port these differently?
$rs['baseurl'] = BASEURL;
$rs['basename'] = BASENAME;
$rs['basefiles'] = BASEFILES;
$rs['gimgs'] = GIMGS;
	
// get the front end helper class
$OBJ->lib_class('front');

// time for some action
if ($rs['obj_theme'] == 'eatock')
{
	$contents = $OBJ->front->front_eatock();
}
else
{
	$filename = DIRNAME . BASENAME . '/site/' . $rs['obj_theme'] . '/index.php';
	$fp = @fopen($filename, 'r');
	$contents = fread($fp, filesize($filename));
	fclose($fp);
}

// makin' stuff happen
$PARSE =& load_class('parse', TRUE, 'lib');
$PARSE->vars = $rs;
$PARSE->code = $contents;
echo $PARSE->parsing();

// do stats if they are wanted
if ($default['statistics'] == TRUE) load_class('statistics', TRUE, 'lib');
exit;


?>