<?php

error_reporting(E_ERROR);

if(isset($_SERVER["HTTPS"]))
	define('PROTOCOL',"https");
else
	define('PROTOCOL',"http");


define('KAHAN_DB','kahanint_dbkahan');
define('DOC_ROOT',$_SERVER['DOCUMENT_ROOT']."/");
define('HOST',PROTOCOL."://".$_SERVER['HTTP_HOST']);

if(stristr(HOST,"kahaninternational"))
	define('DOMAIN',HOST."/");
else
	define('DOMAIN',HOST."/kahan/");

?>