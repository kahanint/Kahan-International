<?php

	require_once '../config.php';
	require_once (INCLUDES.'Kahan.php');
	
	$obj = new KahanClass();

	if(!empty($_GET['vid']))
	{
		$content = file_get_contents("https://youtube.com/get_video_info?video_id=".$_GET['vid']);
		parse_str($content, $ytarr);
		$ytarr['keywords'];
		echo $keywords = str_replace(',',' | ',$ytarr['keywords']);
		exit;
	}
	else
	{
		$options['api'] = API."kahanapi.php?case=fetchvideo";
		$sdrs = $obj->fetch_api_results($options);

		foreach($sdrs['results'] as $dt )
		{
			$vdid 		= explode('embed/', $dt['profilevideo']);
			$videoid 	=  $vdid[1];
			$pid 		=  $dt['productid'];


			$content = file_get_contents("https://youtube.com/get_video_info?video_id=".$videoid);
			parse_str($content, $ytarr);
			parse_str($ytarr['url_encoded_fmt_stream_map'],$url);
			parse_str($url['url'],$duration);

			//echo "<pre>";
			//print_R($ytarr);
			//print_r($duration);
			if(!empty($url['url']))
			{
				$dur	= "PT".(int)date("i", $duration['dur'])."M".date("s", $duration['dur'])."S"; 
				$ts 	= ($duration['lmt']/1000000);
				$date 	= gmdate('c', $ts);

				$keywords 			= $ytarr['keywords'];


				$insstr = json_encode($extravideo); 
				
				//echo "<br>==============$videoid=================<br>";
				echo "UPDATE tbl_product set videoduration = '$dur' , videodate = '$date' where productid =".$pid.";";
				echo "<br>";

			}
			else
			{
				echo "<br>==============$videoid=================<br>";
				echo "UNSUCCESSFUL";
				echo "<br>";
			}
		}
	}
?>