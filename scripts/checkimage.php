<?php
//	error_reporting('E_ALL');

	$case = strtolower($_GET['case']);
	require_once ('../config.php');
	require_once (INCLUDES.'Kahan.php');

	$imageroot = DOC_ROOT."backnd/uploads/";
	
	$obj = new KahanClass();

	SWITCH($case)
	{

	/*Landing All Cases */	
		CASE 'productimage':
		
		
		
		$copyfrom 		= $imageroot."productimage"; 
		$pasteto 		= $imageroot."optimizedproductimage"; 
		
		if (!file_exists($pasteto))
		{
			mkdir($pasteto, 0755, true);
		}
		
 		$options['api'] = API."kahanapi.php?case=fetchimagelist&module=productimg";
		$rsdt 			= $obj->fetch_api_results($options);
		$imgdata 		= $rsdt['results'];
		
		
		foreach ($imgdata as $value)
		{
			$path = PROIMG.$value;
			$copypath = $copyfrom."/".$value;
			$pastepath = $pasteto."/".$value;
			
			$file_headers = @get_headers($path);
			if($file_headers[0] == 'HTTP/1.1 200 OK')
			{
				if(copy($copypath,$pastepath))
				{
					//echo $value.'---Sucessful<br>';
				}
				else
				{
					echo $value.'---Failed<br>';
				}
			}
		}
		ECHO "DONE";
		
		BREAK;
	}
?>