<?php
error_reporting(0);

	$case = strtolower($_GET['case']);
	
	require_once 'config.php';
	
	require_once (INCLUDES.'Kahan.php');
	$obj = new KahanClass();


	$user_ip 		= $obj->get_client_ip();
	$default_case 	= "";
	$pid 			= 	!empty($_GET['pid'])	?	$_GET['pid']	:	'';	
	$cname 			= 	!empty($_GET['cname'])	?	$_GET['cname']	:	'FILLING MACHINES';	

	$params = array_merge($_GET,$_POST);
	
	
	SWITCH($params['case'])
	{
		CASE 'fetchvideo':
			$options['api'] = API."kahanapi.php?".http_build_query($params);
			$result = $obj->fetch_api_results($options);
			echo json_encode($result);
		break;
	/*Landing All Cases */	
		CASE 'sendContact':
		
				$params['mail']	= $obj->sendmail($params);
				$options['api'] = API."kahanapi.php?".http_build_query($params);
				$sdrs = $obj->fetch_api_results($options);
				echo json_encode($sdrs);
		BREAK;
	
		


	}
	
		
	
?>