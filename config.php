<?php
/* Open Ticket ID - 55615 */
error_reporting(E_ALL & ~E_NOTICE);
//ob_start();
session_start();


if(isset($_SERVER["HTTPS"]))
	define('PROTOCOL',"https");
else
	define('PROTOCOL',"http");



define('HOST',PROTOCOL."://".$_SERVER['HTTP_HOST']);
if(stristr(HOST,"kahaninternational"))
	define('DOMAIN',HOST."/");
else
	define('DOMAIN',HOST."/kahan/");
//define('DOMAIN',"https://kahaninternational.com/kahan/");


define('API',DOMAIN.'API/');
define('ADMIN',DOMAIN.'backnd/');
define('JS',DOMAIN.'tools/js/');
define('CSS',DOMAIN.'tools/css/');
define('IMG',DOMAIN.'tools/images/');
define('PROIMG',ADMIN.'uploads/productimage/');
define('RESPONSELOG',0);
define('DOC_ROOT',dirname(__FILE__).'/');
define('BASE_PATH', $_SERVER['DOCUMENT_ROOT']);
define('INCLUDES',DOC_ROOT.'include/');
define('TEMPLATE',DOC_ROOT.'template/');
define('VERSION','6.24');
define('API_VERSION','3.21');
define('THUMBIMG',ADMIN.'uploads/otherimage/thumbnail/');
define('ACTIMG',ADMIN.'uploads/otherimage/');

if(stristr(DOMAIN,'kahaninternational') != false)
	$min = "_min";
else
	$min = "";

	/*Array of css For Common CSS */
$common_css = array($font_css,"bootstrap.min","style");

/*Array For Common JS */
$common_js = array("jquery.min","bootstrap.min","common");

//session_write_close();
/*
$ARRAY_JS = array(
	'home' 		=> array('eventlanding','slide-bootstrap','jquery-ui.min','jquery.bxslider.min','landingm','calendar'),
	'listing' 		=> array('eventlanding','slide-bootstrap','jquery-ui.min','jquery.bxslider.min','calendar'),
	'detail' 		=> array('jdapi.min','venue')
);


$ARRAY_CSS = array(
	'home'     	=> array('datepicker'),
	'listing'     	=> array('datepicker'),
	'detail'     	=> array('datepicker')
	);
	*/
?>
